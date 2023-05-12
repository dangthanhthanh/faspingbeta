@php
    // $orders=[];
@endphp
@extends("admin.layout.list")
{{-- title --}}
@section("title")
<li class="breadcrumb-item active">
    Orders
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
    <h4>Orders</h4>
    <a href="{{route('order.create')}}" class="btn btn-outline-primary mx-5"> Create New Order</a>
</div>
@endsection
@if(isset($orders) && $orders != [])
    @section("thead")
        <tr>
            <th scope="col">Id</th>
            <th scope="col">product</th>
            <th scope="col">Shop</th>
            <th scope="col">User</th>
            <th scope="col">Status</th>
            <th scope="col">Create</th>
            <th scope="col">Handle</th>
        </tr>
    @endsection
    @section("tbody")
            @foreach ($orders as $order)
                <tr>
                    <td>{{$order->id}}</th>
                    <td>{{$order->product_id->name}}</td>
                    <td>{{$order->Shop_id->name}}</td>
                    <td>{{$order->user_id->name}}</td>
                    <td>{{$order->status}}</td>
                    <td>{{$order->create_at}}</td>
                    <td>
                        <a class="btn-primary" href="{{route('order.show',[$value->id])}}">Show</a>
                        <a class="btn-primary" href="{{route('order.destroy',[$value->id])}}">Delete</a>
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