@extends("admin.layout.list")
@section("page_title","Danh sách blog")

{{-- title --}}
@section("title")
<li class="breadcrumb-item"><a href="{{route("blog.index")}}">Blogs</a></li>
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
<div class="d-flex align-items-center" style="max-width: 600px;">
    <form  method="GET" action="{{ route('blog.index') }}">
        <button type="submit" class="btn btn-outline-primary form-control rounded">All Blog</button>
    </form>
</div>
@endsection
@if(isset($blogs) && $blogs != [])
    @section("search_form")
        <div class="input-group" style="max-width: 600px">
            <form  method="GET" action="{{ route('blog.index') }}" class="d-inline-flex">
                <select style="max-width: 100px" class="form-select form-control rounded mx-1" aria-label="Default select example" name="search_with">
                    <option {{ request()->search_with == "id" ? "selected" :""}} value="id">Id</option>
                    <option {{ request()->search_with == "title" ? "selected" :""}} value="title">Title</option>
                    <option {{ request()->search_with == "category" ? "selected" :""}} value="category">Category</option>
                    <option {{ request()->search_with == "user" ? "selected" :""}} value="user">Author</option>
                    <option {{ request()->search_with == "created_at" ? "selected" :""}} value="created_at">Created</option>
                </select>
                <input type="search" class="form-control rounded mx-1" name="search" placeholder="search" aria-label="Search" value="{{ request()->search ?? '' }}"/>
                <button type="submit" style="max-width: 100px" class="btn btn-outline-primary form-control rounded mx-1">search</button>
            </form>
        </div>
    @endsection
    @section("thead")
        <tr class="table-active">
            <th><input type="checkbox" class="checkbox-all"></th>
            <th scope="col">
                <a  
                href="{{ request()->fullUrlWithQuery(['keyword' => request()->keyword ?? '','sort-by' => 'id','sort-type' => $sortType])}}">
                    ID
                </a>
            </th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">
                <a  
                href="{{ request()->fullUrlWithQuery(['keyword' => request()->keyword ?? '','sort-by' => 'active','sort-type' => $sortType])}}">
                    Active
                </a>
            </th>
            <th scope="col">Create</th>
            <th scope="col">Handle</th>
        </tr>
    @endsection
    @section("tbody")
            @forelse ($blogs as  $blog)
                <tr>
                    <td>
                        <input type="checkbox" 
                        class="checkbox-itemt itemt_{{$blog->id}}"
                        data-id="{{$blog->id}}" 
                        >
                    </td>
                    <td>{{$blog->id}}</td>
                    <td style="min-width: 200px;">{{$blog->title}}</td>
                    <td style="min-width: 200px;">{{$blog->user->user_name}}</td>
                    <td>
                        <img src="{{$blog->image->url}}" alt="" height="80px">
                    </td>
                    <td style="min-width: 350px;">
                        {{ \Illuminate\Support\Str::limit($blog->description, $limit = 100, $end = '...') }}
                    </td>
                    <td style="min-width: 200px;">
                        {{$blog->category->name}}
                        {{!isset($blog->category->category->name)?"":"/"}}
                        {{$blog->category->category->name??""}}
                        {{!isset($blog->category->category->category->name)?"":"/"}}
                        {{$blog->category->category->category->name??""}}
                        {{!isset($blog->category->category->category->category->name)?"":"/"}}
                        {{$blog->category->category->category->category->name??""}}
                    </td>
                    <td>
                        <label for="itemt_toggle_{{$blog->id}}" class="toggle-label itemt_{{$blog->id}}">
                            <div class="toggle-slider itemt_{{$blog->id}}">
                                <div class="toggle-slider-before itemt_{{$blog->id}}">
                                </div>
                            </div>
                        </label>
                        <input type="checkbox" id="itemt_toggle_{{$blog->id}}" 
                        {{$blog->active ? "checked" : ""}}
                         class="toggle-checkbox itemt_{{$blog->id}}" 
                         data-url="{{route("blog.setStatus",[$blog->id])}}" 
                         data-id="{{$blog->id}}" 
                         >
                    </td>
                    <td style="min-width: 200px;">{{$blog->created_at}}</td>
                    <td style="min-width: 200px;" >
                        <a class="btn btn-primary" href="{{route('blog.show',[$blog->id])}}">Show</a>
                        <a class="btn btn-primary" href="{{route('blog.destroy',[$blog->id])}}">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">Requested not found in Database</td>
                </tr>
            @endforelse
    @endsection
    @section("pagination")
            {{ $blogs->links() }}
    @endsection
@else
    @section("thead")
        <div>
            Requested not found in Database
        </div>
    @endsection
@endif
{{--end --}}
