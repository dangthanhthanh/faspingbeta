@extends("client.layouts.client")
@php
    
    $cart_itemt=[
        ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
        "title"=>"product name",
        "color"=>"black",
        "size"=>"cc",
        "sum-price-product"=>"demo999",
        ],
        ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
        "title"=>"product name",
        "color"=>"black",
        "size"=>"cc",
        "sum-price-product"=>"demo999",
        ],
        ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
        "title"=>"product name",
        "color"=>"black",
        "size"=>"cc",
        "sum-price-product"=>"demo999",
        ],
        ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
        "title"=>"product name",
        "color"=>"black",
        "size"=>"cc",
        "sum-price-product"=>"demo999",
        ],
        ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
        "title"=>"product name",
        "color"=>"black",
        "size"=>"cc",
        "sum-price-product"=>"demo999",
        ],
        ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
        "title"=>"product name",
        "color"=>"black",
        "size"=>"cc",
        "sum-price-product"=>"demo999",
        ],
        ["image-url"=>"http://127.0.0.1:8000/client/images/product-item-1.jpg",
        "title"=>"product name",
        "color"=>"black",
        "size"=>"cc",
        "sum-price-product"=>"demo999",
        ],
    ]

@endphp
@section("content")

    <main class="site-main  main-container no-sidebar">
        <div class="container">
            <div class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items breadcrumb">
                    <li class="trail-item trail-begin">
                        <a href="#">
								<span>
									Home
								</span>
                        </a>
                    </li>
                    <li class="trail-item trail-end active">
							<span>
								Shopping Cart
							</span>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="main-content-cart main-content col-sm-12">
                    <h3 class="custom_blog_title">
                        Shopping Cart
                    </h3>
                    <div class="page-main-content">
                        <div class="shoppingcart-content">
                            <form action="http://tuongnam.com.vn/tanajil/shoppingcart.html" class="cart-form">
                                <table class="shop_table">
                                    <thead>
                                    <tr>
                                        <th class="product-remove"></th>
                                        <th class="product-thumbnail"></th>
                                        <th class="product-name"></th>
                                        <th class="product-price"></th>
                                        <th class="product-quantity"></th>
                                        <th class="product-subtotal"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($cart_itemt as $value)
                                        @include("client.component.tr_cart",[$value])
                                    @endforeach
                                    <tr>
                                        <td class="actions">
                                            <div class="coupon">
                                                <label class="coupon_code">Coupon Code:</label>
                                                <input type="text" class="input-text" placeholder="Promotion code here">
                                                <a href="#" class="button"></a>
                                            </div>
                                            <div class="order-total">
														<span class="title">
															Total Price:
														</span>
                                                <span class="total-price">
															$95
														</span>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                            <div class="control-cart">
                                <button class="button btn-continue-shopping">
                                    Continue Shopping
                                </button>
                                <button class="button btn-cart-to-checkout">
                                    Checkout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection