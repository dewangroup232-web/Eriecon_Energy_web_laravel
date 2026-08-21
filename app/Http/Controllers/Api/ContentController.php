<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\HeroBanner;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function banners(): JsonResponse
    {
        return response()->json(['data' => HeroBanner::active()->get()]);
    }

    public function blogs(Request $request): JsonResponse
    {
        $posts = BlogPost::published()->latest('published_at')
            ->paginate(min(max((int) $request->integer('per_page', 9), 1), 50));

        return response()->json($posts);
    }

    public function blog(string $slug): JsonResponse
    {
        return response()->json([
            'data' => BlogPost::published()->where('slug', $slug)->firstOrFail(),
        ]);
    }
}
