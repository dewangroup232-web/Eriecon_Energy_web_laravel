@extends('layouts.admin')
@section('title', 'Add Blog Post')
@section('page_label', 'Eirecon Journal')
@section('content')
    <div class="admin-page-head"><div><p class="admin-eyebrow">Journal publishing</p><h1>Create blog post</h1><p>Add every detail used by the current premium blog design.</p></div></div>
    <form class="admin-card" method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
        @csrf
        @include('admin.blogs._form')
    </form>
@endsection
