@extends('accounts.layouts.main', $meta)
@php
$meta['title'] = 'Edit ' . $user->name . '\'s profile';
$user = auth()->user();
@endphp

@section('main')
    <main class="page-content">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body">

                        <form action="{{ route('accounts.users.update', $user) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="card shadow-none border">
                                <div class="card-header">
                                    <h6 class="mb-0">PERSONAL INFORMATION</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-6">
                                            <label class="form-label">First Name</label>
                                            <input type="text" name="first_name" class="form-control"
                                                   value="{{ $user->first_name }}" placeholder="John">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" name="last_name" class="form-control"
                                                   value="{{ $user->last_name }}" placeholder="Doe">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Email address</label>
                                            <input type="text" name="email" value="{{ $user->email }}" class="form-control"
                                                   placeholder="xyz@example.com">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Username</label>
                                            <input type="text" name="username" value="{{ $user->username }}" class="form-control"
                                                   placeholder="@john">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-none border">
                                <div class="card-header">
                                    <h6 class="mb-0">CONTACT INFORMATION</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label class="form-label">Address</label>
                                            <input type="text" name="address" class="form-control" value="{{ $user->address }}"
                                                   placeholder="47-A, city name, United States">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control" name="city" value="{{ $user->city }}"
                                                   placeholder="London">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Country</label>
                                            <input type="text" class="form-control" name="country" value="{{ $user->country }}"
                                                   placeholder="United States">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">About Me</label>
                                            <textarea class="form-control" rows="4" cols="4" placeholder="Describe yourself...">{{ $user->bio }}</textarea>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card shadow-sm border-0 overflow-hidden">
                    <div class="card-body">
                        <div class="profile-avatar text-center">
                            <img src="https://via.placeholder.com/110X110" class="rounded-circle shadow" width="120" height="120"
                                 alt="">
                        </div>

                        <div class="text-center mt-4">
                            <h4 class="mb-1">{{ $user->name }}</h4>
                            <p class="mb-0 text-secondary">{{ $user->address }}</p>
                            <div class="mt-4"></div>
                            <h6 class="mb-1">HR Manager - Codervent Technology</h6>
                            <p class="mb-0 text-secondary">University of Information Technology</p>
                        </div>
                        <hr>
                        <div class="text-start">
                            <h5 class="">About</h5>
                            <p class="mb-0">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem.
                            </p>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            Total Orders
                            <span class="badge bg-primary rounded-pill">95</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end row-->
    </main>
@endsection
