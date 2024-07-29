<div>
    <style>
        @media (min-width: 768px) {
            .product-image {
                height: 300px;
                /* Larger fixed height for larger screens */
                background-size: 80%;
                /* Reduce the size of the background image */
                background-repeat: no-repeat;
                background-position: center;
                /* Keep the image centered */
            }
        }
    </style>
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
                            <h1 class="mb-0">@if ($middle=='brand')
                                Brand: {{$brand->name}}
                                @endif
                                @if ($middle=='category')
                                Category: {{$category->name}}
                                @endif
                                @if ($middle=='search')
                                Product: {{$search}}
                                @endif
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
                            @if ($middle== 'category')
                            <div>
                                <select wire:change='filter($event.target.value)' class="form-select" id="selectBrand"
                                    aria-label="Default select example">
                                    <option value="-1" selected>Select brand</option>
                                    @foreach ($brands as $key=> $brand)
                                    <option value="{{$key}}">{{ $brand}}</option>
                                    @endforeach
                                    <option value="-1">All</option>
                                </select>
                            </div>
                            @endif
                            @if ($middle== 'brand')
                            <div>
                                <select wire:change='filter($event.target.value)' class="form-select" id="selectBrand"
                                    aria-label="Default select example">
                                    <option value="-1" selected>Select category</option>
                                    @foreach ($categories as $key=> $category)
                                    <option value="{{$key}}">{{ $category}}</option>
                                    @endforeach
                                    <option value="-1">All</option>
                                </select>
                            </div>
                            @endif
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
                        @for ($i=0;$i<count($products);$i++) <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="text-center position-relative">
                                        <div class="position-absolute top-0 start-0">
                                            <span
                                                class="badge {{$products[$i]->trending==1?'bg-danger':''}}">{{$products[$i]->trending==1?'Trending':''}}</span>
                                        </div>
                                        <a href="{{route('home.product.detail',$products[$i]->slug)}}">
                                            <div class="overflow-hidden product-image"
                                                style="height: 200px; background-image: url('{{asset($products[$i]->product_images[0]->image)}}'); background-size: cover; background-position: center;">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="text-small mb-1"><a
                                            href="{{route('home.brand.detail',$products[$i]->brand->slug)}}"
                                            class="text-decoration-none text-muted"><small>{{$products[$i]->brand->name}}</small></a>
                                    </div>
                                    <h2 class="fs-6"><a href="{{route('home.product.detail',$products[$i]->slug)}}"
                                            class="text-inherit text-decoration-none">{{$products[$i]->name}}</a></h2>
                                    <div>
                                        <span class="text-muted small">Quantity:{{$products[$i]->quantity}}</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div><span class="text-dark">${{$products[$i]->selling_price}}</span> <span
                                                class="text-decoration-line-through text-muted">${{$products[$i]->original_price}}</span>
                                        </div>
                                        <div>
                                            @if ($products[$i]->isWishList||session('addWishList')==$products[$i]->id)
                                            <a type="button" wire:click='addToWishList({{$products[$i]->id}})'
                                                class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                                title="Wishlist"><i class="bi bi-suit-heart-fill"
                                                    style="color: red"></i></a>
                                            @else
                                            <a type="button" wire:click='addToWishList({{$products[$i]->id}})'
                                                class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                                title="Wishlist"><i class="bi bi-heart"></i></a>
                                            @endif
                                            @if (!$products[$i]->isCart&&$products[$i]->quantity>0)
                                            <a type="button"
                                                wire:click='showColorProduct({{$products[$i]->id}},{{$products[$i]->selling_price}})'
                                                class="btn-action" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop"><i class="bi bi-cart-fill"></i></i></a>
                                            @elseif ($products[$i]->isCart&&$products[$i]->quantity>0)
                                            <a type="button"
                                                wire:click='addToCart({{$products[$i]->id}},{{$products[$i]->selling_price}})'
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
                @if (count($products)==0)
                @include('User.alert')
                @endif
                {{$products->links()}}
            </div>
        </div>
</div>
</section>
</div>