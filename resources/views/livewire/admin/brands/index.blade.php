<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>View brands</h5>
        <div style="display: flex; align-items: center; gap: 10px;">
            <select wire:model='status' wire:change='searchStatus($event.target.value)' class="form-select"
                style="width: 100px;" id="status" aria-label="Default select example">
                <option value="0">Visible</option>
                <option value="1">Hidden</option>
            </select>
            <select wire:model='category_id' wire:change='searchCategoryID($event.target.value)' class="form-select"
                style="width: 100px;" id="category_id" aria-label="Default select example">
                @foreach ($category_ids as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                <option value="-1">Show all</option>
            </select>
            <input class="form-control me-2" type="search" wire:model='search' placeholder="id, name"
                aria-label="Search">
            <button class="btn btn-outline-success" wire:click='searctext' type="submit">Search</button>
        </div>
    </div>
    @include('Admin.alert')
    @include('livewire.admin.brands.modal-create')
    @include('livewire.admin.brands.modal-edit')
    <div class="card-body">
        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary"
            style="color: white">Create brand</button>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category ID</th>
                    <th>Logo</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($brands as $brand)
                <tr>
                    <td>
                        <span class="fw-medium">{{$brand->id}}</span>
                    </td>
                    <td>{{$brand->name}}</td>
                    <td>
                        <span class="fw-medium">{{$brand->category->name}}</span>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{$brand->logo}}" height="32" width="32" class="me-2" />
                        </div>
                    </td>
                    <td><span
                            class="badge {{$brand->status==1?'bg-label-danger':'bg-label-success'}} me-1">{{$brand->status==1?'Hidden':'Visible'}}</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a type="button" wire:click='editBrand({{$brand->id}})' class="dropdown-item"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop_edit"><i
                                        class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a type="button" wire:click='destroyBrand({{$brand->id}})' class="dropdown-item"><i
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
        {{ $brands->links() }}
    </div>
</div>