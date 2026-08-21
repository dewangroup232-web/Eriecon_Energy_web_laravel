<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NavigationTest extends TestCase
{
    use RefreshDatabase;

    protected $seed = true;

    public function test_shared_navigation_is_present_on_every_public_page(): void
    {
        $pages = [
            '/',
            '/1',
            '/404',
            '/about-us',
            '/blog',
            '/blog/engineering-certainty-before-construction-begins',
            '/contact',
            '/faq',
            '/projects',
            '/services',
            '/services-Design-Manufacturing',
            '/services-EPC-Projects',
            '/services-Equipmen-Rental',
            '/services-Infrastructure-Projects',
            '/services-Plant-Maintenance-Turnarounds',
            '/services-Power-Automation-Projects',
            '/services-Procurement',
            '/services-Project-Support',
            '/services-Rigging-Lifting-Projects',
            '/services-Scaffolding',
            '/services-major-equipment-list',
        ];

        $navigationDestinations = [
            '/',
            '/about-us',
            '/projects',
            '/services',
            '/services-EPC-Projects',
            '/services-Plant-Maintenance-Turnarounds',
            '/services-Design-Manufacturing',
            '/services-Power-Automation-Projects',
            '/services-Rigging-Lifting-Projects',
            '/services-Infrastructure-Projects',
            '/services-Scaffolding',
            '/services-Equipmen-Rental',
            '/services-Project-Support',
            '/services-Procurement',
            '/services-major-equipment-list',
            '/blog',
            '/contact',
        ];

        foreach ($pages as $page) {
            $response = $this->get($page);

            $response->assertOk()
                ->assertSee('id="navbar-menu"', false)
                ->assertSee('aria-controls="navbar-menu"', false)
                ->assertSee('id="services-navigation"', false)
                ->assertSee('aria-controls="services-navigation"', false);

            foreach ($navigationDestinations as $destination) {
                $response->assertSee('href="'.url($destination).'"', false);
            }
        }
    }
}
