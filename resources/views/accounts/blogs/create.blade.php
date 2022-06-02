@extends('accounts.layouts.main', $meta)

@php
$meta['title'] = 'Add New Blog';
@endphp

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/dashboard/plugins/image-uploader/image-uploader.min.css') }}">
@endpush

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
                        <div class="input-images"></div>
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

@push('js')
    <script type="text/javascript" src="{{ asset('assets/dashboard/plugins/image-uploader/image-uploader.min.js') }}"></script>
    <script>
        $('.input-images').imageUploader({
            maxFiles: 1,
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.0.3/tinymce.min.js"
            integrity="sha512-DB4Mu+YChAdaLiuKCybPULuNSoFBZ2flD9vURt7PgU/7pUDnwgZEO+M89GjBLvK9v/NaixpswQtQRPSMRQwYIA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist", "anchor", "autolink", "charmap", "code", "fullscreen",
                "help", "image", "insertdatetime", "link", "lists", "media",
                "preview", "searchreplace", "table", "visualblocks",
            ],
            toolbar: "undo redo | styles | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
    </script>
@endpush
