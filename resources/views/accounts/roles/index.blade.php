@extends('accounts.layouts.main', $meta)

@php
$meta['title'] = 'Roles';
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
                                <th>Permissions</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        @if ($role->name == 'Super Admin')
                                            <span class="badge bg-primary"> All Permissions</span>
                                        @else
                                            @foreach ($role->permissions as $permission)
                                                <span class="badge bg-info"> {{ $permission }}</span>,
                                            @endforeach
                                        @endif

                                    </td>
                                    <td class="text-center">
                                        @if ($role->name != 'Super Admin')
                                            <form action="{{ route('accounts.roles.destroy', $role) }}"
                                                  onsubmit="return confirm('are you sure want to delete this item?')" method="POST">
                                                @csrf
                                                @method('delete')
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                                </div>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="createNewItemModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('accounts.roles.store') }}" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Role</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="mb-2">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Ex: Manager" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
