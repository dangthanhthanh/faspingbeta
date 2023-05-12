@extends("client.layouts.client")
@section("content")

<div class="main-content main-content-checkout">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="index-2.html">Home</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Checkout
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <h3 class="custom_blog_title">
            Checkout
        </h3>
        <div class="checkout-wrapp">
            <div class="shipping-address-form-wrapp">
                <div class="shipping-address-form  checkout-form">
                    <div class="row-col-1 row-col">
                        <div class="shipping-address">
                            <h3 class="title-form">
                                Shipping Address
                            </h3>
                            <p class="form-row form-row-first">
                                <label class="text">First name</label>
                                <input title="first" type="text" class="input-text">
                            </p>
                            <p class="form-row form-row-last">
                                <label class="text">Last name</label>
                                <input title="last" type="text" class="input-text">
                            </p>
                            <p class="form-row forn-row-col forn-row-col-1">
                                <label class="text">Country</label>
                                <select title="country" data-placeholder="United Kingdom" class="chosen-select"
                                        tabindex="1">
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                </select>
                            </p>
                            <p class="form-row forn-row-col forn-row-col-2">
                                <label class="text">State</label>
                                <select title="state" data-placeholder="London" class="chosen-select" tabindex="1">
                                    <option value="United States">London</option>
                                    <option value="United Kingdom">tokyo</option>
                                    <option value="Afghanistan">Seoul</option>
                                    <option value="Aland Islands">Mexico city</option>
                                    <option value="Albania">Mumbai</option>
                                    <option value="Algeria">Delhi</option>
                                    <option value="American Samoa">New York</option>
                                    <option value="Andorra">Jakarta</option>
                                    <option value="Angola">Sao Paulo</option>
                                    <option value="Anguilla">Osaka</option>
                                    <option value="Antarctica">Karachi</option>
                                    <option value="Antigua and Barbuda">Matx-cơ-va</option>
                                    <option value="Argentina">Toronto</option>
                                    <option value="Armenia">Boston</option>
                                </select>
                            </p>
                            <p class="form-row forn-row-col forn-row-col-3">
                                <label class="text">City</label>
                                <select title="city" data-placeholder="London" class="chosen-select" tabindex="1">
                                    <option value="United States">London</option>
                                    <option value="United Kingdom">tokyo</option>
                                    <option value="Afghanistan">Seoul</option>
                                    <option value="Aland Islands">Mexico city</option>
                                    <option value="Albania">Mumbai</option>
                                    <option value="Algeria">Delhi</option>
                                    <option value="American Samoa">New York</option>
                                    <option value="Andorra">Jakarta</option>
                                    <option value="Angola">Sao Paulo</option>
                                    <option value="Anguilla">Osaka</option>
                                    <option value="Antarctica">Karachi</option>
                                    <option value="Antigua and Barbuda">Matx-cơ-va</option>
                                    <option value="Argentina">Toronto</option>
                                    <option value="Armenia">Boston</option>
                                </select>
                            </p>
                            <p class="form-row form-row-first">
                                <label class="text">Zip code</label>
                                <input title="zip" type="text" class="input-text">
                            </p>
                            <p class="form-row form-row-last">
                                <label class="text">Address</label>
                                <input title="address" type="text" class="input-text">
                            </p>
                        </div>
                    </div>
                    <div class="row-col-2 row-col">
                        <div class="your-order">
                            <h3 class="title-form">
                                Your Order
                            </h3>
                            <ul class="list-product-order">
                                <li class="product-item-order">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="http://127.0.0.1:8000/client/images/product-item-1.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="product-order-inner">
                                        <h5 class="product-name">
                                            <a href="#">3D Dining Chair</a>
                                        </h5>
                                        <span class="attributes-select attributes-color">Black,</span>
                                        <span class="attributes-select attributes-size">XXL</span>
                                        <div class="price">
                                            $45
                                            <span class="count">x1</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item-order">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="assets/images/item-order2.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="product-order-inner">
                                        <h5 class="product-name">
                                            <a href="#">3D Dining Chair</a>
                                        </h5>
                                        <span class="attributes-select attributes-color">Black,</span>
                                        <span class="attributes-select attributes-size">XXL</span>
                                        <div class="price">
                                            $45
                                            <span class="count">x1</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="order-total">
									<span class="title">
										Total Price:
									</span>
                                <span class="total-price">
										$95
									</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="button button-payment">Payment</a>
            </div>
            <div class="payment-method-wrapp">
                <div class="payment-method-form checkout-form">
                    <div class="row-col-1 row-col">
                        <div class="payment-method">
                            <h3 class="title-form">
                                Payment Method
                            </h3>
                            <div class="group-button-payment">
                                <a href="#" class="button btn-credit-card">Credit Card</a>
                                <a href="#" class="button btn-paypal">paypal</a>
                            </div>
                            <p class="form-row form-row-card-number">
                                <label class="text">Card number</label>
                                <input type="text" class="input-text" placeholder="xxx - xxx - xxx - xxx">
                            </p>
                            <p class="form-row forn-row-col forn-row-col-1">
                                <label class="text">Month</label>
                                <select title="month" data-placeholder="01" class="chosen-select" tabindex="1">
                                    <option value="thang01">01</option>
                                    <option value="thang02">02</option>
                                    <option value="thang03">03</option>
                                    <option value="thang04">04</option>
                                    <option value="thang05">05</option>
                                    <option value="thang06">06</option>
                                    <option value="thang07">07</option>
                                    <option value="thang08">08</option>
                                    <option value="thang09">09</option>
                                    <option value="thang10">10</option>
                                    <option value="thang11">11</option>
                                    <option value="thang12">12</option>
                                </select>
                            </p>
                            <p class="form-row forn-row-col forn-row-col-2">
                                <label class="text">Year</label>
                                <select title="Year" data-placeholder="2017" class="chosen-select" tabindex="1">
                                    <option value="nam2010">2010</option>
                                    <option value="nam2011">2011</option>
                                    <option value="nam2012">2012</option>
                                    <option value="nam2013">2013</option>
                                    <option value="nam2014">2014</option>
                                    <option value="nam2015">2015</option>
                                    <option value="nam2016">2016</option>
                                    <option value="nam2017">2017</option>
                                    <option value="nam2018">2018</option>
                                    <option value="nam2019">2019</option>
                                </select>
                            </p>
                            <p class="form-row forn-row-col forn-row-col-3">
                                <label class="text">CVV</label>
                                <select title="CVV" data-placeholder="238" class="chosen-select" tabindex="1">
                                    <option value="cvv1">238</option>
                                    <option value="cvv2">354</option>
                                    <option value="cvv3">681</option>
                                    <option value="cvv4">254</option>
                                    <option value="cvv5">687</option>
                                    <option value="cvv6">123</option>
                                    <option value="cvv7">951</option>
                                    <option value="cvv8">852</option>
                                    <option value="cvv9">753</option>
                                    <option value="vcc10">963</option>
                                </select>
                            </p>
                        </div>
                    </div>
                    <div class="row-col-2 row-col">
                        <div class="your-order">
                            <h3 class="title-form">
                                Your Order
                            </h3>
                            <ul class="list-product-order">
                                <li class="product-item-order">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="http://127.0.0.1:8000/client/images/product-item-1.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="product-order-inner">
                                        <h5 class="product-name">
                                            <a href="#">3D Dining Chair</a>
                                        </h5>
                                        <span class="attributes-select attributes-color">Black,</span>
                                        <span class="attributes-select attributes-size">XXL</span>
                                        <div class="price">
                                            $45
                                            <span class="count">x1</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item-order">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="http://127.0.0.1:8000/client/images/product-item-1.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="product-order-inner">
                                        <h5 class="product-name">
                                            <a href="#">3D Dining Chair</a>
                                        </h5>
                                        <span class="attributes-select attributes-color">Black,</span>
                                        <span class="attributes-select attributes-size">XXL</span>
                                        <div class="price">
                                            $45
                                            <span class="count">x1</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="order-total">
									<span class="title">
										Total Price:
									</span>
                                <span class="total-price">
										$95
									</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-control">
                    <a href="#" class="button btn-back-to-shipping">Back to shipping</a>
                    <a href="#" class="button btn-pay-now">Pay now</a>
                </div>
            </div>
            <div class="end-checkout-wrapp">
                <div class="end-checkout checkout-form">
                    <div class="icon">
                    </div>
                    <h3 class="title-checkend">
                        Congratulation! Your order has been processed.
                    </h3>
                    <div class="sub-title">
                        Aenean dui mi, tempus non volutpat eget, molestie a orci.
                        Nullam eget sem et eros laoreet rutrum.
                        Quisque sem ante, feugiat quis lorem in.
                    </div>
                    <a href="#" class="button btn-return">Return to Store</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection