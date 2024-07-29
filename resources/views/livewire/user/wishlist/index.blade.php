<div>
    @include('User.alert')
    @include('livewire.user.filter.modal_choose_color')
    <section class="my-14">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="offset-lg-1 col-lg-10">
                    <div class="mb-8">
                        <!-- heading -->
                        <h1 class="mb-1">My Wishlist</h1>
                        <p>There are {{count($products)}} products in this wishlist.</p>
                    </div>
                    <div>
                        <!-- table -->
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th></th>
                                        <th>Product</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                        <th class="align-middle text-center">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i=0;$i<count($products);$i++) <tr>
                                        <td class="align-middle">
                                            <a href="#"><img src="{{asset($products[$i]->product_images[0]->image)}}"
                                                    class="img-fluid icon-shape icon-xxl" alt=""></a>

                                        </td>
                                        <td class="align-middle">
                                            <div>
                                                <h5 class="fs-6 mb-0"><a href="#"
                                                        class="text-inherit">{{$products[$i]->name}}</a>
                                                </h5>
                                            </div>
                                        </td>
                                        <td class="align-middle">${{$products[$i]->selling_price}}</td>
                                        <td class="align-middle"><span
                                                class="badge {{$products[$i]->quantity>0?'bg-success':'bg-danger'}}">{{$products[$i]->quantity>0?'In
                                                stock':'Out of
                                                stock'}}</span></td>
                                        <td class="align-middle">

                                            @if (!$products[$i]->isCart&&$products[$i]->quantity>0)
                                            <a type="button"
                                                wire:click='showColorProduct({{$products[$i]->id}},{{$products[$i]->selling_price}})'
                                                class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">Add to Cart</a>
                                            @elseif ($products[$i]->isCart&&$products[$i]->quantity>0)
                                            <a type="button"
                                                wire:click='addToCart({{$products[$i]->id}},{{$products[$i]->selling_price}})'
                                                class="btn btn-primary btn-sm">Added to Cart</a>
                                            @else
                                            <button class="btn btn-secondary btn-sm" {{$products[$i]->quantity
                                                <=0?'disabled':''}}>Add to Cart
                                            </button>
                                            @endif
                                        </td>
                                        <td class="align-middle text-center"><a
                                                wire:click='removeItemWishList({{$products[$i]->id}})' type="button"
                                                class="text-muted" data-bs-toggle="tooltip" data-bs-placement="top">
                                                <i class="feather-icon icon-trash-2"></i>
                                            </a></td>
                                        </tr>
                                        @endfor
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>



        </div>

    </section>
</div>