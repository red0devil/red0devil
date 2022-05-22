@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Product Detail Info</h4>
                    <table  class="table table-bordered dt-responsive nowrap" >
                        <tr>
                            <th>Product ID</th>
                            <td>{{$product->id}}</td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td>{{$product->name}}</td>
                        </tr>
                        <tr>
                            <th>Product Code</th>
                            <td>{{$product->code}}</td>
                        </tr>
                        <tr>
                            <th>Product Category</th>
                            <td>{{$product->category->name}}</td>
                        </tr>
                        <tr>
                            <th>Product Sub Category</th>
                            <td>{{$product->subCategory->name}}</td>
                        </tr>
                        <tr>
                            <th>Product Brand</th>
                            <td>{{$product->brand->name}}</td>
                        </tr>
                        <tr>
                            <th>Product Unit</th>
                            <td>{{$product->unit->name}}</td>
                        </tr>
                        <tr>
                            <th>Product Regullar Price</th>
                            <td>{{$product->regular_price}}</td>
                        </tr>
                        <tr>
                            <th>Product Selling Price</th>
                            <td>{{$product->selling_price}}</td>
                        </tr>
                        <tr>
                            <th>Product Stock Ammount</th>
                            <td>{{$product->stock_ammount}}</td>
                        </tr>
                        <tr>
                            <th>Product Short Description</th>
                            <td>{{$product->short_descriptioon}}</td>
                        </tr>
                        <tr>
                            <th>Product Long Description</th>
                            <td>{!! $product->long_description !!}</td>
                        </tr>
                        <tr>
                            <th>Product Main Image</th>
                            <td>
                                <img src="{{asset($product->image)}}" alt="" height="150" width="200"/>
                            </td>
                        </tr>
                        <tr>
                            <th>Product Other Image</th>
                            <td>
                                @foreach($product->otherImages as $otherImage)
                                <img src="{{asset($otherImage->image)}}" alt="" height="150" width="200"/>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Product Status</th>
                            <td>{{$product->status == 1 ? 'Published' : 'unpublished'}}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
