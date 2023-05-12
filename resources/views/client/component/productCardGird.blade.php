<li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6 col-ts-12 style-1">
    <div class="product-inner equal-element">
        @if ($value["new"])
        <div class="product-top">
            <div class="flash">
                <span class="onnew">
                    <span class="text">
                        new
                    </span>
                </span>
            </div>
        </div>
        @endif
        <div class="product-thumb">
            <div class="thumb-inner">
                <a href="#">
                    <img src="{{$value["image-url"]}}" alt="img">
                </a>
                <div class="thumb-group">
                    <div class="yith-wcwl-add-to-wishlist">
                        <div class="yith-wcwl-add-button">
                            <a href="#">Add to Wishlist</a>
                        </div>
                    </div>
                    <button class="button quick-wiew-button">Quick View</button>
                    <div class="loop-form-add-to-cart">
                        <button class="single_add_to_cart_button button">Add to cart</button>
                    </div>
                </div>
            </div>
                @if ($value["product-countdown"]!==[])
                    <div class="product-count-down">
                    <div class="tanajil-countdown" data-y="{{$value["product-countdown"]["y"]}}" data-m="{{$value["product-countdown"]["m"]}}" data-w="{{$value["product-countdown"]["w"]}}" data-d="{{$value["product-countdown"]["d"]}}"
                    data-h="{{$value["product-countdown"]["h"]}}" data-i="{{$value["product-countdown"]["i"]}}" data-s="{{$value["product-countdown"]["s"]}}"></div>
                    </div>
                @endif
        </div>
        <div class="product-info">
            <h5 class="product-name product_title">
                <a href="#">{{$value["title"]}}</a>
            </h5>
            <div class="group-info">
                <div class="stars-rating">
                    <div class="star-rating">
                        <span class="star-3"></span>
                    </div>
                    <div class="count-star">
                        ({{$value["count-star"]}})
                    </div>
                </div>
                <div class="price">
                    <del>
                        {{$value["price"]["old"]}}
                    </del>
                    <ins>
                        {{$value["price"]["new"]}}
                    </ins>
                </div>
            </div>
        </div>
    </div>
</li>