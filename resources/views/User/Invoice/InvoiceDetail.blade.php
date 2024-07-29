@extends('User.Layouts.app')
@section('content')
<section class="mb-lg-14 mb-8 mt-8">
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-12">
                <div>
                    <div class="mb-8">
                        <!-- text -->
                        <h1 class="fw-bold mb-0">Invoice detail</h1>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <!-- accordion -->
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <!-- accordion item -->
                        <div class="accordion-item py-4">

                            <div class="d-flex justify-content-between align-items-center">
                                <!-- heading one -->
                                <a href="#" class="fs-5 text-inherit h4 collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    <i class="feather-icon icon-map-pin me-2 text-muted"></i>Add delivery address
                                </a>
                            </div>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample" style="">
                                <div class="mt-5">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 mb-4">
                                            <!-- form -->
                                            <div class="border p-6 rounded-3">
                                                <address> <strong>{{$invoice[0]->Name}}</strong> <br>
                                                    {{$invoice[0]->Address}},<br>

                                                    <abbr title="Phone">P: {{$invoice[0]->Phone}}</abbr>
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- accordion item -->
                        <div class="accordion-item py-4">

                            <a href="#" class="text-inherit h5 collapsed" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                <i class="feather-icon icon-credit-card me-2 text-muted"></i>Payment Method
                                <!-- collapse -->
                            </a>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample" style="">

                                <div class="mt-5">
                                    <div>
                                        <!-- card -->
                                        <div class="card card-bordered shadow-none">
                                            <div class="card-body p-6">
                                                <!-- check input -->
                                                <div class="d-flex">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="cashonDelivery" checked>
                                                        <label class="form-check-label ms-2" for="cashonDelivery">

                                                        </label>
                                                    </div>
                                                    <div>
                                                        <!-- title -->
                                                        <h5 class="mb-1 h6"> Cash on Delivery</h5>
                                                        <p class="mb-0 small">Pay with cash when your order is
                                                            delivered.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-12 col-md-12 offset-lg-1 col-lg-4">
                    <div class="mt-4 mt-lg-0">
                        <div class="card shadow-sm">
                            <h5 class="px-6 py-4 bg-transparent mb-0">Order Details</h5>
                            <ul class="list-group list-group-flush">
                                <!-- list group item -->
                                @foreach ($invoice as $order)
                                <li class="list-group-item px-4 py-3">
                                    <div class="row align-items-center">
                                        <div class="col-2 col-md-2">
                                            <img src="{{asset($order->product->product_images[0]->image)}}"
                                                alt="Ecommerce" class="img-fluid">
                                        </div>
                                        <div class="col-5 col-md-5">
                                            <h6 class="mb-0">{{$order->product->name}}</h6>
                                        </div>
                                        <div class="col-2 col-md-2 text-center text-muted">
                                            <span>{{$order->total_quantity}}</span>

                                        </div>
                                        <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                            <span class="fw-bold">${{$order->product->selling_price}}</span>
                                        </div>
                                    </div>

                                </li>
                                @endforeach
                                <!-- list group item -->
                                <li class="list-group-item px-4 py-3">
                                    <div class="d-flex align-items-center justify-content-between   mb-2">
                                        <div>
                                            Item Subtotal

                                        </div>
                                        <div class="fw-bold">
                                            ${{$invoice->sum('total_price')}}
                                        </div>
                                    </div>
                                </li>
                                <!-- list group item -->
                                <li class="list-group-item px-4 py-3">
                                    <div class="d-flex align-items-center justify-content-between fw-bold">
                                        <div>
                                            Subtotal
                                        </div>
                                        <div>
                                            ${{$invoice->sum('total_price')}}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>


            </div>
        </div>


    </div>


</section>
@endsection