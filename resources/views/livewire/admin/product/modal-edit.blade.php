<!-- Modal -->
<div class="modal fade" id="staticBackdrop_edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdrop_editLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updateProduct" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="Images-tab" data-bs-toggle="tab"
                                data-bs-target="#Images" type="button" role="tab" aria-controls="Images"
                                aria-selected="true">Images</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Seo-tab" data-bs-toggle="tab" data-bs-target="#Seo"
                                type="button" role="tab" aria-controls="Seo" aria-selected="false">Seo</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Detail-tab" data-bs-toggle="tab" data-bs-target="#Detail"
                                type="button" role="tab" aria-controls="Detail" aria-selected="false">Detail</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Informations-tab" data-bs-toggle="tab"
                                data-bs-target="#Informations" type="button" role="tab" aria-controls="Informations"
                                aria-selected="false">Informations</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Color-tab" data-bs-toggle="tab" data-bs-target="#Color"
                                type="button" role="tab" aria-controls="Color" aria-selected="false">Color
                                product</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Images" role="tabpanel" aria-labelledby="Images-tab">






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
                                <label class="col-sm-3 col-form-label">Images</label>
                                <input wire:model='images_edit' accept="image/*" type="file" name="images" multiple
                                    class="form-control">
                                <br>
                                @foreach ($images_edit_show as $item)
                                <img style="width: 100px; height: 100px;" src="{{$item->image}}" alt="">
                                @endforeach
                            </div>
                            <div class="text-center">
                                <i class="bx bx-down-arrow-alt"></i>
                            </div>
                            <div class="form-control" id="blank">
                                @if ($images_edit)
                                @foreach ($images_edit as $image)
                                <img width="100px" height="100px" src="{{ $image->temporaryUrl() }}">
                                @endforeach
                                @endif
                            </div>
                        </div>



                        <div class="tab-pane fade" id="Seo" role="tabpanel" aria-labelledby="Seo-tab">




                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Original price</label>
                                <div class="col-sm-10">
                                    <input wire:model='original_price' class="form-control" placeholder="price"
                                        type="number" name="original_price">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Selling price</label>
                                <div class="col-sm-10">
                                    <input wire:model='selling_price' class="form-control" placeholder="price"
                                        type="number" name="selling_price">
                                </div>
                            </div>




                        </div>




                        <div class="tab-pane fade" id="Detail" role="tabpanel" aria-labelledby="Detail-tab">



                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Meta Title</label>
                                <div class="col-sm-10">
                                    <input wire:model='meta_title' type="text" class="form-control" name="meta_title"
                                        placeholder="Meta Title">
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Meta Keywords</label>
                                <div class="col-sm-10">
                                    <input wire:model='meta_keywords' type="text" class="form-control"
                                        name="meta_keywords" placeholder="Meta Keywords">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Meta description</label>
                                <div class="col-sm-10">
                                    <input wire:model='meta_description' type="text" class="form-control"
                                        name="meta_description" placeholder="Meta description">
                                </div>
                            </div>



                        </div>
                        <div class="tab-pane fade" id="Informations" role="tabpanel" aria-labelledby="Informations-tab">



                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name product</label>
                                <div class="col-sm-10">
                                    <input wire:model='name' type="text" class="form-control" name="name"
                                        placeholder="Name product">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea wire:model='description' class="form-control" name="description"
                                        id=""></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10" style="padding-top: 12px">
                                    <select wire:model='category_id' class="form-control" name="category_id">
                                        @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
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
                        <div class="tab-pane fade" id="Color" role="tabpanel" aria-labelledby="Color-tab">
                            <div class="form-group row">
                                <label class="col-form-label">Select color</label>
                                @php
                                $i=0;
                                @endphp
                                <div class="row">
                                    @foreach ($colors as $item)
                                    @if (count($qtColor)>$i)
                                    @if($item->id==$qtColor[$i])
                                    <div class="col-md-3" style="padding-top: 12px">
                                        <input wire:model='color.{{$item->id}}' type="checkbox" value="{{$item->id}}"
                                            id="checkbox_qtcl{{$item->id}}" checked>
                                        {{$item->name}}
                                        <input wire:model='color.{{$item->id}}' type="number" placeholder="quantity"
                                            name="" id="input_qtcl{{$item->id}}">
                                    </div>
                                    @php
                                    $i++;
                                    @endphp
                                    @else
                                    <div class="col-md-3" style="padding-top: 12px">
                                        <input wire:model='color.{{$item->id}}' type="checkbox" value="{{$item->id}}"
                                            id="checkbox_qtcl{{$item->id}}">{{$item->name}}
                                        <input wire:model='color.{{$item->id}}' type="number" placeholder="quantity"
                                            name="" id="input_qtcl{{$item->id}}">
                                    </div>
                                    @endif
                                    @else
                                    <div class="col-md-3" style="padding-top: 12px">
                                        <input wire:model='color.{{$item->id}}' type="checkbox" value="{{$item->id}}"
                                            id="checkbox_qtcl{{$item->id}}"> {{$item->name}}
                                        <input wire:model='color.{{$item->id}}' type="number" placeholder="quantity"
                                            name="" id="input_qtcl{{$item->id}}">
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                </div>
        </div>
        </form>
    </div>
</div>
