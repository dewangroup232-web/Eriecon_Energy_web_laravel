@extends('layouts.admin')
@section('title', 'Edit Banner')
@section('page_label', 'Homepage')
@section('content')
    <div class="admin-page-head"><div><p class="admin-eyebrow">Homepage hero</p><h1>Edit banner</h1><p>Update this slide without changing the rest of the rotation.</p></div></div>
    <form class="admin-card" method="POST" action="{{ route('admin.banners.update', $banner) }}" enctype="multipart/form-data">
        @csrf @method('PUT')
        @include('admin.banners._form')
    </form>
@endsection
