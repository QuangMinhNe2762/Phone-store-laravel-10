<!-- Modal -->
<div class="modal fade" id="staticBackdrop_edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateCategory" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input wire:model='name' type="text" class="form-control" id="name" placeholder="Name category">
                    </div>
                    <div class="mb-3">
                        <label for="parent_id" class="form-label">Parent_id</label>
                        <select wire:model='parent_id' class="form-select" id="parent_id"
                            aria-label="Default select example">
                            @foreach ($parent_ids as $parent)
                            @if ($parent->id!=$id)
                            <option value="{{$parent->id}}" {{$parent_id==$parent->
                                id?'selected=""':''}}>{{$parent->name}}</option>

                            @endif
                            @endforeach
                            <option value="0">Parent</option>
                        </select>
                    </div>
                    <div>
                        <label for="description" class="form-label">Description</label>
                        <textarea wire:model=' description' class="form-control" id="description" rows="3">
                                {{$description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="File">Image</label>
                        <input wire:model='image' type="file" name="file" id="image" accept="image/*"
                            class="form-control">
                        <div class="form-control" id="blank">
                            @if ($image_edit)
                            <img width="100px" height="100px" src="{{ $image_edit }}">
                            @endif
                            <i class='bx bx-right-arrow-alt'></i>
                            @if ($image)
                            <img width="100px" height="100px" src="{{ $image->temporaryUrl() }}">
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