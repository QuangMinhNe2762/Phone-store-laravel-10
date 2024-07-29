<!-- Modal -->
<div class="modal fade" id="staticBackdrop_edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit color</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateColor" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input wire:model='name' type="text" class="form-control" id="name" placeholder="Name color">
                    </div>
                    <div class="mb-3">
                        <label for="code" class="form-label">Code</label>
                        <input wire:model='code' type="color" class="form-control form-control-color"
                            id="exampleColorInput" value="#563d7c" title="Choose your color">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select wire:model='status' name="status" class="form-select" id="status"
                            aria-label="Default select example">
                            <option value="1">Hidden</option>
                            <option value="0">Visible</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        wire:click='resetInput'>Close</button>
                </form>
            </div>
        </div>
    </div>
</div>