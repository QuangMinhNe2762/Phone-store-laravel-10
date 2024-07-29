<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>View colors</h5>
        <div style="display: flex; align-items: center; gap: 10px;">
            <select wire:model='status' wire:change='searchStatus($event.target.value)' class="form-select"
                style="width: 100px;" id="parent_id" aria-label="Default select example">
                <option value="0">Visible</option>
                <option value="1">Hidden</option>
            </select>
            <input class="form-control me-2" type="search" wire:model='search' placeholder="id, name, code"
                aria-label="Search">
            <button class="btn btn-outline-success" wire:click='searctext' type="submit">Search</button>
        </div>
    </div>
    @include('Admin.alert')
    @include('livewire.admin.colors.modal-create')
    @include('livewire.admin.colors.modal-edit')
    <div class="card-body">
        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary"
            style="color: white">Create color</button>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($colors as $color)
                <tr>
                    <td>
                        <span class="fw-medium">{{$color->id}}</span>
                    </td>
                    <td>{{$color->name}}</td>
                    <td>
                        <span class="fw-medium">{{$color->code}}</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"
                                style="width: 100%; background-color: {{$color->code}}" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </td>
                    <td><span
                            class="badge {{$color->status==1?'bg-label-danger':'bg-label-success'}} me-1">{{$color->status==1?'Hidden':'Visible'}}</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a type="button" wire:click='editColor({{$color->id}})' class="dropdown-item"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop_edit"><i
                                        class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a type="button" wire:click='destroyColor({{$color->id}})' class="dropdown-item"><i
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
        {{ $colors->links() }}
    </div>
</div>