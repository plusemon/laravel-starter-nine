@php
    $meta['title'] = 'Manage Users';
@endphp

@extends('accounts.layouts.main', $meta)

@section('main')
<main class="page-content">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>{{ $meta['title'] }}</h5>
            <button type="button" data-bs-toggle="modal" data-bs-target="#createNewItemModal"
                class="btn btn-primary btn-sm">Add
                New</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered">
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
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->address }}</td>
                                <td><a href="{{ route('accounts.users.show', $user) }}" class="btn btn-sm btn-primary">Details</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection


@push('css')
    <link rel="stylesheet"
        href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}">
@endpush

@push('js')
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}">
    </script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}">
    </script>
    <script src="{{ asset('assets/js/table-datatable.js') }}"></script>
@endpush
