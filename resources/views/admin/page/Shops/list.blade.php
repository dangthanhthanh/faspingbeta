@php
    $shops=[];
@endphp
@extends("admin.layout.list")
{{-- title --}}
@section("title")
<li class="breadcrumb-item active">
    Shops
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
    <h4>Shops</h4>
    <a href="{{route('shop.create')}}" class="btn btn-outline-primary mx-5"> Create New Shop</a>
</div>
@endsection
@if(isset($shops) && $shops != [])
    @section("thead")
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">User</th>
            <th scope="col">Rate</th>
            <th scope="col">Status</th>
            <th scope="col">Create</th>
            <th scope="col">Handle</th>
        </tr>
    @endsection
    @section("tbody")
            @foreach ($shops as $shop)
                <tr>
                    <td>{{$shop->id}}</th>
                    <td>{{$shop->name}}</td>
                    <td>{{$shop->category_id->name}}</td>
                    <td>{{$shop->user_id->name}}</td>
                    <td>{{$shop->rate}}</td>
                    <td>{{$shop->status}}</td>
                    <td>{{$shop->create_at}}</td>
                    <td>
                        <a class="btn-primary" href="{{route('shop.show',[$value->id])}}">Show</a>
                        <a class="btn-primary" href="{{route('shop.destroy',[$value->id])}}">Delete</a>
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