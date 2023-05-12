@php
    // $users=[];
@endphp
@extends("admin.layout.list")
{{-- title --}}
@section("title")
<li class="breadcrumb-item active">
    Users
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
    <h4>Users</h4>
    <a href="{{route('user.create')}}" class="btn btn-outline-primary mx-5"> Create New Admin Account</a>
</div>
@endsection
@if(isset($users) && $users != [])
    @section("thead")
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Author-Shop</th>
            <th scope="col">Status</th>
            <th scope="col">Create</th>
            <th scope="col">Handle</th>
        </tr>
    @endsection
    @section("tbody")
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->Shop_id->name}}</td>
                    <td>{{$user->status}}</td>
                    <td>{{$user->create_at}}</td>
                    <td>
                        <a class="btn-primary" href="{{route('user.show',[$value->id])}}">Show</a>
                        <a class="btn-primary" href="{{route('user.destroy',[$value->id])}}">Delete</a>
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