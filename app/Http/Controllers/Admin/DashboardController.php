<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\HeroBanner;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        return view('admin.dashboard', [
            'bannerCount' => HeroBanner::count(),
            'activeBannerCount' => HeroBanner::where('is_active', true)->count(),
            'postCount' => BlogPost::count(),
            'publishedPostCount' => BlogPost::where('status', 'published')->count(),
            'recentPosts' => BlogPost::latest()->take(5)->get(),
        ]);
    }
}
