@extends('Admin.Layouts.adminApp')
@section('content')
@include('Admin.alert')
<form action="{{route('users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
    <div class="card mb-4">
        <h5 class="card-header">Create user</h5>
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input name="name" value="{{$user->name}}" type="text" class="form-control"
                    id="exampleFormControlInput1" placeholder="Name" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input name="email" value="{{$user->email}}" type="email" class="form-control"
                    id="exampleFormControlInput1" placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                <input name="phone" type="number" value="{{$user->details->phone!=''?$user->details->phone:''}}"
                    class="form-control" id="exampleFormControlInput1" placeholder="12346789">
            </div>
            <div class="mb-3">
                <div class="input-group input-group-merge">
                    <span class="input-group-text">Address</span>
                    <textarea class="form-control" name="address"
                        aria-label="Address">{{$user->details->address!=''?$user->details->address:''}}</textarea>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleFormControlInput1"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlSelect1" class="form-label">Role</label>
                <select name="role_as" class="form-select" id="exampleFormControlSelect1"
                    aria-label="Default select example" required>
                    <option value="1" {{$user->role_as==1 ? 'selected=""' : ''}}>Admin</option>
                    <option value="0" {{$user->role_as==0 ?'selected=""':''}}>User</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
    @csrf
    @method('PUT')
</form>
@endsection