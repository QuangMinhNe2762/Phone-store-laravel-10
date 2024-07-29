@extends('User.Layouts.app')
@section('content')
@livewire('user.filter.product',['brand_slug'=>$title])
{{-- <style>
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
                        <h1 class="mb-0">Brand:{{$brand->name}}</h1>
                    </div>
                </div>
                <div class="d-md-flex justify-content-between align-items-center">
                    <!-- title -->
                    <div>
                        <p class="mb-3 mb-md-0"> <span class="text-dark">{{count($brand->products)}}</span>
                            Products
                            found </p>
                    </div>
                    <!-- icon -->
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
                                    <div class="overflow-hidden product-image"
                                        style="height: 200px; background-image: url('{{asset($product->product_images[0]->image)}}'); background-size: cover; background-position: center;">
                                        <a href="#!"></a>
                                    </div>

                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                            title="Wishlist"><i class="bi bi-heart"></i></a>
                                    </div>
                                </div>
                                <div class="text-small mb-1"><a href=""
                                        class="text-decoration-none text-muted"><small>{{$product->brand->name}}</small></a>
                                </div>
                                <h2 class="fs-6"><a href="#!"
                                        class="text-inherit text-decoration-none">{{$product->name}}</a></h2>
                                <div>
                                    <span class="text-muted small">Quantity:{{$product->quantity}}</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">${{$product->selling_price}}</span> <span
                                            class="text-decoration-line-through text-muted">${{$product->original_price}}</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <!-- SVG icon -->
                                            Add
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>




                <!-- row -->
                <div class="row mt-8">
                    <div class="col">
                        <!-- nav -->
                        <nav>
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link  mx-1 rounded-3 " href="#" aria-label="Previous">
                                        <i class="feather-icon icon-chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item "><a class="page-link  mx-1 rounded-3 active" href="#">1</a>
                                </li>
                                <li class="page-item"><a class="page-link mx-1 rounded-3 text-body" href="#">2</a>
                                </li>

                                <li class="page-item"><a class="page-link mx-1 rounded-3 text-body" href="#">...</a>
                                </li>
                                <li class="page-item"><a class="page-link mx-1 rounded-3 text-body" href="#">12</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link mx-1 rounded-3 text-body" href="#" aria-label="Next">
                                        <i class="feather-icon icon-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection