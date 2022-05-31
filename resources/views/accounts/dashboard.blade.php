@extends('accounts.layouts.main', ['title' => 'Dashboard'])

@php
$user = auth()->user();
@endphp

@section('main')
    <main class="page-content">
        <div class="card">
            <div class="card-body">
                <marquee>
                    <h4>Welcome, {{ $user->name }}..!</h4>
                </marquee>
                
            </div>
        </div>
    </main>
@endsection

@push('js')
@endpush
