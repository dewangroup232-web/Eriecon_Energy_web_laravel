<?php

namespace Tests\Feature;

use App\Models\BlogPost;
use App\Models\HeroBanner;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class CmsIntegrationTest extends TestCase
{
    use RefreshDatabase;

    protected $seed = true;

    public function test_seeded_content_renders_on_home_and_blog_pages(): void
    {
        $this->get('/index.html')->assertOk()->assertSee('EIRECON ENERGY COMPANY');
        $this->get('/blog')->assertOk()->assertSee('Engineering certainty before construction begins');
        $this->get('/blog/engineering-certainty-before-construction-begins')
            ->assertOk()->assertSee('The commercial value of engineering certainty');
    }

    public function test_content_apis_return_seeded_records(): void
    {
        $this->getJson('/api/hero-banners')->assertOk()->assertJsonCount(4, 'data');
        $this->getJson('/api/blogs')->assertOk()->assertJsonPath('total', 7);
        $this->getJson('/api/blogs/engineering-certainty-before-construction-begins')
            ->assertOk()->assertJsonPath('data.category', 'Project Delivery');
    }

    public function test_admin_credentials_are_hashed_and_can_sign_in(): void
    {
        $admin = User::where('email', 'info@eirecon.com')->firstOrFail();
        $this->assertTrue($admin->is_admin);
        $this->assertTrue(Hash::check('Eirecon@09112000', $admin->password));

        $this->post('/admin/login', [
            'email' => 'info@eirecon.com',
            'password' => 'Eirecon@09112000',
        ])->assertRedirect('/admin');

        $this->assertAuthenticatedAs($admin);
        $this->get('/admin')->assertOk()->assertSee('Good to see you');
    }

    public function test_admin_can_upload_a_banner_and_blog_post(): void
    {
        Storage::fake('public');
        $admin = User::where('email', 'info@eirecon.com')->firstOrFail();

        $this->actingAs($admin)->get('/admin/blogs/create')
            ->assertOk()
            ->assertSee('data-quill-editor', false)
            ->assertSee('quill@2.0.3');

        $this->actingAs($admin)->post('/admin/banners', [
            'title' => 'Test banner',
            'subtitle' => 'Test subtitle',
            'cta_text' => 'Explore',
            'cta_url' => '/projects',
            'sort_order' => 99,
            'is_active' => 1,
            'image_alt' => 'Test industrial banner',
            'image' => UploadedFile::fake()->image('banner.jpg', 1600, 900),
        ])->assertRedirect(route('admin.banners.index'));

        $banner = HeroBanner::where('title', 'Test banner')->firstOrFail();
        Storage::disk('public')->assertExists($banner->image_path);

        $this->actingAs($admin)->post('/admin/blogs', [
            'title' => 'CMS integration test article',
            'slug' => 'cms-integration-test-article',
            'excerpt' => 'A test article created through the same validated admin workflow.',
            'content' => '<p>Verified article body.</p>',
            'category' => 'Engineering',
            'author_name' => 'Eirecon Test Team',
            'reading_minutes' => 3,
            'status' => 'published',
            'published_at' => now()->format('Y-m-d H:i:s'),
            'image_alt' => 'Test article image',
            'featured_image' => UploadedFile::fake()->image('article.jpg', 1200, 800),
        ])->assertRedirect(route('admin.blogs.index'));

        $post = BlogPost::where('slug', 'cms-integration-test-article')->firstOrFail();
        Storage::disk('public')->assertExists($post->featured_image);
        $this->getJson('/api/blogs/cms-integration-test-article')->assertOk();
    }
}
