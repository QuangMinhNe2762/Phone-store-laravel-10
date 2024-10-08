<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        label {
            font-family: sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }

        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }

        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }

        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }

        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }

        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }

        .text-end {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }

        .no-border {
            border: 1px solid #fff !important;
        }

        .bg-blue {
            background-color: rgb(0, 255, 0);
            color: #fff;
        }
    </style>
</head>

<body>

    <div class="text-center">
        <h2>Thank you for your order</h2>
        <p>
            Thank you for purchasing with Phone Store.
            <br>
            Your order item and details are provided below.
        </p>
    </div>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">Phone Store</h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span>Invoice Id: #{{$orders[0]->id}}</span> <br>
                    <span>Date: {{$orders[0]->created_at}}</span> <br>
                    <span>Address: {{$orders[0]->Address}}</span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Order Details</th>
                <th width="50%" colspan="2">User Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Order Id:</td>
                <td>{{$orders[0]->id}}</td>

                <td>Full Name:</td>
                <td>{{$orders[0]->Name}}</td>
            </tr>
            <tr>
                <td>Email Id:</td>
                <td>{{$orders[0]->Email}}</td>
            </tr>
            <tr>
                <td>Ordered Date:</td>
                <td>{{$orders[0]->created_at}}</td>

                <td>Phone:</td>
                <td>{{$orders[0]->Phone}}</td>
            </tr>
            <tr>
                <td>Address:</td>
                <td>{{$orders[0]->Address}}</td>
            </tr>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Order Items
                </th>
            </tr>
            <tr class="bg-blue">
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td width="10%">{{$order->product->id}}</td>
                <td>
                    {{$order->product->name}}
                </td>
                <td width="10%">${{$order->product->selling_price}}</td>
                <td width="10%">{{$order->total_quantity}}</td>
                <td width="15%" class="fw-bold">${{$order->total_price}}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="4" class="total-heading">Total Amount - <small>Inc. all vat/tax</small> :</td>
                <td colspan="1" class="total-heading">${{$total_price}}</td>
            </tr>
        </tbody>
    </table>

    <br>
    <p class="text-center">
        Thank your for shopping with Phone Store
    </p>

</body>

</html>