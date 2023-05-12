@extends("admin.layout.admin")
@section("cssstyle")
    @include("client.public.css")
@endsection
@section("content")
<div class="main-content main-content-details single left-sidebar">
    <div class="container">
        <div class="row">
            <div class="content-area content-details col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="site-main">
                    <div class="details-product">
                        <div class="details-thumd">
                            <div class="image-preview-container image-thick-box image_preview_container">
                                <img id="img_zoom" data-zoom-image="{{asset('client/images/details-item-1.jpg')}}" src="{{asset('client/images/details-item-1.jpg')}}" alt="img">
                                <a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </div>
                            <div class="product-preview image-small product_preview">
                                <div id="thumbnails" class="thumbnails_carousel owl-carousel" data-nav="true" data-autoplay="false" data-dots="false" data-loop="false" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":3},"600":{"items":3},"1000":{"items":3}}'>
                                    <a href="#" data-image="{{asset('client/images/details-item-1.jpg')}}" data-zoom-image="{{asset('client/images/details-item-1.jpg')}}" class="active">
                                        <img src="{{asset('client/images/details-item-1.jpg')}}" data-large-image="{{asset('client/images/details-item-1.jpg')}}" alt="img">
                                    </a>
                                    <a href="#" data-image="{{asset('client/images/details-item-2.jpg')}}" data-zoom-image="{{asset('client/images/details-item-2.jpg')}}" class="active">
                                        <img src="{{asset('client/images/details-item-2.jpg')}}" data-large-image="{{asset('client/images/details-item-2.jpg')}}" alt="img">
                                    </a>
                                    <a href="#" data-image="{{asset('client/images/details-item-1.jpg')}}" data-zoom-image="{{asset('client/images/details-item-1.jpg')}}" class="active">
                                        <img src="{{asset('client/images/details-item-1.jpg')}}" data-large-image="{{asset('client/images/details-item-1.jpg')}}" alt="img">
                                    </a>
                                    <a href="#" data-image="{{asset('client/images/details-item-2.jpg')}}" data-zoom-image="{{asset('client/images/details-item-2.jpg')}}">
                                        <img src="{{asset('client/images/details-item-2.jpg')}}" data-large-image="{{asset('client/images/details-item-2.jpg')}}" alt="img">
                                    </a>
                                    <a href="#" data-image="{{asset('client/images/details-item-1.jpg')}}" data-zoom-image="{{asset('client/images/details-item-1.jpg')}}">
                                        <img src="{{asset('client/images/details-item-1.jpg')}}" data-large-image="{{asset('client/images/details-item-1.jpg')}}" alt="img">
                                    </a>
                                    <a href="#" data-image="{{asset('client/images/details-item-1.jpg')}}" data-zoom-image="{{asset('client/images/details-item-1.jpg')}}">
                                        <img src="{{asset('client/images/details-item-1.jpg')}}" data-large-image="{{asset('client/images/details-item-1.jpg')}}" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="details-infor">
                            <h1 class="product-title">
                                {{$product->name}}
                            </h1>
                            <div class="stars-rating">
                                <div class="star-rating">
                                    <span class="star-5"></span>
                                </div>
                                <div class="count-star">
                                    (7)
                                </div>
                            </div>
                            <div class="availability">
                                availability:
                                <a href="#">in Stock</a>
                            </div>
                            <div class="price">
                                <span>$45</span>
                            </div>
                            <div class="product-details-description">
                                <ul>
                                    <li>Vestibulum tortor quam</li>
                                    <li>Imported</li>
                                    <li>Art.No. 06-7680</li>
                                </ul>
                            </div>
                            <div class="variations">
                                <div class="attribute attribute_color">
                                    <div class="color-text text-attribute">
                                        Color:
                                    </div>
                                    <div class="list-color list-item">
                                        <a href="#" class="color1"></a>
                                        <a href="#" class="color2"></a>
                                        <a href="#" class="color3 active"></a>
                                        <a href="#" class="color4"></a>
                                    </div>
                                </div>
                                <div class="attribute attribute_size">
                                    <div class="size-text text-attribute">
                                        Size:
                                    </div>
                                    <div class="list-size list-item">
                                        <a href="#" class="">xs</a>
                                        <a href="#" class="">s</a>
                                        <a href="#" class="active">m</a>
                                        <a href="#" class="">l</a>
                                        <a href="#" class="">xl</a>
                                        <a href="#" class="">xxl</a>
                                    </div>
                                </div>
                            </div>
                            <div class="group-button">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <div class="yith-wcwl-add-button">
                                        <a href="#">Add to Wishlist</a>
                                    </div>
                                </div>
                                <div class="size-chart-wrapp">
                                    <div class="btn-size-chart">
                                        <a id="size_chart" href="{{asset('client/images/details-item-1.jpg')}}" class="fancybox">View Size Chart</a>
                                    </div>
                                </div>
                                <div class="quantity-add-to-cart">
                                    <div class="quantity">
                                        <div class="control">
                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                            <input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4">
                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                        </div>
                                    </div>
                                    <button class="single_add_to_cart_button button">Add to cart</button>
                                </div>
                            </div>
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
                                <p>
                                    Quisque quis ipsum venenatis, fermentum ante volutpat, ornare enim. 
                                    Phasellus molestie risus non aliquet cursus. 
                                    Integer
                                    vestibulum mi lorem, id hendrerit ante lobortis non. 
                                    Nunc ante ante, lobortis non pretium non, vulputate vel nisi. 
                                    Maecenas dolor elit, fringilla nec turpis ac, auctor vulputate nulla. Phasellus sed laoreet velit.
                                </p>
                                <p>
                                    Proin fringilla urna vel mattis euismod.
                                     Etiam sodales, massa non tincidunt iaculis, mauris libero scelerisque justo, ut rutrum lectus urna sit amet quam. 
                                     Nulla maximus vestibulum mi vitae accumsan.
                                </p>
                            </div>
                            <div id="information" class="tab-panel">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Size</td>
                                        <td> XS / S / M / L </td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>White/ Black/ Teal/ Brown</td>
                                    </tr>
                                    <tr>
                                        <td>Properties</td>
                                        <td>Colorful Dress</td>
                                    </tr>
                                </table>
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