<li class="product-item style-list col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ts-12">
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
        <div class="products-bottom-content">
            <div class="product-thumb">
                <div class="thumb-inner">
                    <a href="#">
                        <img src="{{$value["image-url"]}}" alt="img">
                    </a>
                    <a href="#" class="button quick-wiew-button">Quick View</a>
                </div>
            </div>
            <div class="product-info-left">
                <div class="yith-wcwl-add-to-wishlist">
                    <div class="yith-wcwl-add-button">
                        <a href="#">Add to Wishlist</a>
                    </div>
                </div>
                <h5 class="product-name product_title">
                    <a href="#">{{$value["title"]}}</a>
                </h5>
                <div class="stars-rating">
                    <div class="star-rating">
                        <span class="star-3"></span>
                    </div>
                    <div class="count-star">
                        ({{$value["count-star"]}})
                    </div>
                </div>
                @if ($value["material"])
                    <ul class="product-attributes">
                        <li>
                            Material:
                        </li>
                        @foreach ($value["material"] as $valuet)
                        <li>
                            <a href="#">{{$valuet}}</a>
                        </li>
                        @endforeach
                    </ul>
                @endif
                @if ($value["color"])
                    <ul class="attributes-display">
                        <li>
                            Color:
                        </li>
                        @foreach ($value["color"] as $valuet)
                        <li class="swatch-color">
                            <a href="#">{{$valuet}}</a>
                        </li>
                        @endforeach
                    </ul>
                @endif
                @if ($value["size"])
                    <ul class="attributes-display">
                        <li>
                            Size:
                        </li>
                        @foreach ($value["size"] as $valuet)
                        <li class="swatch-text-label">
                            <a href="#">{{$valuet}}</a>
                        </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="product-info-right">
                <div class="price">
                    <del>
                        {{$value["price"]["old"]}}
                    </del>
                    <ins>
                        {{$value["price"]["new"]}}
                    </ins>
                </div>
                {{-- <div class="product-list-message">
                    <i class="icon fa fa-truck" aria-hidden="true"></i>
                    UK Free Delivery
                </div> --}}
                <form class="cart">
                    <div class="single_variation_wrap">
                        <div class="quantity">
                            <div class="control">
                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                <input type="text" data-step="1" data-min="0" value="1"
                                       title="Qty" class="input-qty qty" size="4">
                                <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                            </div>
                        </div>
                        <button class="single_add_to_cart_button button">Add to cart</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</li>