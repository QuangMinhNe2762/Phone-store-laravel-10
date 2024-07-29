<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>View products</h5>
        <div style="display: flex; align-items: center; gap: 10px;">
            <select wire:model='trending' wire:change='searchTrending($event.target.value)' class="form-select"
                style="width: 150px;" id="parent_id" aria-label="Default select example">
                <option value="-1">Trending</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            <select wire:model='status' wire:change='searchStatus($event.target.value)' class="form-select"
                style="width: 150px;" id="parent_id" aria-label="Default select example">
                <option value="0">Visible</option>
                <option value="1">Hidden</option>
            </select>
            <select wire:model='brand_id' wire:change='selectBrandID($event.target.value)' class="form-select"
                style="width: 150px;" id="brand_id" aria-label="Default select example">
                @foreach ($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
                <option value="-1">Show all</option>
            </select>
            <select wire:model='category_id' wire:change='searchCategoryID($event.target.value)' class="form-select"
                style="width: 150px;" id="category_id" aria-label="Default select example">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                <option value="-1">Show all</option>
            </select>
            <input class="form-control me-2" type="search" wire:model='search'
                placeholder="id, name,<>quantity,<>selling price" aria-label="Search">
            <button class="btn btn-outline-success" wire:click='searctext' type="submit">Search</button>
        </div>
    </div>
    @include('Admin.alert')
    @include('livewire.admin.product.modal-create')
    @include('livewire.admin.product.modal-edit')
    <div class="card-body">
        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary"
            style="color: white">Create product</button>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Name product
                    </th>
                    <th>
                        Category
                    </th>
                    <th>
                        Brand
                    </th>
                    <th>
                        Original_price
                    </th>
                    <th>
                        Selling_price
                    </th>
                    <th>
                        Quantity
                    </th>
                    <th>
                        Trending
                    </th>
                    <th>
                        Status
                    </th>
                    <th>
                        Images
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($products as $product)
                <tr>
                    <td>
                        <span class="fw-medium">{{ $product->id }}</span>
                    </td>
                    <td><a href="{{route('products.detail',$product->id)}}" target="_blank">{{ $product->name }}</a>
                    </td>
                    <td>
                        <span class="fw-medium">{{ $product->category->name }}</span>
                    </td>
                    <td>
                        <span class="fw-medium">{{ $product->brand->name }}</span>
                    </td>
                    <td>
                        <span class="fw-medium">{{ $product->original_price }}</span>
                    </td>
                    <td>
                        <span class="fw-medium">{{ $product->selling_price }}</span>
                    </td>
                    <td>
                        <span class="fw-medium">{{ $product->quantity }}</span>
                    </td>
                    <td>
                        <span class="badge {{$product->trending == 1?'bg-label-info':'bg-label-warning'}}
                        me-1">{{$product->trending == 1?'Yes':'No'}}</span>
                    </td>
                    <td><span
                            class="badge {{$product->status==1?'bg-label-danger':'bg-label-success'}} me-1">{{$product->status==1?'Hidden':'Visible'}}</span>
                    </td>
                    <td>
                        <span class="fw-medium"><a href="{{route('products.ViewImageProduct',$product->id)}}"
                                target="_blank">All
                                image
                                product</a></span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a type="button" wire:click='editProduct({{$product->id}})' class="dropdown-product"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop_edit"><i
                                        class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a type="button" wire:click='deleteProduct({{$product->id}})'
                                    class="dropdown-product"><i class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @empty

                @endforelse

            </tbody>
        </table>
        {{ $products->links() }}
    </div>
</div>