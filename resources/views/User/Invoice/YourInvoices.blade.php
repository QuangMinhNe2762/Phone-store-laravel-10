<div class="col-lg-9 col-md-8 col-12">
    <div class="p-6 p-lg-10">
        <!-- heading -->
        <h2 class="mb-6">Your Orders</h2>

        <div class="table-responsive border-0">
            <!-- Table -->
            <table class="table mb-0 text-nowrap">
                <!-- Table Head -->
                <thead class="table-light">
                    <tr>
                        <th class="border-0">Invoice ID</th>
                        <th class="border-0">Ordered date</th>
                        <th class="border-0">Total price</th>
                        <th class="border-0">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($invoices as $order)
                    <tr>
                        <td class="align-middle border-top-0 w-0">
                            {{$order->order_id}}
                        </td>
                        <td class="align-middle border-top-0">
                            {{$order->created_at}}
                        </td>
                        <td class="align-middle border-top-0">
                            ${{$order->sum('total_price')}}
                        </td>
                        <td class="align-middle border-top-0">
                            <a href="{{route('home.invoiceDetail',$order->id)}}" target="_blank" class="text-inherit"><i
                                    class="feather-icon icon-eye"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!!$invoices->links()!!}
        </div>
    </div>
</div>