<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\HeroBanner;
use App\Models\User;
use Illuminate\Database\Seeder;

class CmsContentSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'info@eirecon.com'],
            ['name' => 'Eirecon Admin', 'password' => 'Eirecon@09112000', 'is_admin' => true, 'email_verified_at' => now()]
        );

        $bannerImages = ['13.jpg', 'banner_2.jpeg', 'banner_3.jpeg', 'Banner4.jpeg'];
        foreach ($bannerImages as $index => $image) {
            HeroBanner::updateOrCreate(
                ['image_path' => 'assets/img/banner/'.$image],
                [
                    'title' => 'EIRECON ENERGY COMPANY',
                    'subtitle' => '"Energy That Drives the World"',
                    'cta_text' => 'View Projects',
                    'cta_url' => '/projects.html',
                    'image_alt' => 'Eirecon Energy industrial project',
                    'sort_order' => $index + 1,
                    'is_active' => true,
                ]
            );
        }

        $posts = [
            [
                'title' => 'Engineering certainty before construction begins',
                'slug' => 'engineering-certainty-before-construction-begins',
                'excerpt' => 'How disciplined front-end decisions reduce site risk, protect schedules, and create a clearer path from design intent to safe execution.',
                'category' => 'Project Delivery',
                'featured_image' => 'assets/img/services/1.png',
                'image_alt' => 'Industrial engineering team reviewing a complex energy project',
                'reading_minutes' => 7,
                'published_at' => '2026-08-18 09:00:00',
                'is_featured' => true,
                'content' => <<<'HTML'
<p class="article-lead">Complex industrial projects rarely fail because teams lack technical knowledge. They lose momentum when decisions arrive late, interfaces remain unclear, or engineering information reaches construction before it is ready.</p>
<p>Front-end engineering is more than a design phase. It converts uncertainty into a coordinated delivery strategy. Every confirmed load, resolved interface, approved material, and constructability decision removes a future source of disruption.</p>
<h2>The commercial value of engineering certainty</h2>
<p>Early clarity allows procurement teams to release packages with confidence, fabricators to plan repeatable work, and site teams to sequence activity around information they can trust.</p>
<blockquote class="article-quote">Good engineering does not eliminate every project change. It ensures change is identified early, evaluated clearly, and controlled deliberately.</blockquote>
<h2>Control the interfaces, not only the disciplines</h2>
<p>Civil, structural, mechanical, piping, electrical, and control teams may each produce technically sound work. The greatest delivery exposure often exists between those disciplines.</p>
<ul><li>Equipment loads must align with structural assumptions.</li><li>Piping routes must respect access and maintenance requirements.</li><li>Vendor data must enter the document set at controlled milestones.</li></ul>
<h2>Design for the way the project will be built</h2>
<p>Constructability belongs inside everyday engineering decisions. Module dimensions, connection details, weld access, lifting points, and installation tolerances influence how safely a design becomes a working asset.</p>
<div class="article-takeaways"><h3>Three practical takeaways</h3><ul><li>Define measurable readiness criteria for every package.</li><li>Track cross-discipline interfaces with named owners.</li><li>Make constructability a recurring design activity.</li></ul></div>
HTML
            ],
            [
                'title' => 'Designing interfaces that perform under pressure',
                'slug' => 'designing-interfaces-that-perform-under-pressure',
                'excerpt' => 'Why technical interfaces deserve the same rigor as major equipment and primary systems.',
                'category' => 'Engineering',
                'featured_image' => 'assets/img/services/2.png',
                'image_alt' => 'Industrial facility and process equipment',
                'reading_minutes' => 5,
                'published_at' => '2026-08-12 09:00:00',
                'content' => <<<'HTML'
<p class="article-lead">The performance of an industrial asset depends as much on the connections between systems as it does on the systems themselves.</p>
<h2>Interfaces are engineered deliverables</h2><p>Nozzle loads, cable terminations, access envelopes, control signals, and battery limits must be treated as owned and verifiable information.</p>
<h2>Create one source of truth</h2><p>Interface registers and coordinated reviews give every discipline a shared view of dependencies, due dates, and approval status.</p>
<blockquote class="article-quote">An interface that is not clearly owned will eventually become a site decision.</blockquote>
<h2>Test the operating reality</h2><p>Reviews should consider installation, commissioning, maintenance, isolation, and future replacement—not only the completed design model.</p>
HTML
            ],
            [
                'title' => 'From fabrication floor to flawless site assembly',
                'slug' => 'from-fabrication-floor-to-flawless-site-assembly',
                'excerpt' => 'A practical look at traceability, tolerances, and constructability across the steelwork journey.',
                'category' => 'Construction',
                'featured_image' => 'assets/img/services/3.png',
                'image_alt' => 'Steel construction work on an industrial project',
                'reading_minutes' => 6,
                'published_at' => '2026-08-05 09:00:00',
                'content' => <<<'HTML'
<p class="article-lead">Successful steel erection begins long before the first member reaches site. Fabrication accuracy and information discipline establish the conditions for safe assembly.</p>
<h2>Build traceability into the workflow</h2><p>Material certificates, weld maps, inspection records, and piece marks should follow each component through fabrication and delivery.</p>
<h2>Control cumulative tolerance</h2><p>Individual members can meet specification while accumulated variation creates alignment problems. Assembly checks expose those risks early.</p>
<h2>Package for the erection sequence</h2><p>Delivery lots, lifting points, temporary stability, access, and connection completion should reflect how the structure will actually be installed.</p>
HTML
            ],
            [
                'title' => 'The early signals of schedule risk',
                'slug' => 'the-early-signals-of-schedule-risk',
                'excerpt' => 'Small changes in information flow can reveal major delivery pressure before it reaches site.',
                'category' => 'Project Controls',
                'featured_image' => 'assets/img/services/8.png',
                'image_alt' => 'Engineers coordinating work at an energy facility',
                'reading_minutes' => 4,
                'published_at' => '2026-07-28 09:00:00',
                'content' => <<<'HTML'
<p class="article-lead">Schedule risk usually becomes visible in the quality and movement of information before it appears in progress curves.</p>
<h2>Watch decision latency</h2><p>Growing approval times, repeated clarification cycles, and unresolved assumptions are leading indicators of future delay.</p>
<h2>Measure readiness, not planned starts</h2><p>A package is ready only when drawings, materials, access, resources, and predecessor work are genuinely available.</p>
<h2>Connect signals to action</h2><p>Short-interval reviews should name the owner, due date, downstream impact, and recovery action for every constraint.</p>
HTML
            ],
            [
                'title' => 'Quality records as a delivery asset',
                'slug' => 'quality-records-as-a-delivery-asset',
                'excerpt' => 'Turning inspection evidence into a live source of confidence for teams, clients, and handover.',
                'category' => 'Quality',
                'featured_image' => 'assets/img/services/4.png',
                'image_alt' => 'Industrial inspection and quality control activity',
                'reading_minutes' => 5,
                'published_at' => '2026-07-21 09:00:00',
                'content' => <<<'HTML'
<p class="article-lead">Quality documentation has its greatest value while work is progressing, not when teams are assembling a final dossier.</p>
<h2>Capture evidence at the source</h2><p>Inspection results should be linked to the exact item, drawing, material heat, weld, test, or system they verify.</p>
<h2>Make status visible</h2><p>Live completion and exception views help teams resolve missing records before they block release or handover.</p>
<h2>Design the handover from day one</h2><p>Client naming, indexing, and approval requirements belong in the quality plan before fabrication and construction begin.</p>
HTML
            ],
            [
                'title' => 'Planning the lift before planning the crane',
                'slug' => 'planning-the-lift-before-planning-the-crane',
                'excerpt' => 'The engineering questions that should be answered before equipment selection begins.',
                'category' => 'Safety',
                'featured_image' => 'assets/img/services/5.png',
                'image_alt' => 'Heavy lifting operation at an industrial site',
                'reading_minutes' => 6,
                'published_at' => '2026-07-14 09:00:00',
                'content' => <<<'HTML'
<p class="article-lead">Crane selection is an output of lift planning. The work begins with a verified load, a controlled path, and a clear understanding of site conditions.</p>
<h2>Define the complete load</h2><p>Rigging, lifting beams, hooks, temporary attachments, and retained contents must be included in the engineered weight and center of gravity.</p>
<h2>Verify the environment</h2><p>Ground bearing capacity, underground services, obstructions, weather limits, exclusion zones, and simultaneous operations shape the lift strategy.</p>
<h2>Plan every state of the lift</h2><p>The load path should be checked from initial pick through rotation, travel, tailing, final alignment, and release.</p>
HTML
            ],
            [
                'title' => 'Modernization without operational disruption',
                'slug' => 'modernization-without-operational-disruption',
                'excerpt' => 'A phased approach to upgrading critical control systems while protecting plant continuity.',
                'category' => 'Automation',
                'featured_image' => 'assets/img/services/6.png',
                'image_alt' => 'Power and automation systems in an industrial environment',
                'reading_minutes' => 8,
                'published_at' => '2026-07-07 09:00:00',
                'content' => <<<'HTML'
<p class="article-lead">Control-system modernization succeeds when technical migration and operational continuity are designed as one coordinated program.</p>
<h2>Establish the existing-state truth</h2><p>Field verification, code review, I/O validation, network mapping, and alarm rationalization reveal the real migration scope.</p>
<h2>Separate preparation from cutover</h2><p>Offline configuration, simulation, factory acceptance testing, and staged installation reduce the activity required during constrained shutdown windows.</p>
<h2>Engineer rollback and recovery</h2><p>Every cutover step needs acceptance criteria, decision authority, contingency actions, and a verified route back to a safe operating state.</p>
HTML
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::updateOrCreate(
                ['slug' => $post['slug']],
                array_merge($post, [
                    'author_name' => 'Eirecon Engineering Team',
                    'status' => 'published',
                    'seo_title' => $post['title'],
                    'seo_description' => $post['excerpt'],
                ])
            );
        }
    }
}
