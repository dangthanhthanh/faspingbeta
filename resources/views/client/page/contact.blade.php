@extends("client.layouts.client")
@section("content")

<div class="main-content main-content-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="index-2.html">Home</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Contact us
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area content-contact col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">
                    <h3 class="custom_blog_title">Contact us</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="page-main-content">
        <div class="google-map">
            <div class="tanajil-google-maps" id="tanajil-google-maps" data-hue="" data-lightness="1" data-map-style="2"
                 data-saturation="-99" data-longitude="-73.985130" data-latitude="40.758896" data-pin-icon=""
                 data-zoom="14" data-map-type="ROADMAP"></div>
            <span class="fa fa-map-marker"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-contact">
                        <div class="col-lg-8 no-padding">
                            <div class="form-message">
                                <h2 class="title">
                                    Send us a Message!
                                </h2>
                                <form action="#" class="tanajil-contact-fom">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p>
                                                <span class="form-label">Your Name *</span>
                                                <span class="form-control-wrap your-name">
														<input title="your-name" type="text" name="your-name" size="40"
                                                               class="form-control form-control-name">
													</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p>
													<span class="form-label">
														Your Email *
													</span>
                                                <span class="form-control-wrap your-email">
														<input title="your-email" type="email" name="your-email" size="40"
                                                               class="form-control form-control-email">
													</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p>
                                                <span class="form-label">Phone</span>
                                                <span class="form-control-wrap your-phone">
														<input title="your-phone" type="text" name="your-phone"
                                                               class="form-control form-control-phone">
													</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p>
													<span class="form-label">
														Company
													</span>
                                                <span class="form-control-wrap your-company">
														<input title="your-company" type="text" name="your-company"
                                                               class="form-control your-company">
													</span>
                                            </p>
                                        </div>
                                    </div>
                                    <p>
											<span class="form-label">
												Your Message
											</span>
                                        <span class="wpcf7-form-control-wrap your-message">
												<textarea title="your-message" name="your-message" cols="40" rows="9"
                                                          class="form-control your-textarea"></textarea>
											</span>
                                    </p>
                                    <p>
                                        <input type="submit" value="SEND MESSAGE"
                                               class="form-control-submit button-submit">
                                    </p>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 no-padding">
                            <div class="form-contact-information">
                                <form action="#" class="tanajil-contact-info">
                                    <h2 class="title">
                                        Contact information
                                    </h2>
                                    <div class="info">
                                        <div class="item address">
												<span class="icon">
													
												</span>
                                            <span class="text">
													 Restfield White City London G12 Ariel Way - United Kingdom
												</span>
                                        </div>
                                        <div class="item phone">
												<span class="icon">
													
												</span>
                                            <span class="text">
													(+800) 123 456 7890
												</span>
                                        </div>
                                        <div class="item email">
												<span class="icon">
													
												</span>
                                            <span class="text">
													info@tanajiloutfit.co.uk
												</span>
                                        </div>
                                    </div>
                                    <div class="socials">
                                        <a href="#" class="social-item" target="_blank">
												<span class="icon fa fa-facebook">
													
												</span>
                                        </a>
                                        <a href="#" class="social-item" target="_blank">
												<span class="icon fa fa-twitter-square">
													
												</span>
                                        </a>
                                        <a href="#" class="social-item" target="_blank">
												<span class="icon fa fa-instagram">
													
												</span>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection