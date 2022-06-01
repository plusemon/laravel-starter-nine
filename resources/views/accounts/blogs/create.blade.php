@extends('accounts.layouts.main', $meta)

@php
$meta['title'] = 'Add New Blog';
@endphp

@section('main')
    <main class="page-content">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>{{ $meta['title'] }}</h5>
            </div>
            <div class="card-body">
                @include('components.errors')
                <form action="{{ route('accounts.blogs.store') }}" method="POST" enctype="multipart/form-data"
                      class="row col-md-10 m-auto border p-3">
                    @csrf
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control-file">
                    </div>
                    <div class="mb-1">
                        <label for="">Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                    </div>
                    <div class="mb-1">
                        <label for="">Body / Description</label>
                        <textarea name="body" class="form-control" cols="30" rows="10">{{ old('body') }}</textarea>
                    </div>
                    <div class="mt-3 text-center">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
