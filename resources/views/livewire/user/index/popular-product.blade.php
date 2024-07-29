<div>
    @include('livewire.user.filter.modal_choose_color')
    <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
        @for ($i=0;$i<count($products);$i++)<div class="col">
            <div class="card card-product">
                <div class="card-body">
                    <div class="text-center position-relative">
                        <div class="position-absolute top-0 start-0">
                            <span
                                class="badge {{$products[$i]->trending==1?'bg-danger':''}}">{{$products[$i]->trending==1?'Trending':''}}</span>
                        </div>
                        <a href="{{route('home.product.detail',$products[$i]->slug)}}" target="_blank">
                            <div class="overflow-hidden product-image"
                                style="height: 200px; background-image: url('{{asset($products[$i]->product_images[0]->image)}}'); background-size: cover; background-position: center;">
                            </div>
                        </a>
                    </div>
                    <div class="text-small mb-1"><a href="{{route('home.brand.detail',$products[$i]->brand->slug)}}"
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
                            <a type="button" wire:click='addToWishList({{$products[$i]->id}})' class="btn-action"
                                data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                                    class="bi bi-suit-heart-fill" style="color: red"></i></a>
                            @else
                            <a type="button" wire:click='addToWishList({{$products[$i]->id}})' class="btn-action"
                                data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                                    class="bi bi-heart"></i></a>
                            @endif
                            @if (!$products[$i]->isCart&&$products[$i]->quantity>0)
                            <a type="button"
                                wire:click='showColorProduct({{$products[$i]->id}},{{$products[$i]->selling_price}})'
                                class="btn-action" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                    class="bi bi-cart-fill"></i></i></a>
                            @elseif ($products[$i]->isCart&&$products[$i]->quantity>0)
                            <a type="button"
                                wire:click='addToCart({{$products[$i]->id}},{{$products[$i]->selling_price}})'
                                class="btn-action"><i class="bi bi-cart-x-fill" style="color: rgb(0, 255, 0)"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endfor
</div>
</div>