<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroBanner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class HeroBannerController extends Controller
{
    public function index(): View
    {
        return view('admin.banners.index', ['banners' => HeroBanner::orderBy('sort_order')->get()]);
    }

    public function create(): View
    {
        return view('admin.banners.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request, true);
        $data['image_path'] = $request->file('image')->store('banners', 'public');
        $data['is_active'] = $request->boolean('is_active');
        HeroBanner::create($data);

        return redirect()->route('admin.banners.index')->with('success', 'Banner created successfully.');
    }

    public function edit(HeroBanner $banner): View
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, HeroBanner $banner): RedirectResponse
    {
        $data = $this->validated($request);
        if ($request->hasFile('image')) {
            $this->deleteUpload($banner->image_path);
            $data['image_path'] = $request->file('image')->store('banners', 'public');
        }
        $data['is_active'] = $request->boolean('is_active');
        $banner->update($data);

        return redirect()->route('admin.banners.index')->with('success', 'Banner updated successfully.');
    }

    public function destroy(HeroBanner $banner): RedirectResponse
    {
        $this->deleteUpload($banner->image_path);
        $banner->delete();

        return back()->with('success', 'Banner deleted successfully.');
    }

    private function validated(Request $request, bool $imageRequired = false): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'cta_text' => ['nullable', 'string', 'max:100'],
            'cta_url' => ['nullable', 'string', 'max:255'],
            'image' => [$imageRequired ? 'required' : 'nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:10240'],
            'image_alt' => ['nullable', 'string', 'max:255'],
            'sort_order' => ['required', 'integer', 'min:0', 'max:999'],
        ]);
    }

    private function deleteUpload(string $path): void
    {
        if (! str_starts_with($path, 'assets/')) {
            Storage::disk('public')->delete($path);
        }
    }
}
