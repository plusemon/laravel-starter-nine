@php
$meta['title'] = $user->name . 's profile';
@endphp

@extends('accounts.layouts.main', $meta)

@section('main')
    <main class="page-content">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>{{ $meta['title'] }}</h5>
                <a href="{{ route('accounts.users.edit', auth()->id()) }}" class="btn btn-sm btn-outline-primary"><i
                       class="bx bx-edit"></i> Edit</a>
            </div>
            <div class="card-body">
                <pre>{{ $user }}</pre>
            </div>
        </div>
    </main>
@endsection
