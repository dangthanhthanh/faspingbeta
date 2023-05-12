@php
   $cart_num=3;
@endphp
<footer class="footer style7">
    <div class="container">
        <div class="container-wapper">
            <div class="row">
                <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="widget-box">
                        <div class="single-img">
                            <a href="index-2.html"><img src="{{asset('client/images/logo-light.png')}}" alt="img"></a>
                        </div>
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="{{route('home')}}"><span class="flaticon-placeholder"></span>45 Grand Central Terminal New
                                    York,NY 1017 United State USA</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('home')}}"><span class="fa fa-phone"></span>(+123) 456 789 - (+123) 666 888</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('home')}}"><span class="fa fa-envelope-o"></span>dangtanthanh12a2@gmail.com</a>
                            </li>
                            <li class="menu-item">
                                <a href=""><span class="flaticon-clock"></span>Mon-Sat 9:00pm - 5:00pm Sun : Closed</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="tanajil-custommenu default">
                        <h2 class="widgettitle">Quick Menu</h2>
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="{{route('home')}}">Product</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('home')}}">Hot sale</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('home')}}">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="tanajil-custommenu default">
                        <h2 class="widgettitle">Information</h2>
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="{{route('home')}}">About Us</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('home')}}">Contact Us</a>
                            </li>
                            <li class="menu-item">
                                <a href="#phan hoi">Return</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="tanajil-newsletter style1">
                        <div class="newsletter-head">
                            <h3 class="title">Newsletter</h3>
                        </div>
                        <div class="newsletter-form-wrap">
                            <div class="list">
                                Get notified of new products, limited releases, and more.
                            </div>
                            <form action="" method="post">
                                <input type="email" class="input-text email email-newsletter" name="newsletter_email"
                                    placeholder="Your email letter">
                                <button type="submit" class="button btn-submit submit-newsletter">SUBSCRIBE</button>
                            </form>
                        </div>
                    </div>
                    <div class="tanajil-socials">
                        <ul class="socials">
                            <li>
                                <a href="facebook.com" class="social-item" target="_blank">
                                    <i class="icon fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="twitter.com" class="social-item" target="_blank">
                                    <i class="icon fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="instagram.com" class="social-item" target="_blank">
                                    <i class="icon fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 border-custom">
                    <span></span>
                </div>
            </div>
            <div class="footer-end">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="tanajil-payment">
                            <img src="{{asset('client/images/payments.png')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-device-mobile">
    <div class="wapper">
        <div class="footer-device-mobile-item device-home">
            <a href="{{route('home')}}">
					<span class="icon">
						<i class="fa fa-home" aria-hidden="true"></i>
					</span>
                Home
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-wishlist">
            <a href="#sanphamyuethich">
					<span class="icon">
						<i class="fa fa-heart" aria-hidden="true"></i>
					</span>
                Wishlist
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-cart">
            <a href="{{route('home')}}">
					<span class="icon">
						<i class="fa fa-shopping-basket" aria-hidden="true"></i>
						<span class="count-icon">
                            {{$cart_num}}
						</span>
					</span>
                <span class="text">Cart</span>
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-user">
            <a href="{{route('home')}}">
					<span class="icon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>
                Account
            </a>
        </div>
    </div>
</div>
<a href="#" class="backtotop">
    <i class="fa fa-angle-double-up"></i>
</a>