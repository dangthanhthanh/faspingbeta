@extends("admin.layout.list")
@section("page_title","Danh sách sản phẩm")
{{-- title --}}
@section("title")
<li class="breadcrumb-item"><a href="{{route("product.index")}}">Products</a></li>
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
    <form  method="GET" action="{{ route('product.index') }}">
        <button type="submit" class="btn btn-outline-primary form-control rounded">All product</button>
    </form>
</div>
@endsection
@if(isset($products) && $products != [])
    @section("search_form")
        <div class="input-group" style="max-width: 600px">
            <form  method="GET" action="{{ route('product.index') }}" class="d-inline-flex">
                <select style="max-width: 100px" class="form-select form-control rounded mx-1" aria-label="Default select example" name="search_with">
                    <option {{ request()->search_with == "name" ? "selected" :""}} value="name">Name</option>
                    <option {{ request()->search_with == "id" ? "selected" :""}} value="id">Id</option>
                    <option {{ request()->search_with == "shop" ? "selected" :""}} value="shop">Shop</option>
                    <option {{ request()->search_with == "category" ? "selected" :""}} value="category">Category</option>
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
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">
                <a href="{{ request()->fullUrlWithQuery(['keyword' => request()->keyword ?? '','sort-by' => 'sale','sort-type' => $sortType])}}">
                    Sale
                </a>
            </th>
            <th scope="col">
                <a href="{{ request()->fullUrlWithQuery(['keyword' => request()->keyword ?? '','sort-by' => 'storage','sort-type' => $sortType])}}">
                    Storage
                </a>
            </th>
            <th scope="col">
                <a href="{{ request()->fullUrlWithQuery(['keyword' => request()->keyword ?? '','sort-by' => 'price','sort-type' => $sortType])}}">
                    Price
                </a>
            </th>
            <th scope="col">
                <a href="{{ request()->fullUrlWithQuery(['keyword' => request()->keyword ?? '','sort-by' => 'discount_price','sort-type' => $sortType])}}">
                    Discount
                </a>
            </th>
            <th scope="col">Category</th>
            <th scope="col">Shop</th>
            <th scope="col">
                <a href="{{ request()->fullUrlWithQuery(['keyword' => request()->keyword ?? '','sort-by' => 'active','sort-type' => $sortType])}}">
                    Active
                </a>
            </th>
            <th scope="col">Create</th>
            <th scope="col">Handle</th>
        </tr>
    @endsection
    @section("tbody")
            @forelse ($products as  $product)
                <tr>
                    <td>
                        <input type="checkbox" 
                        class="checkbox-itemt itemt_{{$product->id}}"
                        data-id="{{$product->id}}" >
                    </td>
                    <td>{{$product->id}}</td>
                    <td style="min-width: 200px;">{{$product->name}}</td>
                    <td>
                        <img src="{{$product->image->url}}" alt="" height="80px">
                    </td>
                    <td>{{$product->sale}}</td>
                    <td>{{$product->storage}}</td>
                    <td>{{$product->price*1000}}</td>
                    <td style="min-width: 100px;{{$product->discount_price ? "" : "background: #aaa5b1"}}">
                        {{$product->discount_price ? $product->discount_price*1000 : ""}}
                    </td>
                    <td style="min-width: 400px;">
                        {{$product->category->name}}
                        {{!isset($product->category->category->name)?"":"/"}}
                        {{$product->category->category->name??""}}
                        {{!isset($product->category->category->category->name)?"":"/"}}
                        {{$product->category->category->category->name??""}}
                        {{!isset($product->category->category->category->category->name)?"":"/"}}
                        {{$product->category->category->category->category->name??""}}
                    </td>
                    <td style="min-width: 200px;">
                        <a href="{{route('shop.show',['shop' => $product->shop_id])}}">{{$product->shop->name}}</a>
                    </td>
                    <td>
                        <label for="itemt_toggle_{{$product->id}}" class="toggle-label itemt_{{$product->id}}">
                            <div class="toggle-slider itemt_{{$product->id}}">
                                <div class="toggle-slider-before itemt_{{$product->id}}">
                                </div>
                            </div>
                        </label>
                        <input type="checkbox" id="itemt_toggle_{{$product->id}}" 
                        {{$product->active ? "checked" : ""}}
                         class="toggle-checkbox itemt_{{$product->id}}" 
                         data-url="{{route("product.setStatus",[$product->id])}}" 
                         data-id="{{$product->id}}" 
                         >
                    </td>
                    <td style="min-width: 200px;">{{$product->created_at}}</td>
                    <td style="min-width: 200px;">
                        <a class="btn btn-primary" href="{{route('product.show',[$product->id])}}">Show</a>
                        <a class="btn btn-primary" href="{{route('product.destroy',[$product->id])}}">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">Requested not found in Database</td>
                </tr>
            @endforelse
    @endsection
    @section("pagination")
            {{ $products->links() }}
    @endsection
@else
    @section("thead")
        <div>
            Requested not found in Database
        </div>
    @endsection
@endif
{{--end --}}
