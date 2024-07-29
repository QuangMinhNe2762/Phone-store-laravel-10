@extends('User.Layouts.app')
@section('content')
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
<section class="mt-8">
    <div class="container">
        <div class="hero-slider ">
            @foreach ($sliders as $slider)
            <div
                style="background: url({{$slider->image}})no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
                <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                    {{-- <span class="badge text-bg-warning">Opening Sale Discount 50%</span> --}}

                    <h2 class="text-dark display-5 fw-bold mt-4">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </h2>
                    <p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </p>
                    <a href=""
                        class="btn mt-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="mb-lg-10 mt-lg-14 my-8">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-6">

                <h3 class="mb-0">Featured Brands</h3>

            </div>
        </div>
        <div class="category-slider ">
            @foreach ($brands as $brand)
            <div class="item">
                <a href="{{route('home.brand.detail',$brand->slug)}}" target="_blank"
                    class="text-decoration-none text-inherit">
                    <div class="card card-product mb-4">
                        <div class="card-body text-center py-8 product-image" style="height: 160px">
                            <img src="{{$brand->logo}}" alt="Grocery Ecommerce Template" class="img-fluid"
                                style="max-height: 100px; width: auto;">
                            <div>{{$brand->name}}</div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>


    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            @foreach ($sliderAnother as $slider)
            <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                <div>
                    <div class="py-10 px-8 rounded-3"
                        style="background:url({{$slider->image}})no-repeat; background-size: cover; background-position: center;">
                        <div>
                            <h3 class="fw-bold mb-1 text-light">{{$slider->title}}
                            </h3>
                            <p class="mb-4 text-light">Trending brand</p>
                            <a href="{{route('home.brand.detail',$slider->title)}}" class="btn btn-dark">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="my-lg-14 my-8">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-6">

                <h3 class="mb-0">Popular Products</h3>

            </div>
        </div>
        @livewire('user.index.popularproduct',['products'=>$products])
    </div>
</section>
<section class="my-lg-14 my-8">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="mb-8 mb-xl-0">
                    <div class="mb-6"><img src="/User/assets/images/icons/clock.svg" alt=""></div>
                    <h3 class="h5 mb-3">
                        10 minute grocery now
                    </h3>
                    <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup stores near
                        you.</p>
                </div>
            </div>
            <div class="col-md-6  col-lg-3">
                <div class="mb-8 mb-xl-0">
                    <div class="mb-6"><img src="/User/assets/images/icons/gift.svg" alt=""></div>
                    <h3 class="h5 mb-3">Best Prices & Offers</h3>
                    <p>Cheaper prices than your local supermarket, great cashback offers to top it off. Get best
                        pricess &
                        offers.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="mb-8 mb-xl-0">
                    <div class="mb-6"><img src="/User/assets/images/icons/package.svg" alt=""></div>
                    <h3 class="h5 mb-3">Wide Assortment</h3>
                    <p>Choose from 5000+ products across food, personal care, household, bakery, veg and non-veg &
                        other
                        categories.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="mb-8 mb-xl-0">
                    <div class="mb-6"><img src="/User/assets/images/icons/refresh-cw.svg" alt=""></div>
                    <h3 class="h5 mb-3">Easy Returns</h3>
                    <p>Not satisfied with a product? Return it at the doorstep & get a refund within hours. No
                        questions asked
                        <a href="#!">policy</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection