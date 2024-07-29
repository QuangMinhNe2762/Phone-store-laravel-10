<div>
    @include('livewire.user.filter.modal_choose_color')
    <section class="mt-8 mb-lg-14 mb-8">
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-lg-12">
                    <!-- page header -->
                    <div class="card mb-4 bg-light border-0">
                        <!-- card body -->
                        <div class="card-body p-9">
                            <!-- title -->
                            <h1 class="mb-0">All products
                            </h1>
                        </div>
                    </div>
                    <div class="d-md-flex justify-content-between align-items-center">
                        <!-- title -->
                        <div>
                            <p class="mb-3 mb-md-0"> <span class="text-dark">{{count($products)}}</span>
                                Products
                                found</p>
                        </div>
                        <!-- icon -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <select wire:change='filterBrand($event.target.value)' class="form-select"
                                    id="selectBrand" aria-label="Default select example">
                                    <option value="-1" selected>Select brand</option>
                                    @foreach ($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                    <option value="-1">All</option>
                                </select>
                            </div>
                            <div>
                                <select wire:change='filterCategory($event.target.value)' class="form-select"
                                    id="selectBrand" aria-label="Default select example">
                                    <option value="-1" selected>Select category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{ $category->name}}</option>
                                    @endforeach
                                    <option value="-1">All</option>
                                </select>
                            </div>
                            <!-- Price sort option -->
                            <div>
                                <select wire:change='filterPrice($event.target.value)' class="form-select"
                                    id="selectPriceSort" aria-label="Default select example">
                                    <option value="desc" selected>Sort by</option>
                                    <option value="asc">Price: Low to High</option>
                                    <option value="desc">Price: High to Low</option>
                                </select>
                            </div>
                            <!-- Brand select option -->

                        </div>
                    </div>
                    <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3 mt-2">
                        @foreach ($products as $product)
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="text-center position-relative">
                                        <div class="position-absolute top-0 start-0">
                                            <span
                                                class="badge {{$product->trending==1?'bg-danger':''}}">{{$product->trending==1?'Trending':''}}</span>
                                        </div>
                                        <a href="{{route('home.product.detail',$product->slug)}}">
                                            <div class="overflow-hidden product-image"
                                                style="height: 200px; background-image: url('{{asset($product->product_images[0]->image)}}'); background-size: cover; background-position: center;">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="text-small mb-1"><a
                                            href="{{route('home.brand.detail',$product->brand->slug)}}"
                                            class="text-decoration-none text-muted"><small>{{$product->brand->name}}</small></a>
                                    </div>
                                    <h2 class="fs-6"><a href="{{route('home.product.detail',$product->slug)}}"
                                            class="text-inherit text-decoration-none">{{$product->name}}</a></h2>
                                    <div>
                                        <span class="text-muted small">Quantity:{{$product->quantity}}</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div><span class="text-dark">${{$product->selling_price}}</span> <span
                                                class="text-decoration-line-through text-muted">${{$product->original_price}}</span>
                                        </div>
                                        <div>
                                            @if ($product->isWishList||session('addWishList')==$product->id)
                                            <a type="button" wire:click='addToWishList({{$product->id}})'
                                                class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                                title="Wishlist"><i class="bi bi-suit-heart-fill"
                                                    style="color: red"></i></a>
                                            @else
                                            <a type="button" wire:click='addToWishList({{$product->id}})'
                                                class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                                title="Wishlist"><i class="bi bi-heart"></i></a>
                                            @endif
                                            @if (!$product->isCart&&$product->quantity>0)
                                            <a type="button"
                                                wire:click='showColorProduct({{$product->id}},{{$product->selling_price}})'
                                                class="btn-action" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop"><i class="bi bi-cart-fill"></i></i></a>
                                            @elseif ($product->isCart&&$product->quantity>0)
                                            <a type="button"
                                                wire:click='addToCart({{$product->id}},{{$product->selling_price}})'
                                                class="btn-action"><i class="bi bi-cart-x-fill"
                                                    style="color: rgb(0, 255, 0)"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @if (count($products)==0)
                    @include('User.alert')
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>