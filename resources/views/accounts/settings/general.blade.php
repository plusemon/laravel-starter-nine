@extends('accounts.layouts.main', $meta)

@php
$meta['title'] = 'General Settings';
@endphp

@section('main')
    <main class="page-content">
        @include('components.errors')
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>{{ $meta['title'] }}</h5>
            </div>
            <div class="card-body">
                <form action="" class="row col-md-8 m-auto border p-3">
                    <div class="mb-3">
                        <label for="">Website Logo</label>
                        <input type="file" class="form-control-file">
                    </div>
                    <hr>
                    <div class="mb-1">
                        <label for="">Website Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-1">
                        <label for="">Website Description</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mt-3 text-center">
                        <button class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
