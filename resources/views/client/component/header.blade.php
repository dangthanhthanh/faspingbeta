@php
$account=false;
$products_cart=[
    ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
    "name"=>"product name",
    "price"=>65,
    "size"=>"x",
    "color"=>"blue",
    "material"=>"woold",
    "quantity"=>2,
    ],
    ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
    "name"=>"product name",
    "price"=>65,
    "size"=>"x",
    "color"=>"blue",
    "material"=>"woold",
    "quantity"=>2,
    ],
    ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
    "name"=>"product name",
    "price"=>65,
    "size"=>"x",
    "color"=>"blue",
    "material"=>"woold",
    "quantity"=>2,
    ],
    ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
    "name"=>"product name",
    "price"=>65,
    "size"=>"x",
    "color"=>"blue",
    "material"=>"woold",
    "quantity"=>2,
    ],
   ];
   $cart_num=0;
   $total_price=0;
    foreach ($products_cart as $key => $value) {
        $cart_num++;
        $total_price+=$value["price"];
    };
@endphp



    <header class="header style7">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <div class="header-message">
                    Welcome to our online store!
                </div>
            </div>
            <div class="top-bar-right">
                <ul class="header-user-links">
                    <li>
                        <a href="{{route('home')}}">Login </a>
                        or
                        <a href="{{route('home')}}"> Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-header">
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-md-3 col-xs-7 col-ts-12 header-element">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{asset('client/images/logo.png')}}" alt="img">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-8 col-md-6 col-xs-5 col-ts-12">
                    <div class="block-search-block">
                        <form class="form-search form-search-width-category" action="{{route('home')}}">
                            <div class="form-content">
                                <div class="inner">
                                    <input type="text" class="input" name="search" value="" placeholder="Search here">
                                </div>
                                <button class="btn-search" type="submit">
                                    <span class="icon-search"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12 col-ts-12">
                    <div class="header-control">
                        <div class="block-minicart tanajil-mini-cart block-header tanajil-dropdown">
                            <a href="javascript:void(0);" class="shopcart-icon" data-tanajil="tanajil-dropdown">
                                Cart
                                <span class="count">
                                       {{$cart_num}}
										</span>
                            </a>
                            <div class="shopcart-description tanajil-submenu">
                                <div class="content-wrap">
                                    <h3 class="title">Shopping Cart</h3>
                                    <ul class="minicart-items">
                                        @foreach ( $products_cart as $values)
                                            
                                        <li class="product-cart mini_cart_item">
                                            <a href="{{route('home')}}" class="product-media">
                                                <img src="{{$value["image-url"]}}" alt="img">
                                            </a>
                                            <div class="product-details">
                                                <h5 class="product-name">
                                                    <a href="{{route('home')}}">{{$value["name"]}}</a>
                                                </h5>
                                                <div class="variations">
															<span class="attribute_color">
																<a href="{{route('home')}}">{{$value["color"]}}</a>
															</span>
                                                    ,
                                                    <span class="attribute_size">
																<a href="{{route('home')}}">{{$value["size"]}}</a>
															</span>
                                                </div>
                                                <span class="product-price">
															<span class="price">
																<span>{{$value["price"]}} vnd</span>
															</span>
														</span>
                                                <span class="product-quantity">
															({{$value["quantity"]}})
														</span>
                                                <div class="product-remove">
                                                    <a href="#delete{id}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <div class="subtotal">
                                        <span class="total-title">Subtotal: </span>
                                        <span class="total-price">
													<span class="Price-amount">
														{{$total_price}} vnd
													</span>
												</span>
                                    </div>
                                    <div class="actions">
                                        <a class="button button-viewcart" href="{{route('home')}}">
                                            <span>View Bag</span>
                                        </a>
                                        <a href="{{route('home')}}" class="button button-checkout">
                                            <span>Checkout</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-account block-header tanajil-dropdown">
                            <a href="javascript:void(0);" data-tanajil="tanajil-dropdown">
                                <span class="flaticon-user"></span>
                            </a>
                            <div class="header-account tanajil-submenu">
                                <div class="header-user-form-tabs">
                                    <ul class="tab-link">
                                        @if (!$account)
                                            <li>
                                                <a data-toggle="tab" aria-expanded="true" href="{{route('home')}}">Login</a>
                                            </li>
                                            <li>
                                                <a aria-expanded="true" href="{{route('home')}}">Register</a>
                                            </li>
                                        @else
                                            <li>
                                                <a aria-expanded="true" href="{{route('home')}}">account</a>
                                            </li>
                                            <li>
                                                <a aria-expanded="true" href="{{route('home')}}">Logout</a>
                                                {{-- truyen vao $account=false --}}
                                            </li>
                                        @endif
                                    </ul>
                                    @if (!$account)
                                        <div class="tab-container">
                                            <div id="header-tab-login" class="tab-panel active">
                                                <form method="post" class="login form-login" action="{{route('home')}}">
                                                    <p class="form-row form-row-wide">
                                                        <input type="email" placeholder="Email" name="email" class="input-text">
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <input type="password" class="input-text" name="password" placeholder="Password">
                                                    </p>
                                                    <p class="form-row">
                                                        <label class="form-checkbox">
                                                            <input type="checkbox" class="input-checkbox">
                                                            <span>
                                                                Remember me
                                                            </span>
                                                        </label>
                                                        <input type="submit" class="button" value="Login">
                                                    </p>
                                                    <p class="lost_password">
                                                        <a href="#fogot">Lost your password?</a>
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <a class="menu-bar mobile-navigation menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav-container rows-space-20">
        <div class="container">
            <div class="header-nav-wapper main-menu-wapper">
                <div class="vertical-wapper block-nav-categori">
                    <div class="block-title">
							<span class="icon-bar">
								<span></span>
								<span></span>
								<span></span>
							</span>
                        <span class="text">All Categories</span>
                    </div>
                    <div class="block-content verticalmenu-content">
                        <ul class="tanajil-nav-vertical vertical-menu tanajil-clone-mobile-menu">
                            <li class="menu-item">
                                <a title="Hot Sale" href="{{route('home')}}" class="tanajil-menu-item-title">Hot Sale</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a title="Accessories" href="{{route('home')}}" class="tanajil-menu-item-title">Accessories</a>
                                <span class="toggle-submenu"></span>
                                <ul role="menu" class=" submenu">
                                    <li class="menu-item">
                                        <a title="Audio" href="{{route('home')}}" class="tanajil-item-title">Wrist Watch</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Interior" href="{{route('home')}}" class="tanajil-item-title">Watch Box</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="New Arrivals" href="{{route('home')}}" class="tanajil-item-title">Cleaning Tools</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="New Arrivals" href="{{route('home')}}" class="tanajil-item-title">Advise</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-nav">
                    <div class="container-wapper">
                        <ul class="tanajil-clone-mobile-menu tanajil-nav main-menu " id="menu-main-menu">
                            <li class="menu-item">
                                <a href="{{route('home')}}" class="tanajil-menu-item-title" title="Home">Home</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="{{route('home')}}" class="tanajil-menu-item-title" title="All Product">All Product</a>
                                <span class="toggle-submenu"></span>
                                <ul class="submenu">
                                    <li class="menu-item">
                                        <a title="Orient" href="{{route('home')}}" class="tanajil-menu-item-title">Orient</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Casio" href="{{route('home')}}" class="tanajil-menu-item-title">Casio</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Rolex" href="{{route('home')}}" class="tanajil-menu-item-title">Rolex</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Omega" href="{{route('home')}}" class="tanajil-menu-item-title">Omega</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Citizen" href="{{route('home')}}" class="tanajil-menu-item-title">Citizen</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Calvin Klein" href="{{route('home')}}" class="tanajil-menu-item-title">Calvin Klein</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="SEIKO" href="{{route('home')}}" class="tanajil-menu-item-title">SEIKO</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item  menu-item-has-children item-megamenu">
                                <a href="{{route('home')}}" class="tanajil-menu-item-title" title="Pages">Pages</a>
                                <span class="toggle-submenu"></span>
                                <div class="submenu mega-menu menu-page">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                            <div class="tanajil-custommenu default">
                                                <h2 class="widgettitle">You</h2>
                                                <ul class="menu">
                                                    <li class="menu-item">
                                                        <a href="{{route('home')}}">Suggestions for you</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="{{route('home')}}">Cart Bag</a>
                                                    </li>
                                                    @if ($account)
                                                        <li class="menu-item">
                                                            <a href="{{route('home')}}">Account</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="{{route('home')}}">logout</a>
                                                        </li>
                                                    @else
                                                        <li class="menu-item">
                                                            <a href="{{route('home')}}">Login</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="{{route('home')}}">Register</a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                            <div class="tanajil-custommenu default">
                                                <h2 class="widgettitle">Us</h2>
                                                <ul class="menu">
                                                    <li class="menu-item">
                                                        <a href="{{route('home')}}">About</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="{{route('home')}}">Contact</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('home')}}" class="tanajil-menu-item-title"
                                   title="Blogs">Blogs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
{{--header --}}
<div class="header-device-mobile">
    <div class="wapper">
        <div class="item mobile-logo">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('client/images/logo.png')}}" alt="img">
                </a>
            </div>
        </div>
        <div class="item item mobile-search-box has-sub">
            <a href="#">
						<span class="icon">
							<i class="fa fa-search" aria-hidden="true"></i>
						</span>
            </a>
            <div class="block-sub">
                <a href="#" class="close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="header-searchform-box">
                    <form class="header-searchform" method="post" action="{{route('home')}}">
                        <div class="searchform-wrap">
                            <input type="text" class="search-input" placeholder="Enter keywords to search..." name="search">
                            <input type="submit" class="submit button" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="item menu-bar">
            <a class=" mobile-navigation  menu-toggle" href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
</div>