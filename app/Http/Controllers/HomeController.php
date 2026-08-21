<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\HeroBanner;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('index', [
            'banners' => HeroBanner::active()->get(),
            'latestPosts' => BlogPost::published()->latest('published_at')->take(3)->get(),
        ]);
    }
}
