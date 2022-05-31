@php
$meta['title'] = $user->name.'s profile';
@endphp

@extends('accounts.layouts.main', $meta)

@section('main')
    <main class="page-content">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>{{ $meta['title'] }}</h5>
                <button type="button" data-bs-toggle="modal" data-bs-target="#createNewItemModal" class="btn btn-primary btn-sm">Add
                    New</button>
            </div>
            <div class="card-body">
                <pre>{{ $user }}</pre>
            </div>
        </div>
    </main>
@endsection
