@extends('layouts.admin')
@section('title', 'Add Banner')
@section('page_label', 'Homepage')
@section('content')
    <div class="admin-page-head"><div><p class="admin-eyebrow">Homepage hero</p><h1>Add a banner</h1><p>Create a new slide for the homepage rotation.</p></div></div>
    <form class="admin-card" method="POST" action="{{ route('admin.banners.store') }}" enctype="multipart/form-data">
        @csrf
        @include('admin.banners._form')
    </form>
@endsection
