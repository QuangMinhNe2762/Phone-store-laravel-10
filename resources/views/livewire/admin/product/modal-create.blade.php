<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="storeProduct" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="Images-tab" data-bs-toggle="tab"
                                data-bs-target="#Images-tab-pane" type="button" role="tab"
                                aria-controls="Images-tab-pane" aria-selected="true">Images</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Information-tab" data-bs-toggle="tab"
                                data-bs-target="#Information-tab-pane" type="button" role="tab"
                                aria-controls="Information-tab-pane" aria-selected="false">Information</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="SEO-tab" data-bs-toggle="tab" data-bs-target="#SEO-tab-pane"
                                type="button" role="tab" aria-controls="SEO-tab-pane" aria-selected="false">SEO</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Details-tab" data-bs-toggle="tab"
                                data-bs-target="#Details-tab-pane" type="button" role="tab"
                                aria-controls="Details-tab-pane" aria-selected="false">Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Colors-tab" data-bs-toggle="tab"
                                data-bs-target="#Colors-tab-pane" type="button" role="tab"
                                aria-controls="Colors-tab-pane" aria-selected="false">Colors</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Images-tab-pane" role="tabpanel"
                            aria-labelledby="Images-tab" tabindex="0">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" style="padding-top: 10px">Trending</label>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input wire:model='trending' type="radio" class="form-check-input"
                                                name="trending" id="TrendingRadios1" value="1" checked="">
                                            Yes
                                            <i class="input-helper"></i></label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input wire:model='trending' type="radio" class="form-check-input"
                                                name="trending" id="TrendingRadios2" value="0">
                                            No
                                            <i class="input-helper"></i></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" style="padding-top: 10px">Status</label>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input wire:model='status' type="radio" class="form-check-input"
                                                name="status" id="StatusRadios1" value="0" checked="">
                                            Visible
                                            <i class="input-helper"></i></label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input wire:model='status' type="radio" class="form-check-input"
                                                name="status" id="StatusRadios2" value="1">
                                            Hidden
                                            <i class="input-helper"></i></label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Image</label>
                                <input wire:model='images' accept="image/*" type="file" name="images" multiple
                                    class="form-control">
                            </div>
                            <div class="form-control" id="blank">
                                @if ($images)
                                @foreach ($images as $image)
                                <img width="100px" height="100px" src="{{ $image->temporaryUrl() }}">
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Information-tab-pane" role="tabpanel"
                            aria-labelledby="Information-tab" tabindex="0">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="col-sm-2 col-form-label">Name product</label>
                                    <div class="col-sm-10">
                                        <input wire:model='name' type="text" class="form-control" name="name"
                                            placeholder="Name product">
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea wire:model='description' class="form-control" name="description"
                                            id="">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10" style="padding-top: 12px">
                                        <select wire:model='category_id' class="form-control" name="category_id">
                                            @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-sm-2 col-form-label">Brand</label>
                                    <div class="col-sm-10" style="padding-top: 12px">
                                        <select wire:model='brand_id' class="form-control" name="brand_id">
                                            @foreach ($brands as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="SEO-tab-pane" role="tabpanel" aria-labelledby="SEO-tab"
                            tabindex="0">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="col-sm-2 col-form-label">Original price</label>
                                    <div class="col-sm-10">
                                        <input wire:model='original_price' type="text" id="basic-default-phone"
                                            class="form-control phone-mask" placeholder="Original price"
                                            aria-label="Original price" aria-describedby="basic-default-phone"
                                            name="original_price">
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <label class="col-sm-2 col-form-label">Selling price</label>
                                    <div class="col-sm-10">
                                        <input wire:model='selling_price' type="text" id="basic-default-phone"
                                            class="form-control phone-mask" placeholder="Selling price"
                                            aria-label="Selling price" aria-describedby="basic-default-phone"
                                            name="original_price">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Details-tab-pane" role="tabpanel" aria-labelledby="Details-tab"
                            tabindex="0">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="col-sm-2 col-form-label">Meta Title</label>
                                    <div class="col-sm-10">
                                        <input wire:model='meta_title' type="text" class="form-control"
                                            name="meta_title" placeholder="Meta Title">
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <label class="col-sm-2 col-form-label">Meta Keywords</label>
                                    <div class="col-sm-10">
                                        <input wire:model='meta_keywords' type="text" class="form-control"
                                            name="meta_keywords" placeholder="Meta Keywords">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-sm-2 col-form-label">Meta description</label>
                                    <div class="col-sm-10">
                                        <input wire:model='meta_description' type="text" class="form-control"
                                            name="meta_description" placeholder="Meta description">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="Colors-tab-pane" role="tabpanel" aria-labelledby="Colors-tab"
                            tabindex="0">

                            <label class="col-form-label">Select color</label>
                            <div class="row">
                                @foreach ($colors as $key=>$item)
                                <div class="col-md-3" style="padding-top: 12px">
                                    <input wire:model='color.{{$item->id}}' type="checkbox" value="{{$item->id}}"
                                        id="checkbox__qtcl{{$item->id}}">
                                    {{$item->name}}
                                    <br>
                                    <input wire:model='color.{{$item->id}}' type="number" placeholder="quantity" name=""
                                        id="input_qtcl{{$item->id}}">
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary me-2" data-bs-dismiss="modal">Create</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>