@extends('Admin.Layouts.adminApp')
@section('content')
<div class="py-3 py-md-4 checkout">
    <div class="container">
        <h4>Checkout</h4>
        <hr>

        <div class="row">
            <div class="col-md-12">
                <div class="shadow bg-white p-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="text-primary">Detail invoice</h4>
                        </div>
                    </div>
                    <hr>

                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Full Name</label>
                                <input type="text" name="fullname" class="form-control" placeholder="Enter Full Name"
                                    value="{{$invoice[0]->Name}}" disabled />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Phone Number</label>
                                <input type="number" name="phone" class="form-control" placeholder="Enter Phone Number"
                                    value="{{$invoice[0]->Phone}}" disabled />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email Address"
                                    value="{{$invoice[0]->Email}}" disabled />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Full Address</label>
                                <textarea name="address" class="form-control" rows="2"
                                    disabled>{{$invoice[0]->Address}}</textarea>
                            </div>
                        </div>
                    </form>

                </div>
            </div>



            <div class="table-responsive pt-3">
                <table class="table table-bordered bg-white">
                    <thead>
                        <tr>
                            <th>
                                Product ID
                            </th>
                            <th>
                                Name Product
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Quantity
                            </th>
                            <th>
                                Total Price
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoice as $product)
                        <tr>
                            <td>
                                {{$product->product->id}}
                            </td>
                            <td>
                                {{$product->product->name}}
                            </td>
                            <td>
                                {{$product->product->selling_price}}
                            </td>
                            <td>
                                {{$product->total_quantity}}
                            </td>
                            <td>
                                {{$product->total_price}}
                            </td>
                            <td>
                                <a type="button" href="{{route('home.product.detail',$product->product->slug)}}"
                                    target="_blank" class="btn btn-success btn-rounded btn-fw">View</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-12 mb-4">
                <div class="shadow bg-white p-3">
                    <h4 class="text-primary">
                        Item Total Amount :
                        <span class="float-end">${{$invoice->sum('total_price')}}</span>
                    </h4>
                    <hr>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection