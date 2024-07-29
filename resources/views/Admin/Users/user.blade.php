@extends('Admin.Layouts.adminApp')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>View users</h5>
        {{-- <form method="POST" action="{{route('users.search')}}" class="d-flex" role="search">
            @csrf
            <input class="form-control me-2" name="search" type="search" placeholder="id, name, role"
                aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
        <div class="d-flex">
            <input class="form-control me-2" id="searchUserText" name="search" type="search"
                placeholder="id, name, role" aria-label="Search">
            <button class="btn btn-outline-success" id="btnUserSearch" type="submit">Search</button>
        </div>
    </div>
    @include('Admin.alert')
    <div class="card-body">
        <a href="{{route('users.create')}}" class="btn btn-primary" style="color: white">Create User</a>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table" id="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                {{-- {{dd($users)}} --}}
                @forelse ($users as $user)
                <tr>
                    <td>
                        <span class="fw-medium">{{$user->id}}</span>
                    </td>
                    <td><a href="{{route('users.show',$user->id)}}" target="_blank">{{$user->name}}</a></td>
                    <td>
                        <span class="fw-medium">{{$user->email}}</span>
                    </td>
                    <td><span
                            class="badge {{$user->role_as==1?'bg-label-primary':'bg-label-warning'}} me-1">{{$user->role_as==1?'Admin':'User'}}</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a href="{{route('users.edit',$user->id)}}" class="dropdown-item"><i
                                        class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a href="{{route('users.destroy',$user->id)}}" class="dropdown-item"><i
                                        class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @empty

                @endforelse
            </tbody>
        </table>
        <div id="pagination">
            {!! $users->links() !!}
        </div>
    </div>
</div>
@endsection