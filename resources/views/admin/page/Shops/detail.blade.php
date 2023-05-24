@extends("admin.layout.admin")
@section("cssstyle")
    @include("client.public.css")
@endsection
@section("page_title","Chi tiết cửa hàng: $shop->name")
{{-- title --}}
@section("title")
<li class="breadcrumb-item"><a href="{{route("shop.index")}}">Shops</a></li>
<li class="breadcrumb-item active">
    Detail
</li>
<li class="breadcrumb-item active">
    {{$shop->name}}
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

@section("content")
<div class="main-content main-content-details single left-sidebar">
    <div class="container">
        <div class="row">
            <div class="content-area content-details col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">
                    <div class="details-product">
                        <div class="details-thumd">
                            <div class="image-preview-container image-thick-box image_preview_container">
                                <img src="{{$shop->background->url}}" alt="img">
                            </div>
                        </div>
                        <div class="details-infor">
                            <h1 class="product-title">
                                {{$shop->name}}
                            </h1>
                            <div class="stars-rating">
                                <div class="star-rating">
                                    <span class="star-4"></span>
                                </div>
                                <div class="count-star">
                                    (7)
                                </div>
                            </div>
                            <div class="tab-details-product">
                                <ul class="tab-link">
                                    <li class="active">
                                        <a data-toggle="tab" aria-expanded="true" href="#product-descriptions">Descriptions </a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" aria-expanded="true" href="#information">Information </a>
                                    </li>           
                                </ul>
                                <div class="tab-container">
                                    <div id="product-descriptions" class="tab-panel active">
                                        {{$shop->short_decription}}
                                    </div>
                                    <div id="information" class="tab-panel">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Owner</th>
                                                    <td>{{$shop->user->user_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Status</th>
                                                    <td>{{$shop->active?"active":"unactive"}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Rate</th>
                                                    <td>312/3123</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Category</th>
                                                    <td>
                                                        {{$shop->category->name}}
                                                        {{!isset($shop->category->category->name)?"":"/"}}
                                                        {{$shop->category->category->name??""}}
                                                        {{!isset($shop->category->category->category->name)?"":"/"}}
                                                        {{$shop->category->category->category->name??""}}
                                                        {{!isset($shop->category->category->category->category->name)?"":"/"}}
                                                        {{$shop->category->category->category->category->name??""}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Address</th>
                                                    <td>
                                                        {{$shop->shop_profile->address->address}}
                                                        -
                                                        {{$shop->shop_profile->address->district->name}}
                                                        -
                                                        {{$shop->shop_profile->address->district->city->name}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Create</th>
                                                    <td>{{$shop->created_at}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Phone</th>
                                                    <td>{{$shop->shop_profile->phone_number}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Time Reps</th>
                                                    <td>{{$shop->shop_profile->time_reps}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Online Time</th>
                                                    <td>{{$shop->shop_profile->online_last_time}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Sale</th>
                                                    <td>{{$shop->product_sale}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Product</th>
                                                    <td>{{$shop->number_product}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Revenue_month</th>
                                                    <td>0000000000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Revenue_Year</th>
                                                    <td>00000000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Revenue_Total</th>
                                                    <td>000000000</td>
                                                </tr>
                                              </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="group-button">
                                <div class="quantity-add-to-car">
                                    <a href="{{route("shop.setStatus",[$shop->id,$shop->active])}}" class="button btn-{{$shop->active?'danger':'primary'}}">
                                        <span>
                                            {{$shop->active?"Pause":"Active"}}
                                        </span>
                                    </a> 
                                    <a href="{{route("shop.destroy",$shop->id)}}" class="button btn-danger">Destroy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section("javascript")
    @include("client.public.javacript")
@endsection