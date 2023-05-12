@php
    // $products=[];
@endphp
@extends("admin.layout.list")
{{-- title --}}
@section("title")
<li class="breadcrumb-item active">
    Products
</li>
<li class="breadcrumb-item active">
    List
</li>
@endsection
{{-- end title --}}
{{-- messenger --}}
@if (session("message"))
    @section("messeger")
        <div class="alert alert-success">
                {{session("message")}}
        </div>
    @endsection
@endif
{{-- end messenger --}}

@section("data_title")
<div class="d-flex align-items-center" style="height: 50px ">
    <h4>Products</h4>
    <a href="{{route('product.create')}}" class="btn btn-outline-primary mx-5"> Create New Product</a>
</div>
@endsection
@if(isset($products) && $products != [])
    @section("thead")
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Product Category</th>
            <th scope="col">Price</th>
            <th scope="col">Shop</th>
            <th scope="col">Status</th>
            <th scope="col">Create</th>
            <th scope="col">Handle</th>
        </tr>
    @endsection
    @section("tbody")
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category_id->name}}</td>
                    <td>
                        ${{$product->price_id->price}}->${{$product->price_id->deal_price}}
                    </td>
                    <td>{{$product->Shop_id->name}}</td>
                    <td>{{$product->status}}</td>
                    <td>{{$product->create_at}}</td>
                    <td>
                        <a class="btn-primary" href="{{route('product.show',[$value->id])}}">Show</a>
                        <a class="btn-primary" href="{{route('product.destroy',[$value->id])}}">Delete</a>
                    </td>
                </tr>
            @endforeach
    @endsection
@else
    @section("thead")
        <div>
            Requested not found in Database
        </div>
    @endsection
@endif
{{--end //test --}}