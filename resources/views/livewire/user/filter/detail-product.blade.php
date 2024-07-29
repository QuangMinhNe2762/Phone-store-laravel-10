<div class="col-md-6">
    <div class="ps-lg-10">
        <!-- content -->
        <a href="#!" class="mb-4 d-block">{{$product->brand->name}}</a>
        <!-- heading -->
        <h1 class="mb-1">{{$product->name}}</h1>
        <div class="fs-4">
            <!-- price --><span class="fw-bold text-dark">${{$product->selling_price}}</span> <span
                class="text-decoration-line-through text-muted">${{$product->original_price}}{{--
            </span><span><small class="fs-6 ms-2 text-danger">26%
                    Off</small></span> --}}
        </div>
        <!-- hr -->
        <hr class="my-6">
        <!-- radio-->
        <p>Choose your color:</p>
        <div class="radio-grid">
            @foreach ($product->product_colors as $item)
            @if ($item->quantity>0&&!$product->isCart)
            <div class="form-check">
                <input wire:click='changeColor()' wire:model='colorChoose' value="{{$item->color_id}}" type="radio"
                    name="colors" required>
                <span><input type="color" value="{{$item->colors->code}}" disabled
                        style="border: none;width:20px;height:20px;">{{$item->colors->name}}</span>
            </div>
            @endif
            @endforeach
        </div>
        @error('colorChoose') <span class="text-danger">{{ $message }}</span>@enderror
        @if (session('quantity'))
        <span class="text-danger">{{ session('quantity') }}</span>
        @endif
        <div class="mt-5 d-flex justify-content-start">
            <div class="col-lg-2 col-3 ">
                <!-- input -->
                @if ($product->quantity>0&&!$product->isCart)
                <div class="input-group  flex-nowrap justify-content-center ">
                    <input type="button" value="-" wire:click='decrement()'
                        class="button-minus form-control  text-center flex-xl-none w-xl-30 w-xxl-10 px-0  "
                        data-field="quantity">
                    <input type="number" wire:model='quantity' min="1" max="10"
                        class="quantity-field form-control text-center flex-xl-none w-xl-30 w-xxl-10 px-0 ">
                    <input type="button" value="+" wire:click='increment()'
                        class="button-plus form-control  text-center flex-xl-none w-xl-30  w-xxl-10 px-0  "
                        data-field="quantity">
                </div>
                @endif
            </div>
            <div class="ms-2 col-lg-4 col-5 d-grid">
                @if (!$product->isCart&&$product->quantity>0)
                <button type="submit" class="btn btn-secondary"
                    wire:click='addToCart({{$product->id}},{{$product->selling_price}})'><i
                        class="feather-icon icon-shopping-bag me-2"></i>Add to
                    cart</button>
                @elseif ($product->isCart&&$product->quantity>0)
                <button type="submit" class="btn btn-primary"
                    wire:click='addToCart({{$product->id}},{{$product->selling_price}})'><i
                        class="feather-icon icon-shopping-bag me-2" style="color: rgb(0, 255, 0)"></i>Added to
                    cart</button>
                @endif
            </div>
            <div class="ms-2 col-4">
                <!-- btn -->
                @if ($product->isWishList)

                <button class="btn btn-light" wire:click='addToWishList({{$product->id}})' type="submit"
                    href="shop-wishlist.html" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                        class="bi bi-suit-heart-fill" style="color: red"></i></button>
                @else
                <button class="btn btn-light" wire:click='addToWishList({{$product->id}})' type="submit"
                    href="shop-wishlist.html" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                        class="bi bi-heart"></i></button>
                @endif

            </div>
        </div>
        <!-- hr -->
        <hr class="my-6">
        <div>
            <!-- table -->
            <table class="table table-borderless">

                <tbody>
                    <tr>
                        <td>Product Code:</td>
                        <td>{{$product->id}}</td>

                    </tr>
                    <tr>
                        <td>Quantity:</td>
                        <td>{{$product->quantity}}</td>

                    </tr>
                    <tr>
                        <td>Category:</td>
                        <td>{{$product->category->name}}</td>

                    </tr>


                </tbody>
            </table>

        </div>
    </div>
</div>