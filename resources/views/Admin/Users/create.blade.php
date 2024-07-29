@extends('Admin.Layouts.adminApp')
@section('content')
@include('Admin.alert')
<form action="{{route('users.store')}}" method="POST">
    @csrf
    <div class="card mb-4">
        <h5 class="card-header">Create user</h5>
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name"
                    required value="{{old('name')}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="name@example.com" required value="{{old('email')}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                <input name="phone" type="number" class="form-control" id="exampleFormControlInput1"
                    placeholder="12346789">
            </div>
            <div class="mb-3">
                <div class="input-group input-group-merge">
                    <span class="input-group-text">Address</span>
                    <textarea class="form-control" name="address" aria-label="Address"></textarea>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleFormControlInput1"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlSelect1" class="form-label">Role</label>
                <select name="role_as" class="form-select" id="exampleFormControlSelect1"
                    aria-label="Default select example" required>
                    <option value="1">Admin</option>
                    <option value="0" selected="">User</option>
                </select>
            </div>
            {{-- <div>
                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div> --}}
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
</form>
@endsection