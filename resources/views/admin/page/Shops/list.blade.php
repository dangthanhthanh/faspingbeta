@extends("admin.layout.list")
@section("page_title","Danh sách cửa hàng")

{{-- title --}}
@section("title")
<li class="breadcrumb-item"><a href="{{route("shop.index")}}">Shops</a></li>
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
    <form  method="GET" action="{{ route('shop.index') }}">
        <button type="submit" class="btn btn-outline-primary form-control rounded">All Shop</button>
    </form>
</div>
@endsection
@if(isset($shops) && $shops != [])
    @section("search_form")
        <div class="input-group" style="max-width: 600px">
            <form  method="GET" action="{{ route('shop.index') }}" class="d-inline-flex">
                <select style="max-width: 100px" class="form-select form-control rounded mx-1" aria-label="Default select example" name="search_with">
                    <option {{ request()->search_with == "name" ? "selected" :""}} value="name">Name</option>
                    <option {{ request()->search_with == "id" ? "selected" :""}} value="id">Id</option>
                    <option {{ request()->search_with == "user" ? "selected" :""}} value="user">Owner</option>
                    <option {{ request()->search_with == "category" ? "selected" :""}} value="category">Category</option>
                    <option {{ request()->search_with == "shop_profile.address.district.city" ? "selected" :""}} value="shop_profile.address.district.city">City</option>
                    <option {{ request()->search_with == "shop_profile.address.district" ? "selected" :""}} value="shop_profile.address.district">District</option>
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
            <th scope="col">Owner</th>
            <th scope="col">Decription</th>
            <th scope="col">Category</th>
            <th scope="col">Phone</th>
            <th scope="col">
                <a href="{{ request()->fullUrlWithQuery(['keyword' => request()->keyword ?? '','sort-by' => 'product_sale','sort-type' => $sortType])}}">
                    Sale
                </a>
            </th>
            <th scope="col">
                <a href="{{ request()->fullUrlWithQuery(['keyword' => request()->keyword ?? '','sort-by' => 'number_product','sort-type' => $sortType])}}">
                    Product
                </a>
            </th>
            <th scope="col">Address</th>
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
            @forelse ($shops as  $shop)
                <tr>
                    <td>
                        <input type="checkbox" 
                        class="checkbox-itemt itemt_{{$shop->id}}"
                        data-id="{{$shop->id}}" 
                        >
                    </td>
                    <td>{{$shop->id}}</td>
                    <td style="min-width: 200px;">{{$shop->name}}</td>
                    <td style="min-width: 200px;">{{$shop->user->user_name}}</td>
                    <td style="min-width: 350px;">
                        {{ \Illuminate\Support\Str::limit($shop->short_decription, $limit = 100, $end = '...') }}
                    </td>
                    <td style="min-width: 200px;">
                        {{$shop->category->name}}
                        {{!isset($shop->category->category->name)?"":"/"}}
                        {{$shop->category->category->name??""}}
                        {{!isset($shop->category->category->category->name)?"":"/"}}
                        {{$shop->category->category->category->name??""}}
                        {{!isset($shop->category->category->category->category->name)?"":"/"}}
                        {{$shop->category->category->category->category->name??""}}
                    </td>
                    <td style="min-width: 100px;">{{$shop->shop_profile->phone_number}}</td>
                    <td>{{$shop->product_sale}}</td>
                    <td>{{$shop->number_product}}</td>
                    <td style="min-width: 350px;">
                        {{$shop->shop_profile->address->address}}
                        -
                        {{$shop->shop_profile->address->district->name}}
                        -
                        {{$shop->shop_profile->address->district->city->name}}
                        </td>
                    <td>
                        <label for="itemt_toggle_{{$shop->id}}" class="toggle-label itemt_{{$shop->id}}">
                            <div class="toggle-slider itemt_{{$shop->id}}">
                                <div class="toggle-slider-before itemt_{{$shop->id}}">
                                </div>
                            </div>
                        </label>
                        <input type="checkbox" id="itemt_toggle_{{$shop->id}}" 
                        {{$shop->active ? "checked" : ""}}
                         class="toggle-checkbox itemt_{{$shop->id}}" 
                         data-url="{{route("shop.setStatus",[$shop->id])}}" 
                         data-id="{{$shop->id}}" 
                         >
                    </td>
                    <td style="min-width: 200px;">{{$shop->created_at}}</td>
                    <td style="min-width: 200px;">
                        <a class="btn btn-primary" href="{{route('shop.show',[$shop->id])}}">Show</a>
                        <a class="btn btn-primary" href="{{route('shop.destroy',[$shop->id])}}">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">Requested not found in Database</td>
                </tr>
            @endforelse
    @endsection
    @section("pagination")
            {{ $shops->links() }}
    @endsection
@else
    @section("thead")
        <div>
            Requested not found in Database
        </div>
    @endsection
@endif
{{--end --}}
