@extends('layouts.admin')
@section('title', 'Edit Blog Post')
@section('page_label', 'Eirecon Journal')
@section('content')
    <div class="admin-page-head"><div><p class="admin-eyebrow">Journal publishing</p><h1>Edit blog post</h1><p>Changes are reflected on the website and content API after saving.</p></div></div>
    <form class="admin-card" method="POST" action="{{ route('admin.blogs.update', $post) }}" enctype="multipart/form-data">
        @csrf @method('PUT')
        @include('admin.blogs._form')
    </form>
@endsection
