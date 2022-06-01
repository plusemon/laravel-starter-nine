@extends('accounts.layouts.main', $meta)

@php
$meta['title'] = 'Blogs';
@endphp

@section('main')
    <main class="page-content">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>{{ $meta['title'] }}</h5>
                <a href="{{ route('accounts.blogs.create') }}" class="btn btn-sm btn-primary">Add New</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ $blog->urlOf('image') }}" height="70"></td>
                                    <td>{{ $blog->title }}</td>

                                    <td class="text-center">
                                        <form action="{{ route('accounts.blogs.destroy', $blog) }}"
                                              onsubmit="return confirm('are you sure want to delete this item?')" method="POST">
                                            @csrf
                                            @method('delete')
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
                                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
