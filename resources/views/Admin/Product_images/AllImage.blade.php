@extends('Admin.Layouts.adminApp')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title" style="margin-bottom:0px; padding-top: 50px">View Image by
                product: <span class="text-success">{{ $imagesProduct[0]->product->name }}</span></h1>
            @include('Admin.alert')
            <div class="table-responsive pt-3">

                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Original Image
                            </th>
                            <th>
                                Delete Image
                            </th>
                            <th>
                                Change Image
                            </th>
                            <th>
                                New Image
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($imagesProduct as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                <img src="{{ '/'.$item->image }}" style="width: 100px; height: 100px;">
                            </td>
                            <td>
                                <a href="{{ route('delete_image', [$item->id]) }}"><i class="bx bx-trash"
                                        style="font-size: 30px; padding-left: 20px"></i></a>
                            </td>

                            <td>
                                <form method="POST" action="{{ route('update_image', [$item->id]) }}"
                                    enctype="multipart/form-data">
                                    {{-- enctype="multipart/form-data" thiếu cái dòng này là không hiển thị đc
                                    file--}}
                                    @csrf
                                    <input type="file" name="image" id="image_product{{ $item->id }}"
                                        onchange="visible_image_product(event)" accept="image/*">
                                    <button class="btn btn-primary" id="button_update_product{{ $item->id }}"
                                        type="submit" style="visibility: hidden;">Update Image</button>
                                </form>
                            </td>
                            <td id="image_product_blank{{ $item->id }}">

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>

        </div>
        {{-- {!! $productImage->links() !!} --}}
    </div>
</div>
@endsection
