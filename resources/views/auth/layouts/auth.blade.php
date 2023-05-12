@extends("client.layouts.client")
@section("content")
<div class="main-content main-content-login">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="{{route('home')}}">
                                @yield("title_1","home")
                            </a>
                        </li>
                        <li class="trail-item trail-end active">
                            @yield("title_2","two")
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">
                    <div class="customer_login">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="login-item">
                                    <h5 class="title-login">
                                        @yield("form_title",'register')
                                    </h5>
                                    @yield("form-authentication")
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection