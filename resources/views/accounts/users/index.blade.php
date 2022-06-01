@extends('accounts.layouts.main', $meta)

@php
$meta['title'] = 'Manage Users';
@endphp


@section('main')
    <main class="page-content">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>{{ $meta['title'] }}</h5>
                <button type="button" data-bs-toggle="modal" data-bs-target="#createNewItemModal" class="btn btn-primary btn-sm">Add
                    New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Username</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td><a href="{{ route('accounts.users.show', $user) }}"
                                           class="btn btn-sm btn-primary">Details</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
