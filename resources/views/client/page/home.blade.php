 {{-- @extends("client.layouts.client")
 @php
        $slider=[
                ["background-image"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                "title-Small"=>"Sale up to 40% off!1",
                "title-big"=>"Custom & Headlights1",
                "new-price"=>"$270.001",
                "link-href"=>"#"],
                ["background-image"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                "title-Small"=>"Sale up to 40% off!2",
                "title-big"=>"Custom & Headlights2",
                "new-price"=>"$270.002",
                "link-href"=>"#"],
                ["background-image"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                "title-Small"=>"Sale up to 40% off!3",
                "title-big"=>"Custom & Headlights3",
                "new-price"=>"$270.003",
                "link-href"=>"#"],
                ["background-image"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                "title-Small"=>"Sale up to 40% off!3",
                "title-big"=>"Custom & Headlights3",
                "new-price"=>"$270.003",
                "link-href"=>"#"],
                ["background-image"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                "title-Small"=>"Sale up to 40% off!3",
                "title-big"=>"Custom & Headlights3",
                "new-price"=>"$270.003",
                "link-href"=>"#"],];

        // gioi han 2 component
        $banner=[
                ["background-image"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                "title"=>"Sale up to 40% off!1",
                "description"=>"Custom & Headlights1",
                "link-href"=>"#"],
                ["background-image"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                "title"=>"Sale up to 40% off!2",
                "description"=>"Custom & Headlights2",
                "link-href"=>"#"],];

        $products_sale=[
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>["y"=>2023,"m"=>8,"w"=>3,"d"=>3,"h"=>3,"i"=>3,"s"=>3],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>["y"=>2023,"m"=>8,"w"=>3,"d"=>3,"h"=>3,"i"=>3,"s"=>3],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>["y"=>2023,"m"=>8,"w"=>3,"d"=>3,"h"=>3,"i"=>3,"s"=>3],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>["y"=>2023,"m"=>8,"w"=>3,"d"=>3,"h"=>3,"i"=>3,"s"=>3],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>["y"=>2023,"m"=>8,"w"=>3,"d"=>3,"h"=>3,"i"=>3,"s"=>3],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>["y"=>2023,"m"=>8,"w"=>3,"d"=>3,"h"=>3,"i"=>3,"s"=>3],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>["y"=>2023,"m"=>8,"w"=>3,"d"=>3,"h"=>3,"i"=>3,"s"=>3],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>["y"=>2023,"m"=>8,"w"=>3,"d"=>3,"h"=>3,"i"=>3,"s"=>3],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>["y"=>2023,"m"=>8,"w"=>3,"d"=>3,"h"=>3,"i"=>3,"s"=>3],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>["y"=>2023,"m"=>8,"w"=>3,"d"=>3,"h"=>3,"i"=>3,"s"=>3],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>["y"=>2023,"m"=>8,"w"=>3,"d"=>3,"h"=>3,"i"=>3,"s"=>3],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>["y"=>2023,"m"=>8,"w"=>3,"d"=>3,"h"=>3,"i"=>3,"s"=>3],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>["y"=>2023,"m"=>8,"w"=>3,"d"=>3,"h"=>3,"i"=>3,"s"=>3],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>["y"=>2023,"m"=>8,"w"=>3,"d"=>3,"h"=>3,"i"=>3,"s"=>3],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>["y"=>2023,"m"=>8,"w"=>3,"d"=>3,"h"=>3,"i"=>3,"s"=>3],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],];

            // gioi han 3 component
            $banner_image=[
                ["image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                "tanajil-subtitle"=>"TOP STAFF PICK",
                "title"=>"Shop seat cover",
                "description"=>"Proin interdum magna primis id consequat dictum",
                "link-href"=>"#"],
                ["image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                "title"=>"Shop seat cover",
                "description"=>"Proin interdum magna primis id consequat dictum",
                "code"=>["code"=>"TANAJIL","sale-of"=>"Get 25% Off for all Accessories items!"],
                "link-href"=>"#"],
                ["image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                "title"=>"Shop seat cover",
                "description"=>"Proin interdum magna primis id consequat dictum",
                "banner-price"=>["number-price"=>"$45.00"],
                "link-href"=>[["name"=>"Shop now","link"=>"#"],["name"=>"view more","link"=>"#"]]],];
            $products_card=[
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>0,
                "title"=>"product name",
                "product-countdown"=>[],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>0,
                "title"=>"product name",
                "product-countdown"=>[],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>0,
                "title"=>"product name",
                "product-countdown"=>[],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>0,
                "title"=>"product name",
                "product-countdown"=>[],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>0,
                "title"=>"product name",
                "product-countdown"=>[],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>0,
                "title"=>"product name",
                "product-countdown"=>[],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>0,
                "title"=>"product name",
                "product-countdown"=>[],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>0,
                "title"=>"product name",
                "product-countdown"=>[],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>[],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>[],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>[],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],
                ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
                "new"=>1,
                "title"=>"product name",
                "product-countdown"=>[],
                "count-star"=>3,
                "price"=>["old"=>"$65","new"=>"$45"],
                "link-href"=>"#"],];

            $blog=[
                [
                    "link-href"=>"#ref",
                    "image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                    "category"=>"skincare",
                    "date"=>"Agust 17, 09:14 am",
                    "view"=>"999",
                    "comment"=>"99",
                    "title"=>"We bring you the best",
                    "description"=>"Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue. Mauris nec ante magna.",
                ],
                [
                    "link-href"=>"#ref",
                    "image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                    "category"=>"skincare",
                    "date"=>"Agust 17, 09:14 am",
                    "view"=>"999",
                    "comment"=>"99",
                    "title"=>"We bring you the best",
                    "description"=>"Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue. Mauris nec ante magna.",
                ],
                [
                    "link-href"=>"#ref",
                    "image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                    "category"=>"video",
                    "date"=>"Agust 17, 09:14 am",
                    "view"=>"999",
                    "comment"=>"99",
                    "title"=>"We bring you the best",
                    "description"=>"Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue. Mauris nec ante magna.",
                ],
                [
                    "link-href"=>"#ref",
                    "image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                    "category"=>"skincare",
                    "date"=>"Agust 17, 09:14 am",
                    "view"=>"999",
                    "comment"=>"99",
                    "title"=>"We bring you the best",
                    "description"=>"Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue. Mauris nec ante magna.",
                ],
                [
                    "link-href"=>"#ref",
                    "image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                    "category"=>"skincare",
                    "date"=>"Agust 17, 09:14 am",
                    "view"=>"999",
                    "comment"=>"99",
                    "title"=>"We bring you the best",
                    "description"=>"Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue. Mauris nec ante magna.",
                ],
                [
                    "link-href"=>"#ref",
                    "image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                    "category"=>"video",
                    "date"=>"Agust 17, 09:14 am",
                    "view"=>"999",
                    "comment"=>"99",
                    "title"=>"We bring you the best",
                    "description"=>"Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue. Mauris nec ante magna.",
                ],
                [
                    "link-href"=>"#ref",
                    "image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                    "category"=>"skincare",
                    "date"=>"Agust 17, 09:14 am",
                    "view"=>"999",
                    "comment"=>"99",
                    "title"=>"We bring you the best",
                    "description"=>"Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue. Mauris nec ante magna.",
                ],
                [
                    "link-href"=>"#ref",
                    "image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                    "category"=>"skincare",
                    "date"=>"Agust 17, 09:14 am",
                    "view"=>"999",
                    "comment"=>"99",
                    "title"=>"We bring you the best",
                    "description"=>"Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue. Mauris nec ante magna.",
                ],
                [
                    "link-href"=>"#ref",
                    "image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg",
                    "category"=>"video",
                    "date"=>"Agust 17, 09:14 am",
                    "view"=>"999",
                    "comment"=>"99",
                    "title"=>"We bring you the best",
                    "description"=>"Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue. Mauris nec ante magna.",
                ],];

                $instar=[
                    ["image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg"],
                    ["image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg"],
                    ["image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg"],
                    ["image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg"],
                    ["image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg"],
                    ["image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg"],
                    ["image-url"=>"https://www.shutterstock.com/image-photo/wrist-watch-isolated-on-white-260nw-343320308.jpg"],];

 @endphp
 @section("content")
 <div>
    <div class="fullwidth-template">
        {{-- slider --}}
        <div class="home-slider-banner">
            <div class="container">
                <div class="row10">
                    <div class="col-lg-8 silider-wrapp">
                        <div class="home-slider">
                            <div class="slider-owl owl-slick equal-container nav-center"
                                 data-slick='{"autoplay":true, "autoplaySpeed":9000, "arrows":false, "dots":true, "infinite":true, "speed":1000, "rows":1}'
                                 data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1}}]'>
                                 {{-- slider component --}}
                                 @foreach ($slider as $key => $value )
                                    @include("client.component.slider",[$key => $value])
                                 @endforeach
                                 {{-- end slider component --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 banner-wrapp">
                        @foreach ($banner as $key => $value )
                            <div class="banner">
                                <div class="item-banner style{{7+$key}}" style="background-image: url({{$value["background-image"]}})">
                                    {{-- style.css 8597 --}}
                                    <div class="inner">
                                        <div class="banner-content">
                                            <h3 class="title">{{$value["title"]}}</h3>
                                            <div class="description">
                                                {{$value["description"]}}
                                            </div>
                                            <a href="{{$value["link-href"]}}" class="button btn-lets-do-it">View more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- end slider --}}
        {{-- deal slider product --}}
        <div class="tanajil-product produc-featured rows-space-65">
            <div class="container">
                <h3 class="custommenu-title-blog">
                    Deal of the day
                </h3>
                <div class="owl-products owl-slick equal-container nav-center"
                     data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":true, "infinite":false, "speed":800, "rows":1}'
                     data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":4}},{"breakpoint":"1200","settings":{"slidesToShow":3}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"480","settings":{"slidesToShow":1}}]'>
                     {{-- product --}}
                    @foreach ($products_sale as $value )
                        @include("client.component.productCardGird", [$value])
                    @endforeach
                    {{-- endproduct --}}
                </div>
            </div>
        </div>
        {{-- end deal slider product --}}
        {{-- banner-wrapp --}}
        <div class="banner-wrapp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="banner">
                            <div class="item-banner style4"
                            style="background-image: url({{$banner_image[0]["image-url"]}})">
                            {{-- style.css 8536 --}}
                                <div class="inner">
                                    <div class="banner-content">
                                        <h4 class="tanajil-subtitle">{{$banner_image[0]["tanajil-subtitle"]}}</h4>
                                        <h3 class="title">{{$banner_image[0]["title"]}}</h3>
                                        <div class="description">
                                            {{$banner_image[0]["description"]}}
                                        </div>
                                        <a href="{{$banner_image[0]['link-href']}}" class="button btn-shop-now">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="banner">
                            <div class="item-banner style5"
                            style="background-image: url({{$banner_image[1]["image-url"]}})">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h3 class="title">{{$banner_image[1]["title"]}}</h3>
                                        <span class="code">
												Use code:
												<span>
													{{$banner_image[1]["code"]["code"]}}
												</span>
												{{$banner_image[1]["code"]["sale-of"]}}
											</span>
                                        <a href="{{$banner_image[1]['link-href']}}" class="button btn-shop-now">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-wrapp rows-space-65">
            <div class="container">
                <div class="banner">
                    <div class="item-banner style17"
                    style="background-image: url({{$banner_image[2]["image-url"]}})">
                        <div class="inner">
                            <div class="banner-content">
                                <h3 class="title">{{$banner_image[2]["title"]}}</h3>
                                <div class="description">
                                    {{$banner_image[2]["description"]}}
                                </div>
                                <div class="banner-price">
                                    Price from:
                                    <span class="number-price">{{$banner_image[2]["banner-price"]["number-price"]}}</span>
                                </div>
                                <a href="{{$banner_image[2]['link-href'][0]["link"]}}" class="button btn-shop-now">{{$banner_image[2]['link-href'][0]["name"]}}</a>
                                <a href="{{$banner_image[2]['link-href'][1]["link"]}}" class="button btn-shop-now">{{$banner_image[2]['link-href'][1]["name"]}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--end banner-wrapp --}}
        {{--top product list --}}
        <div class="tanajil-tabs  default rows-space-40">
            <div class="container">
                <div class="tab-head">
                    <ul class="tab-link">
                        <li class="active">
                            <a data-toggle="tab" aria-expanded="true" href="#bestseller">Bestseller</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" aria-expanded="true" href="#new_arrivals">New Arrivals </a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" aria-expanded="true" href="#top-rated">Top Rated</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-container">
                    <div id="bestseller" class="tab-panel active">
                        <div class="tanajil-product">
                            <ul class="row list-products auto-clear equal-container product-grid">
                                @foreach ($products_card as $value )
                                    {{-- product --}}
                                        @include("client.component.productCardGird",[$value])
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--end top product list --}}
        {{-- SIGN UP NEWSLETTER --}}
        <div class="newsletter-wrapp">
            <div class="tanajil-newsletter style3 ">
                {{-- style.css 7057 --}}
                <div class="container">
                    <div class="newsletter-head">
                        <h3 class="title">Sign up Newsletter</h3>
                        <div class="subtitle">
                            Subscribe to get more special Deals,<br/>
                            Events & Promotions
                        </div>
                    </div>
                    <form class="newsletter-form-wrap">
                        <input class="input-text email email-newsletter" type="email" name="email"
                               placeholder="Your email letter">
                        <button type="submit" class="button btn-submit submit-newsletter">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        {{-- end SIGN UP NEWSLETTER --}}
        {{-- OUR LATEST NEWS --}}
        <div class="tanajil-blog-wraap default">
            <div class="container">
                <h3 class="custommenu-title-blog">
                    Our Latest News
                </h3>
                <div class="tanajil-blog default">
                    <div class="owl-slick equal-container nav-center"
                         data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":true, "infinite":true, "speed":800, "rows":1}'
                         data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":3}},{"breakpoint":"1200","settings":{"slidesToShow":3}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"768","settings":{"slidesToShow":2}},{"breakpoint":"481","settings":{"slidesToShow":1}}]'>
                         {{-- once block --}}
                         @foreach ($blog as $value)
                            <div class="tanajil-blog-item equal-element layout1">
                                <div class="post-thumb">
                                    @if ($value["category"]==="video")
                                    <div class="video-tanajil-blog">
                                        <figure>
                                            <img src="{{$value["image-url"]}}" alt="img" width="370"
                                            height="280">
                                        </figure>
                                        <a class="quick-install" href="#" data-videosite="vimeo"
                                        data-videoid="134060140"></a>
                                    </div>
                                    @else
                                    <a href="#">
                                        <img src="{{$value["image-url"]}}" alt="img">
                                    </a>
                                    @endif
                                    <div class="category-blog">
                                        {{-- style.css display none 7594 --}}
                                        <ul class="list-category">
                                            <li class="category-item">
                                                <a href="#">{{$value["category"]}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-item-share">
                                        {{-- style.css display none 6151 --}}
                                        <a href="#" class="icon">
                                            <i class="fa fa-share-alt" aria-hidden="true"></i>
                                        </a>
                                        <div class="box-content">
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <div class="post-date">
                                            {{$value["date"]}}
                                        </div>
                                        <span class="view">
                                        {{-- style.css display none 6249 --}}
                                                <i class="icon fa fa-eye" aria-hidden="true"></i>
                                                {{$value["view"]}}
                                            </span>
                                        <span class="comment">
                                        {{-- style.css display none 6249 --}}
                                                <i class="icon fa fa-commenting" aria-hidden="true"></i>
                                                {{$value["comment"]}}
                                            </span>
                                    </div>
                                    <h2 class="blog-title">
                                        <a href="#">{{$value["title"]}} </a>
                                    </h2>
                                    <div class="main-info-post">
                                        <p class="des">
                                            {{$value["description"]}}
                                        </p>
                                        <a class="readmore" href="#">Read more</a>
                                    </div>
                                </div>
                            </div>
                        {{-- end once block --}}
                         @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- end OUR LATEST NEWS --}}
    </div>
</div>
{{-- instagram --}}
<div class="instagram-wrapp">
    <div>
        <h3 class="custommenu-title-blog">
            <i class="flaticon-instagram" aria-hidden="true"></i>
            Instagram Feed
        </h3>
        <div class="tanajil-instagram">
            <div class="instagram owl-slick equal-container"
                 data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":false, "infinite":true, "speed":800, "rows":1}'
                 data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":5}},{"breakpoint":"1200","settings":{"slidesToShow":4}},{"breakpoint":"992","settings":{"slidesToShow":3}},{"breakpoint":"768","settings":{"slidesToShow":2}},{"breakpoint":"481","settings":{"slidesToShow":2}}]'>
                 {{-- instargram --}}
                 @foreach ($instar as $value)
                 <div class="item-instagram">
                     <a href="#">
                         <img src="{{$value["image-url"]}}" alt="img">
                        </a>
                        <span class="text">
                            <i class="icon flaticon-instagram" aria-hidden="true"></i>
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
{{-- end instagram --}}
{{--end main --}}
 @endsection --}}
