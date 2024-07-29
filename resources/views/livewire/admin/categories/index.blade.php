<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>View categories</h5>
        <div style="display: flex; align-items: center; gap: 10px;">
            <select wire:model='status' wire:change='searchStatus($event.target.value)' class="form-select"
                style="width: 100px;" id="parent_id" aria-label="Default select example">
                <option value="0">Visible</option>
                <option value="1">Hidden</option>
            </select>
            <select wire:model='parent_id' wire:change='searchParentID($event.target.value)' class="form-select"
                style="width: 100px;" id="parent_id" aria-label="Default select example">
                @foreach ($parent_ids as $parent)
                <option value="{{$parent->id}}">{{$parent->name}}</option>
                @endforeach
                <option value="0">Parent</option>
                <option value="-1">Show all</option>
            </select>
            <input class="form-control me-2" type="search" wire:model='search' placeholder="id, name"
                aria-label="Search">
            <button class="btn btn-outline-success" wire:click='searctext' type="submit">Search</button>
        </div>
    </div>
    @include('Admin.alert')
    @include('livewire.admin.categories.modal-create')
    @include('livewire.admin.categories.modal-edit')
    <div class="card-body">
        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary"
            style="color: white">Create category</button>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Parent_id</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($categoriess as $category)
                <tr>
                    <td>
                        <span class="fw-medium">{{$category->id}}</span>
                    </td>
                    <td>{{$category->name}}</td>
                    <td>
                        <span class="fw-medium">
                            @if ($categoriess->contains('id', $category->parent_id))
                            {{$categoriess->where('id', $category->parent_id)->first()->name}}
                            @else
                            Parent
                            @endif
                        </span>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{$category->image}}" height="32" width="32" class="me-2" />
                        </div>
                    </td>
                    <td><span
                            class="badge {{$category->status==1?'bg-label-danger':'bg-label-success'}} me-1">{{$category->status==1?'Hidden':'Visible'}}</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a type="button" wire:click='editCategory({{$category->id}})' class="dropdown-item"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop_edit"><i
                                        class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a type="button" wire:click='destroyCategory({{$category->id}})'
                                    class="dropdown-item"><i class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        {{ $categoriess->links() }}
    </div>
</div>