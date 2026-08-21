<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->longText('content');
            $table->string('category')->index();
            $table->string('author_name')->default('Eirecon Engineering Team');
            $table->string('featured_image');
            $table->string('image_alt')->nullable();
            $table->unsignedSmallInteger('reading_minutes')->default(5);
            $table->timestamp('published_at')->nullable()->index();
            $table->boolean('is_featured')->default(false)->index();
            $table->enum('status', ['draft', 'published'])->default('draft')->index();
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
