<!-- Modal -->
<div class="modal fade" id="staticBackdrop_edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit brand</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateBrand" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input wire:model='name' type="text" class="form-control" id="name" placeholder="Name brand">
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category_id</label>
                        <select wire:model='category_id' class="form-select" id="category_id"
                            aria-label="Default select example">
                            @foreach ($category_ids as $category)
                            <option value="{{$category->id}}" {{$category->
                                id==$category_id?'selected=""':''}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="File">Logo</label>
                        <input wire:model='logo' type="file" name="file" id="image" accept="image/*"
                            class="form-control">
                        <div class="form-control" id="blank">
                            @if ($logo_edit)
                            <img width="100px" height="100px" src="{{ $logo_edit }}">
                            @endif
                            <i class='bx bx-right-arrow-alt'></i>
                            @if ($logo)
                            <img width="100px" height="100px" src="{{ $logo->temporaryUrl() }}">
                            @endif
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select wire:model='status' name="status" class="form-select" id="status"
                            aria-label="Default select example">
                            <option value="1">Hidden</option>
                            <option value="0">Visible</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">update</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        wire:click='resetInput'>Close</button>
                </form>
            </div>
        </div>
    </div>
</div>