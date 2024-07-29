<div>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>View Invoices</h5>
            <div style="display: flex; align-items: center; gap: 10px;">
                <input class="form-control me-2" type="search" wire:model='search' wire:keypress.enter='searchText'
                    placeholder="id, user name, ordered Date, email, phone" aria-label="Search" style="width: 300px;">
                <button class="btn btn-outline-success" wire:click='searchText' type="submit">Search</button>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <!-- border color table -->
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col">Invoice ID</th>
                        <th scope="col">User name</th>
                        <th scope="col">Ordered Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($invoices as $invoice)
                    <tr>
                        <th scope="row">{{$invoice->id}}</th>
                        <td>{{$invoice->Name}}</td>
                        <td>{{$invoice->created_at}}</td>
                        <td>
                            <a type="button" href="{{route('invoice.detail',$invoice->id)}}" target="_blank"
                                class="btn btn-success" style="color: white">View
                                detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $invoices->links() }}
        </div>
    </div>
</div>