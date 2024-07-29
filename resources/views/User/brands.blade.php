@extends('User.Layouts.app')
@section('content')
<style>
    @media (min-width: 100px) {
        .product-image {
            height: 100px;
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
                        <h1 class="mb-0">All brand</h1>
                    </div>
                </div>
                <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3 mt-2">
                    @foreach ($brands as $brand)
                    <div class="col">
                        <!-- card product -->
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative overflow-hidden product-image"> <a
                                        href="{{route('home.brand.detail',$brand->slug)}}">
                                        <!-- img --><img src="{{$brand->logo}}" alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid" style="height: 70%">
                                    </a>

                                </div>
                                <h2 class="fs-6 text-center"><a href="{{route('home.brand.detail',$brand->slug)}}"
                                        class="text-inherit text-decoration-none">{{$brand->name}}</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{-- {!!$brands->links()!!} --}}
            </div>
        </div>
    </div>
</section>
@endsection