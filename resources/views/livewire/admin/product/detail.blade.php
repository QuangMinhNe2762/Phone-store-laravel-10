@extends('Admin.Layouts.adminApp')
@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">Product detail: {{$product->name}}</h4>

        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <!-- Basic List group -->
                    <div class="col-lg-6">
                        <h2 class="text-light fw-medium">Information</h2>
                        <div class="demo-inline-spacing mt-3">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    NAME
                                    <span class="badge">{{$product->name}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    CATEGORY
                                    <span class="badge">{{$product->category->name}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    BRAND
                                    <span class="badge">{{$product->brand->name}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--/ Basic List group -->
                    <!-- List group with Badges & Pills -->
                    <div class="col-lg-6">
                        <h2 class="text-light fw-medium">Detail</h2>
                        <div class="demo-inline-spacing mt-3">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    META TITLE
                                    <span class="badge">{{$product->meta_title}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    META KEYWORDS
                                    <span class="badge">{{$product->meta_keywords}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    META DESCRIPTION
                                    <span class="badge">{{$product->meta_description}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--/ List group with Badges & Pills -->
                </div>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="text-light fw-medium">SEO</h2>
                        <div class="demo-inline-spacing mt-3">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    SELLING PRICE
                                    <span class="badge">{{$product->selling_price}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    ORIGINAL PRICE
                                    <span class="badge">{{$product->original_price}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    QUANTITY
                                    <span class="badge">{{$product->quantity}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 mb-xl-0">
                        <h2 class="text-light fw-medium">Another detail</h2>
                        <div class="mt-3">
                            <div class="row">
                                <div class="col-md-4 col-12 mb-3 mb-md-0">
                                    <div class="list-group" role="tablist">
                                        <a class="list-group-item list-group-item-action active" id="list-home-list"
                                            data-bs-toggle="list" href="#list-home" aria-selected="true"
                                            role="tab">DESCRIPTION</a>
                                        <a class="list-group-item list-group-item-action" id="list-profile-list"
                                            data-bs-toggle="list" href="#list-profile" aria-selected="false"
                                            tabindex="-1" role="tab">COLORS</a>
                                        <a class="list-group-item list-group-item-action" id="list-status-list"
                                            data-bs-toggle="list" href="#list-status" aria-selected="false"
                                            tabindex="-1" role="tab">STATUS</a>
                                    </div>
                                </div>
                                <div class="col-md-8 col-12">
                                    <div class="tab-content p-0">
                                        <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                            aria-labelledby="list-home-list">
                                            {{$product->description}}
                                        </div>
                                        <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                            aria-labelledby="list-profile-list">
                                            <ul class="list-group">
                                                @foreach ($product->colors as $color)
                                                <li class="list-group-item"><input type="color"
                                                        value="{{$color->code}}"> {{$color->name}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="list-status" role="tabpanel"
                                            aria-labelledby="list-status-list">
                                            <ul class="list-group">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Status<span
                                                        class="badge {{$product->status==0?'bg-success':'bg-danger'}}">{{$product->status==0?'Visible':'Hidden'}}</span>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Treding
                                                    <span
                                                        class="badge {{$product->trending==1?'bg-info':'bg-warning'}}">{{$product->trending==1?'Yes':'No'}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-light fw-medium">Images</h2>
                        <div class="demo-inline-spacing mt-3">
                            @foreach ($product->product_images as $image)
                            <img style="width: 500px" src="{{asset($image->image)}}" alt="">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection