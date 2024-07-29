@extends('Admin.Layouts.adminApp')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>View sliders</h5>
        <div style="display: flex; align-items: center; gap: 10px;">
            <select name="status" id="selectstatusslider" class="form-select" style="width: 100px;"
                aria-label="Default select example">
                <option value="0">Visible</option>
                <option value="1">Hidden</option>
                <option value="-1">Show all</option>
            </select>
            <input class="form-control me-2" type="search" placeholder="id, title" aria-label="Search"
                id="searchSliderText">
            <button class="btn btn-outline-success" id="btnSliderSearch" type="submit">Search</button>
        </div>
    </div>
    @include('Admin.alert')
    @include('Admin.sliders.modal-create')
    @include('Admin.sliders.modal-edit')
    <div class="card-body">
        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary"
            style="color: white">Create slider</button>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table" id="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($sliders as $slider)
                <tr>
                    <td>
                        <span class="fw-medium">{{$slider->id}}</span>
                    </td>
                    <td>{{$slider->title}}</td>
                    <td>
                        <span class="fw-medium">{{substr($slider->description,0,20)}}</span>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{$slider->image}}" height="32" width="32" class="me-2" />
                        </div>
                    </td>
                    <td><span
                            class="badge {{$slider->status==1?'bg-label-danger':'bg-label-success'}} me-1">{{$slider->status==1?'Hidden':'Visible'}}</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a type="button" id="edit_button{{$slider->id}}" onclick="send_id_slider(event)"
                                    class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop_edit"><i class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a type="button" href="{{route('sliders.delete',$slider->id)}}" class="dropdown-item"><i
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
            {!! $sliders->links() !!}
        </div>
    </div>
</div>
@endsection