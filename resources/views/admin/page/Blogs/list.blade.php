@php
    // $blogs=[];
@endphp
@extends("admin.layout.list")
{{-- title --}}
@section("title")
<li class="breadcrumb-item active">
    Blogs
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
    <h4>Blogs</h4>
    <a href="{{route('blog.create')}}" class="btn btn-outline-primary mx-5"> Create New Blog</a>
</div>
@endsection
@if(isset($blogs) && $blogs != [])
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
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{$blog->id}}</th>
                    <td>{{$blog->name}}</td>
                    <td>{{$blog->Shop_id->name}}</td>
                    <td>{{$blog->status}}</td>
                    <td>{{$blog->create_at}}</td>
                    <td>
                        <a class="btn-primary" href="{{route('blog.show',[$value->id])}}">Show</a>
                        <a class="btn-primary" href="{{route('blog.destroy',[$value->id])}}">Delete</a>
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