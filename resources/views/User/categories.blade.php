@extends('User.Layouts.app')
@section('content')
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
                        <h1 class="mb-0">All category</h1>
                    </div>
                </div>
                <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3 mt-2">
                    @foreach ($categories as $category)
                    <div class="col">
                        <!-- card product -->
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative"> <a
                                        href="{{route('home.category.detail',$category->slug)}}">
                                        <!-- img --><img src="{{$category->image}}" alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid">
                                    </a>

                                </div>
                                <h2 class="fs-6 text-center"><a href="#!"
                                        class="text-inherit text-decoration-none">{{$category->name}}</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {!!$categories->links()!!}
            </div>
        </div>
    </div>
</section>
@endsection