@extends("client.layouts.client")
@section("content")

<div class="main-content main-content-404 right-sidebar">
    <div class="container">
        <div class="row">
            <div class="content-area content-404 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">
                    <section class="error-404 not-found">
                        <div class="images">
                            <img src="http://127.0.0.1:8000/client/images/product-item-1.jpg" alt="img">
                        </div>
                        <div class="text-404">
                            <h1 class="page-title">
                                Error 404 Not Found
                            </h1>
                            <p class="page-content">
                                We´re sorry but the page you are looking for does nor exist. <br/>
                                You could return to
                                <a href="index-2.html" class="hightlight"> Home page</a>
                                or using
                                <span class="hightlight toggle-hightlight">
										 search!
									</span>
                            </p>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection