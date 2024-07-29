<div>
    @include('livewire.user.filter.modal_choose_color')
    <section class="my-lg-14 my-14">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <!-- heading -->
                    <h3>Related categories within the brand</h3>
                </div>
            </div>
            <!-- row -->
            <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-2 mt-2">
                <!-- col -->
                @for ($i=0;$i<count($ProductsWithInBrand);$i++) <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <!-- badge -->

                            <div class="text-center position-relative ">
                                <div class=" position-absolute top-0 start-0">
                                    <span
                                        class="badge {{$ProductsWithInBrand[$i]->trending==1?'bg-danger':''}}">{{$ProductsWithInBrand[$i]->trending==1?'Trending':''}}</span>
                                </div>
                                <a href="{{route('home.product.detail',$ProductsWithInBrand[$i]->slug)}}">
                                    <div class="overflow-hidden product-image"
                                        style="height: 200px; background-image: url('{{asset($ProductsWithInBrand[$i]->product_images[0]->image)}}'); background-size: cover; background-position: center;">
                                    </div>
                                </a>
                            </div>
                            <!-- heading -->
                            <div class="text-small mb-1"><a
                                    href="{{route('home.brand.detail',$ProductsWithInBrand[$i]->brand->slug)}}"
                                    class="text-decoration-none text-muted"><small>{{$ProductsWithInBrand[$i]->brand->name}}</small></a>
                            </div>
                            <h2 class="fs-6"><a href="{{route('home.product.detail',$ProductsWithInBrand[$i]->slug)}}"
                                    class="text-inherit text-decoration-none">{{$ProductsWithInBrand[$i]->name}}</a>
                            </h2>
                            <!-- price -->
                            <div>
                                <span class="text-muted small">Quantity:{{$ProductsWithInBrand[$i]->quantity}}</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div><span class="text-dark">${{$ProductsWithInBrand[$i]->selling_price}}</span> <span
                                        class="text-decoration-line-through text-muted">${{$ProductsWithInBrand[$i]->original_price}}</span>
                                </div>
                                <!-- btn -->
                                <div>
                                    @if($ProductsWithInBrand[$i]->isWishList||session('addWishList')==$ProductsWithInBrand[$i]->id)
                                    <a type="button" wire:click='addToWishList({{$ProductsWithInBrand[$i]->id}})'
                                        class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                        title="Wishlist"><i class="bi bi-suit-heart-fill" style="color: red"></i></a>
                                    @else
                                    <a type="button" wire:click='addToWishList({{$ProductsWithInBrand[$i]->id}})'
                                        class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                        title="Wishlist"><i class="bi bi-heart"></i></a>
                                    @endif
                                    @if (!$ProductsWithInBrand[$i]->isCart&&$ProductsWithInBrand[$i]->quantity>0)
                                    <a type="button"
                                        wire:click='showColorProduct({{$ProductsWithInBrand[$i]->id}},{{$ProductsWithInBrand[$i]->selling_price}})'
                                        class="btn-action" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                            class="bi bi-cart-fill"></i></i></a>
                                    @elseif ($ProductsWithInBrand[$i]->isCart&&$ProductsWithInBrand[$i]->quantity>0)
                                    <a type="button"
                                        wire:click='addToCart({{$ProductsWithInBrand[$i]->id}},{{$ProductsWithInBrand[$i]->selling_price}})'
                                        class="btn-action"><i class="bi bi-cart-x-fill"
                                            style="color: rgb(0, 255, 0)"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            @endfor
        </div>
</div>
</section>
<section class="my-lg-14 my-14">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <!-- heading -->
                <h3>Related another brands</h3>
            </div>
        </div>
        <!-- row -->
        <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-2 mt-2">
            <!-- col -->
            @for ($i=0;$i<count($ProductsAnotherBrand);$i++) <div class="col">
                <div class="card card-product">
                    <div class="card-body">
                        <!-- badge -->

                        <div class="text-center position-relative ">
                            <div class=" position-absolute top-0 start-0">
                                <span
                                    class="badge {{$ProductsAnotherBrand[$i]->trending==1?'bg-danger':''}}">{{$ProductsAnotherBrand[$i]->trending==1?'Trending':''}}</span>
                            </div>
                            <a href="{{route('home.product.detail',$ProductsAnotherBrand[$i]->slug)}}">
                                <div class="overflow-hidden product-image"
                                    style="height: 200px; background-image: url('{{asset($ProductsAnotherBrand[$i]->product_images[0]->image)}}'); background-size: cover; background-position: center;">
                                </div>
                            </a>
                        </div>
                        <!-- heading -->
                        <div class="text-small mb-1"><a
                                href="{{route('home.brand.detail',$ProductsAnotherBrand[$i]->brand->slug)}}"
                                class="text-decoration-none text-muted"><small>{{$ProductsAnotherBrand[$i]->brand->name}}</small></a>
                        </div>
                        <h2 class="fs-6"><a href="{{route('home.product.detail',$ProductsAnotherBrand[$i]->slug)}}"
                                class="text-inherit text-decoration-none">{{$ProductsAnotherBrand[$i]->name}}</a>
                        </h2>
                        <!-- price -->
                        <div>
                            <span class="text-muted small">Quantity:{{$ProductsAnotherBrand[$i]->quantity}}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div><span class="text-dark">${{$ProductsAnotherBrand[$i]->selling_price}}</span> <span
                                    class="text-decoration-line-through text-muted">${{$ProductsAnotherBrand[$i]->original_price}}</span>
                            </div>
                            <!-- btn -->
                            <div>
                                @if($ProductsAnotherBrand[$i]->isWishList||session('addWishList')==$ProductsAnotherBrand[$i]->id)
                                <a type="button" wire:click='addToWishList({{$ProductsAnotherBrand[$i]->id}})'
                                    class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                                        class="bi bi-suit-heart-fill" style="color: red"></i></a>
                                @else
                                <a type="button" wire:click='addToWishList({{$ProductsAnotherBrand[$i]->id}})'
                                    class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                                        class="bi bi-heart"></i></a>
                                @endif
                                @if (!$ProductsAnotherBrand[$i]->isCart&&$ProductsAnotherBrand[$i]->quantity>0)
                                <a type="button"
                                    wire:click='showColorProduct({{$ProductsAnotherBrand[$i]->id}},{{$ProductsAnotherBrand[$i]->selling_price}})'
                                    class="btn-action" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                        class="bi bi-cart-fill"></i></i></a>
                                @elseif ($ProductsAnotherBrand[$i]->isCart&&$ProductsAnotherBrand[$i]->quantity>0)
                                <a type="button"
                                    wire:click='addToCart({{$ProductsAnotherBrand[$i]->id}},{{$ProductsAnotherBrand[$i]->selling_price}})'
                                    class="btn-action"><i class="bi bi-cart-x-fill"
                                        style="color: rgb(0, 255, 0)"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        @endfor
    </div>
    </div>
</section>
</div>