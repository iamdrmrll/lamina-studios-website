@extends('layouts.admin-app')

@section('document-title')
    Users | Lamina Studios
@endsection

@section('active-6')
active
@endsection

@section('content')
<div class="content flex-grow d-flex flex-column bg-whitish-gray">
    <div class="header-container d-flex flex-row justify-content-space-between align-items-center px-3 py-3">
        <h1 class="header-name">Users</h1>
        @if (session('status'))
            <h3 class="status border-light-green border-none color-darker-green px-1 py-2 bg-lighter-green bd-r-0p5">
                {{ session('status') }}</h3>
        @endif
        <span data-toggle="modal" data-target="#AddProjectModal"
            class="add-project-btn fw-600 border border-main px-2 py-2 bg-white">add new user</span>

        {{-- modal for add --}}
        <div class="modal modal-add" id="AddProjectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog w-25 w-sm-50">
                <div class="modal-container">
                    <div class="modal-head-container">
                        <h4 class="modal-title">Add new user</h4>
                        <h4 class="x cursor-pointer">X</h4>
                    </div>
                    <div class="modal-body-container">
                        <form action="{{ url('admin/users/add-user') }}" method="POST"
                            enctype="multipart/form-data" class="">
                            @csrf
                            <div class="page">
                                <div class="row user-row">
                                    <div class="user-col">
                                        <label for="username">username</label>
                                        <input type="text" id="username" name="username" required>
                                    </div>
                                </div>
                                <div class="row user-row">
                                    <div class="user-col">
                                        <label for="email">email</label>
                                        <input type="email" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="row user-row">
                                    <div class="user-col">
                                        <label for="password">password</label>
                                        <input type="password" id="password" name="password" required>
                                        <span class="material-symbols-outlined eye">
                                            visibility_off
                                            </span>
                                    </div>
                                </div>
                                <div class="row user-row">
                                    <div class="user-col">
                                        <label for="Cpassword">confirm password</label>
                                        <input type="password" id="Cpassword" required>
                                        <span class="material-symbols-outlined eye">
                                            visibility_off
                                            </span>
                                    </div>
                                </div>
                                <div class="row user-row">
                                    <div class="user-col password-status d-none">
                                        <span class="color-red fw-600 bg-lighter-red p-1 border border-red bd-r-0p5">Password does not match</span>
                                    </div>
                                </div>
                            </div>
                            <div class="page">
                                <div class="row footer user-row">
                                    <div class="user-col pb-0">
                                        <button id="save-user" class="ml-auto mr-auto save-user text-uppercase">save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="table-container flex-grow d-flex flex-column align-items-center justify-content-center">
        <table class="m-3 bg-white">
            <thead class="bg-black color-white">
                <tr>
                    <th>no</th>
                    <th>id</th>
                    <th>username</th>
                    <th>last login</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->user_id }}</td>
                        <td>{{ $user->username }}</td>
                        <td></td>
                        <td>
                            <a href="" data-toggle="modal" data-target="" class="edit"><i
                                    class="edit-{{ $loop->iteration }} fa-solid fa-pen bg-blue"></i></a>

                            <a href="{{ url('admin/users/delete-user/' . $user->user_id) }}" onclick="return confirm(&quot;Confirm Delete?&quot;)"><i
                                    class="delete fa-solid fa-trash bg-red"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
