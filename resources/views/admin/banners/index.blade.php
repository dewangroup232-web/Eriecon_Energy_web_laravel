@extends('layouts.admin')

@section('title', 'Hero Banners')
@section('page_label', 'Homepage')

@section('content')
    <div class="admin-page-head">
        <div>
            <p class="admin-eyebrow">Homepage hero</p>
            <h1>Hero banners</h1>
            <p>Upload, order, activate, and edit the slides displayed at the top of the homepage.</p>
        </div>
        <a class="admin-button" href="{{ route('admin.banners.create') }}">Add banner</a>
    </div>
    <section class="admin-card">
        <div class="admin-table-wrap">
            <table class="admin-table">
                <thead><tr><th>Preview</th><th>Banner</th><th>Order</th><th>Status</th><th>Actions</th></tr></thead>
                <tbody>
                @forelse($banners as $banner)
                    <tr>
                        <td><img class="admin-table-media" src="{{ $banner->image_url }}" alt=""></td>
                        <td class="admin-table-title"><strong>{{ $banner->title }}</strong><span>{{ $banner->subtitle }}</span></td>
                        <td>{{ $banner->sort_order }}</td>
                        <td><span class="admin-badge admin-badge--{{ $banner->is_active ? 'active' : 'inactive' }}">{{ $banner->is_active ? 'Active' : 'Inactive' }}</span></td>
                        <td>
                            <div class="admin-actions">
                                <a class="admin-button admin-button--secondary admin-button--small" href="{{ route('admin.banners.edit', $banner) }}">Edit</a>
                                <form method="POST" action="{{ route('admin.banners.destroy', $banner) }}" onsubmit="return confirm('Delete this banner?')">
                                    @csrf @method('DELETE')
                                    <button class="admin-button admin-button--danger admin-button--small" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td class="admin-empty" colspan="5">No banners yet. Add the first homepage slide.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
