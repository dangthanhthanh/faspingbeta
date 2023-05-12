{{-- public\client\js\frontend-plugin.js 472 --}}




{{-- <div class="kt-popup-quickview ">
    <div class="details-thumb">
      <div class="slider-product slider-for">
        @foreach (prodcut["image"] as value)<div class="details-item"><img src="{{value}}" alt="img"></div>@endforeach
      </div>
    </div>
    <div class="details-infor">
      <h1 class="product-title">Eclipse Pendant Light</h1>
      <div class="stars-rating">
        <div class="star-rating">
          <span class="star-5"></span>
        </div>
        <div class="count-star">(7)</div>
      </div>
      <div class="availability">availability:<a href="#">in Stock</a></div>
      <div class="price"><span>€45</span></div>
      <div class="product-details-description">
        <ul>
          <li>Vestibulum tortor quam</li>
          <li>Imported</li>
          <li>Art.No. 06-7680</li>
        </ul>
      </div>
      <div class="variations">
        <div class="attribute attribute_color">
          <div class="color-text text-attribute">Color:<span>White/</span><span>Black/</span><span>Teal/</span><span>Brown</span></div>
          <div class="list-color list-item">
            <a href="#" class="color1"></a>
            <a href="#" class="color2"></a>
            <a href="#" class="color3 active"></a>
            <a href="#" class="color4"></a>
          </div>
        </div>
        <div class="attribute attribute_size">
          <div class="size-text text-attribute">Size:</div>
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
                <a id="size_chart" href="assets/images/size-chart.jpg" class="fancybox"  target="_blank">View Size Chart</a>
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
</div> --}}
@php
    $product=[
        "name"=>"cuccut",
        "image"=>["http://127.0.0.1:8000/client/images/product-item-2.jpg","http://127.0.0.1:8000/client/images/product-item-1.jpg","http://127.0.0.1:8000/client/images/product-item-2.jpg","http://127.0.0.1:8000/client/images/product-item-1.jpg","http://127.0.0.1:8000/client/images/product-item-1.jpg","http://127.0.0.1:8000/client/images/product-item-1.jpg","http://127.0.0.1:8000/client/images/product-item-1.jpg","http://127.0.0.1:8000/client/images/product-item-1.jpg","http://127.0.0.1:8000/client/images/product-item-1.jpg","http://127.0.0.1:8000/client/images/product-item-1.jpg","http://127.0.0.1:8000/client/images/product-item-1.jpg","http://127.0.0.1:8000/client/images/product-item-1.jpg","http://127.0.0.1:8000/client/images/product-item-1.jpg","http://127.0.0.1:8000/client/images/product-item-1.jpg"],
        ]
@endphp
<script>
    function kt_get_scrollbar_width() {
        var $inner = jQuery('<div style="width: 100%; height:200px;">test</div>'),
            $outer = jQuery('<div style="width:200px;height:150px; position: absolute; top: 0; left: 0; visibility: hidden; overflow:hidden;"></div>').append($inner),
            inner = $inner[0],
            outer = $outer[0];
        jQuery('body').append(outer);
        var width1 = parseFloat(inner.offsetWidth);
        $outer.css('overflow', 'scroll');
        var width2 = parseFloat(outer.clientWidth);
        $outer.remove();
        return (width1 - width2);
    }
    function quickview_popup() {
        var window_size = parseFloat(jQuery('body').innerWidth());
        window_size += kt_get_scrollbar_width();
        if (window_size > 992) {
            $(document).on('click', '.quick-wiew-button', function () {
                $.magnificPopup.open({
                    items: {
                        src: '<div class="kt-popup-quickview "><div class="details-thumb"><div class="slider-product slider-for">@foreach ($product["image"] as $value)<div class="details-item"><img src="{{$value}}" alt="img"></div>@endforeach</div><div class="slider-product-button slider-nav nav-center">@foreach ($product["image"] as $value)<div class="details-item"><img src="{{$value}}" alt="img"></div>@endforeach</div></div><div class="details-infor"><h1 class="product-title">{{$product["name"]}}</h1><div class="stars-rating"><div class="star-rating"><span class="star-5"></span></div><div class="count-star">(7)</div></div><div class="availability">availability:<a href="#">in Stock</a></div><div class="price"><span>€45</span></div><div class="product-details-description"><ul><li>Vestibulum tortor quam</li><li>Imported</li><li>Art.No. 06-7680</li></ul></div><div class="variations"><div class="attribute attribute_color"><div class="color-text text-attribute">Color:<span>White/</span><span>Black/</span><span>Teal/</span><span>Brown</span></div><div class="list-color list-item"><a href="#" class="color1"></a><a href="#" class="color2"></a><a href="#" class="color3 active"></a><a href="#" class="color4"></a></div></div><div class="attribute attribute_size"><div class="size-text text-attribute">Size:</div><div class="list-size list-item"><a href="#" class="">xs</a><a href="#" class="">s</a><a href="#" class="active">m</a><a href="#" class="">l</a><a href="#" class="">xl</a><a href="#" class="">xxl</a></div></div></div><div class="group-button"><div class="yith-wcwl-add-to-wishlist"><div class="yith-wcwl-add-button"><a href="#">Add to Wishlist</a></div></div><div class="size-chart-wrapp"><div class="btn-size-chart"><a id="size_chart" href="{{asset('client/images/size-chart.jpg')}}" class="fancybox"  target="_blank">View Size Chart</a></div></div><div class="quantity-add-to-cart"><div class="quantity"><div class="control"><a class="btn-number qtyminus quantity-minus" href="#">-</a><input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4"><a href="#" class="btn-number qtyplus quantity-plus">+</a></div></div><button class="single_add_to_cart_button button">Add to cart</button></div></div></div></div>',
                        type: 'inline'
                    }
                });
                slick_quickview_popup();
                return false;
            });
        }
    }

    function slick_quickview_popup() {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            focusOnSelect: true,
            infinite: true,
            prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            nextArrow: '<i class="fa fa-angle-right " aria-hidden="true"></i>',
        });
    }
    $(window).resize(function () {
        quickview_popup();
    });
    $(window).load(function () {
        quickview_popup();
    });
</script>