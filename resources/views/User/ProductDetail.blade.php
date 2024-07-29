@extends('User.Layouts.app')
@section('content')
<section class="mt-8">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- img slide -->
                <div class="product" id="product">
                    @foreach ($product->product_images as $item)
                    <div class="zoom" onmousemove="zoom(event)" style="background-image: url({{asset($item->image)}})">
                        <img src="{{asset($item->image)}}" alt="">
                    </div>
                    @endforeach
                </div>
                <!-- product tools -->
                <div class="product-tools">
                    <div class="thumbnails row g-3" id="productThumbnails">
                        @foreach ($product->product_images as $item)
                        <div class="col-3">
                            <div class="thumbnails-img">
                                <img src="{{asset($item->image)}}" alt="">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @livewire('user.filter.detail-product',['product'=>$product])
        </div>
    </div>
</section>
<section class="mt-lg-14 mt-8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills nav-lb-tab" id="myTab" role="tablist">
                    <!-- nav item -->
                    <li class="nav-item" role="presentation">
                        <!-- btn --> <button class="nav-link active" id="details-tab" data-bs-toggle="tab"
                            data-bs-target="#details-tab-pane" type="button" role="tab" disabled
                            aria-controls="details-tab-pane" aria-selected="true">Information</button>
                    </li>
                </ul>
                <!-- tab content -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="details-tab-pane" role="tabpanel"
                        aria-labelledby="details-tab" tabindex="0">
                        <div class="my-8">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="mb-4">Details</h4>
                                </div>
                                {{-- <div class="col-12 col-lg-6">
                                    <table class="table table-striped">
                                        <!-- table -->
                                        <tbody>
                                            <tr>
                                                <th>Weight</th>
                                                <td>1000 Grams</td>
                                            </tr>
                                            <tr>
                                                <th>Ingredient Type</th>
                                                <td>Vegetarian</td>
                                            </tr>
                                            <tr>
                                                <th>Brand</th>
                                                <td>Dmart</td>
                                            </tr>
                                            <tr>
                                                <th>Item Package Quantity</th>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <th>Form</th>
                                                <td>Larry the Bird</td>
                                            </tr>
                                            <tr>
                                                <th>Manufacturer</th>
                                                <td>Dmart</td>
                                            </tr>
                                            <tr>
                                                <th>Net Quantity</th>
                                                <td>340.0 Gram</td>
                                            </tr>
                                            <tr>
                                                <th>Product Dimensions</th>
                                                <td>9.6 x 7.49 x 18.49 cm</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <table class="table table-striped">
                                        <!-- table -->
                                        <tbody>
                                            <tr>
                                                <th>ASIN</th>
                                                <td>SB0025UJ75W</td>
                                            </tr>
                                            <tr>
                                                <th>Best Sellers Rank</th>
                                                <td>#2 in Fruits</td>
                                            </tr>
                                            <tr>
                                                <th>Date First Available</th>
                                                <td>30 April 2022</td>
                                            </tr>
                                            <tr>
                                                <th>Item Weight</th>
                                                <td>500g</td>
                                            </tr>
                                            <tr>
                                                <th>Generic Name</th>
                                                <td>Banana Robusta</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>
@livewire('user.filter.detailproduct.anotherproduct',['ProductsAnotherBrand'=>$ProductsAnotherBrand,'ProductsWithInBrand'=>$ProductsWithInBrand])
<!-- modal -->
<!-- Modal -->
<div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body p-8">
                <div class="d-flex justify-content-end">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- img slide -->
                        <div class="product productModal" id="productModal">
                            @foreach ($product->product_images as $item)
                            <div class="zoom" onmousemove="zoom(event)"
                                style="background-image: url({{asset($item->image)}})">
                                <img src="{{asset($item->image)}}" alt="">
                            </div>
                            @endforeach
                        </div>
                        <!-- product tools -->
                        <div class="product-tools">
                            <div class="thumbnails row g-3" id="productModalThumbnails">
                                @foreach ($product->product_images as $item)
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="{{asset($item->image)}}" alt="">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @livewire('user.filter.detail-product',['product'=>$product])
                </div>
            </div>

        </div>
    </div>
</div>
@endsection