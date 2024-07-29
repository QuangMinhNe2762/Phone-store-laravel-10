<div>
    @include('User.alert')
    @include('livewire.user.cart.modal_checkout')
    <section class="mb-lg-14 mb-8 mt-8">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <!-- card -->
                    <div class="card py-1 border-0 mb-8">
                        <div>
                            <h1 class="fw-bold">Shop Cart</h1>
                            <p class="mb-3 mb-md-0"> <span class="text-dark">{{count($products)}}</span>
                                Products in cart</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-8 col-md-7">

                    <div class="py-3">
                        <!-- alert -->
                        <ul class="list-group list-group-flush">
                            @foreach ($products as $product)
                            <li class="list-group-item py-3 py-lg-0 px-0 border-top">
                                <!-- row -->
                                <div class="row align-items-center">
                                    <div class="col-3 col-md-2">
                                        <!-- img --> <img src="{{asset($product->products->product_images[0]->image)}}"
                                            alt="Ecommerce" class="img-fluid">
                                    </div>
                                    <div class="col-4 col-md-3">
                                        <!-- title -->
                                        <h6 class="mb-0">{{$product->products->name}}</h6>
                                        <span><small
                                                class="text-muted">{{$product->products->brand->name}}</small></span>
                                        <!-- text -->
                                        <div class="mt-2 small "> <a type="button"
                                                wire:click='removeProductOnCart({{$product->product_id}})'
                                                class="text-decoration-none text-inherit">
                                                <span class="me-1 align-text-bottom">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash-2 text-success">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                                    </svg></span><span class="text-muted">Remove</span></a></div>
                                    </div>
                                    <div class="col-2 text-lg-end text-start text-md-end col-md-1">
                                        <input type="color" value="{{$product->color->code}}" disabled
                                            style="border:none;width:20px;height:20px;">
                                    </div>
                                    @if ($product->products->quantity>0)
                                    <!-- input group -->
                                    <div class="col-3 col-md-2 col-lg-2">
                                        @if (!array_key_exists($product->product_id,$quantityChoose))
                                        <div class="input-group  flex-nowrap justify-content-center  ">
                                            <input type="button" value="-"
                                                wire:click='decrement({{$product->product_id}})'
                                                class="button-minus form-control  text-center flex-xl-none w-xl-30 w-xxl-10 px-0  "
                                                data-field="quantity">
                                            <input type="number" disabled min="1" max="10"
                                                value="{{$product->quantity}}"
                                                class="quantity-field form-control text-center flex-xl-none w-xl-30 w-xxl-10 px-0 ">
                                            <input type="button" value="+"
                                                wire:click='increment({{$product->product_id}})'
                                                class="button-plus form-control  text-center flex-xl-none w-xl-30  w-xxl-10 px-0  "
                                                data-field="quantity">

                                        </div>
                                        @if(session($product->product_id))
                                        <small class="text-danger">{{session($product->product_id)}}</small>
                                        @endif
                                        @endif

                                    </div>
                                    <!-- price -->
                                    <div
                                        class="col-2 text-lg-end text-start text-md-end col-md-2 d-flex justify-content-between align-items-center">
                                        <div>
                                            <span
                                                class="fw-bold text-success">${{$product->products->selling_price}}</span>
                                            <div class="text-decoration-line-through text-muted small">
                                                ${{$product->products->original_price}}</div>
                                        </div>
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                    <div class="col-2 text-lg-end text-start text-md-end col-md-1">
                                        <span
                                            class="fw-bold text-success">${{$product->products->selling_price*$product->quantity}}</span>
                                    </div>
                                    <div class="col-2 text-lg-end text-start text-md-end col-md-1">
                                        @if (array_key_exists($product->product_id,$quantityChoose))
                                        <button id="idProduct" type="button" class="btn btn-danger btn-sm"
                                            wire:click='cancelChoose({{$product->product_id}})'>
                                            <i class="fa fa-times" aria-hidden="true"></i> cancel
                                        </button>
                                        @else
                                        <button id="idProduct" type="button" class="btn btn-success btn-sm"
                                            wire:click='productChose({{$product->product_id}})'>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i> Choose
                                        </button>
                                        @endif
                                    </div>
                                    @endif
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        @if (count($products)>0)
                        <!-- btn -->
                        <div class="d-flex justify-content-between mt-4">
                            <!-- Button on the left -->
                            <a href="{{route('home.index')}}" class="btn btn-primary">Continue Shopping</a>
                            <a type="button" id="buybtn" class="btn btn-primary">Buy</a>
                        </div>
                        @else
                        <div class="d-flex justify-content-between mt-4">
                            <!-- Button on the left -->
                            <a href="{{route('home.index')}}" class="btn btn-primary">Go to shopping</a>
                        </div>
                        @endif
                    </div>
                </div>








                @if (count($products)>0)
                <!-- sidebar -->
                {{-- <div class="col-12 col-lg-4 col-md-5">
                    <!-- card -->
                    <div class="mb-5 card mt-6">
                        <div class="card-body p-6">
                            <!-- heading -->
                            <h2 class="h5 mb-4">Summary</h2>
                            <div class="card mb-2">
                                <!-- list group -->
                                <ul class="list-group list-group-flush">
                                    <!-- list group item -->
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="me-auto">
                                            <div>Item Subtotal</div>

                                        </div>
                                        <span>${{$totalPrice}}</span>
                                    </li>
                                </ul>

                            </div>
                            <div class="d-grid mb-1 mt-4">
                                <!-- btn -->
                                <button class="btn btn-primary btn-lg d-flex justify-content-between align-items-center"
                                    type="submit">
                                    Go to Checkout <span class="fw-bold">${{$totalPrice}}</span></button>
                            </div>
                            <!-- text -->
                            <p><small>By placing your order, you agree to be bound by the Freshcart <a href="#!">Terms
                                        of
                                        Service</a>
                                    and <a href="#!">Privacy Policy.</a> </small></p>
                        </div>
                    </div>
                </div> --}}
                <div class="col-12 col-lg-4 col-md-5" id="checkout" style="opacity: 0.5">
                    <!-- card -->
                    <div class="mb-5 card mt-6">
                        <div class="card-body p-6">
                            <!-- heading -->
                            <h2 class="h5 mb-4">Summary</h2>
                            <div class="card mb-2">
                                <!-- list group -->
                                <ul class="list-group list-group-flush">
                                    <!-- list group item -->
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="me-auto">
                                            <div>Item Subtotal</div>
                                        </div>
                                        <span>${{$totalPrice}}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-grid mb-1 mt-4">
                                <!-- btn -->
                                <button class="btn btn-primary btn-lg d-flex justify-content-between align-items-center"
                                    type="submit" id="checkoutbtn" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    disabled>
                                    Go to Checkout <span class="fw-bold">${{$totalPrice}}</span>
                                </button>
                            </div>
                            <!-- text -->
                            <p><small>By placing your order, you agree to be bound by the Freshcart Terms of Service and
                                    Privacy
                                    Policy.</small></p>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
</div>