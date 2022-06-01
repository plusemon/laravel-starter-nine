@extends('accounts.layouts.main', $meta)

@php
$meta['title'] = $user->name . 's profile';
@endphp

@section('main')
    <main class="page-content">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>{{ $meta['title'] }}</h5>
                <a href="{{ route('accounts.users.edit', auth()->id()) }}" class="btn btn-sm btn-outline-primary"><i
                       class="bx bx-edit"></i> Edit</a>
            </div>
            <div class="card-body">

                {{-- @php
                    dd($user->urlOf('avater'));
                @endphp --}}

                <div class="text-center mb-5">
                    <img class="border mb-2" height="200px" src="{{ $user->urlOf('avater') }}" alt="">
                    <form class="mt-2" action="{{ route('accounts.users.update', $user) }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input type="hidden" name="change_avater" value="true">
                        <input type="file" name="avater" class="form-control-file">
                        <button class="btn btn-primary">Change</button>

                    </form>
                </div>



                <table class="table table-bordered">
                    <tr>
                        <th>First Name</th>
                        <td>{{ $user->first_name }}</td>

                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td>{{ $user->last_name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td>{{ $user->username }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $user->phone }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $user->address }}</td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td>{{ $user->city }}</td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td>{{ $user->country }}</td>
                    </tr>
                    <tr>
                        <th>Bio</th>
                        <td>{{ $user->bio }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
@endsection
