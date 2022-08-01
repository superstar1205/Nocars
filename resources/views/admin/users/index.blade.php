@extends('layouts.main')

@section('content')

    @include('layouts.flash_message')

    <div class="main d-flex justify-content-center algin-items-center">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="m-card d-flex justify-content-center align-items-center">
                <div class="m-card-body py-5 px-2">

                    <h3>List Users</h3>

                    <a href="/admin/users/create">Create a new user</a>

                    <table class="table table-success table-striped">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">School</th>
                            <th scope="col">Name</th>
                            <th scope="col">Role</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>
                                    {{ $user->school->name }}
                                </td>
                                <td>
                                    {{ $user->name }}
                                </td>
                                <td>
                                    @if($user->hasRole('superuser'))
                                        Admin
                                    @elseif($user->hasRole('admin'))
                                        Admin
                                    @elseif($user->hasRole('recorder'))
                                        Recorder
                                    @else
                                        No Role
                                    @endif
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <form method="get" action="/admin/users/{{ $user->id }}">
                                                @csrf
                                                <button class='btn btn-default' type="submit" alt="Edit">
                                                    <span class="bi bi-pencil-square" aria-hidden="true"></span>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col">
                                            <form method="post" action="/admin/users/{{ $user->id }}">
                                                @csrf
                                                @method("DELETE")
                                                <button class='btn btn-default' type="submit" alt="Delete"
                                                        onclick="return okCancel('Are you sure you want to delete this user?')">
                                                    <span class="bi bi-trash" aria-hidden="true"></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection
