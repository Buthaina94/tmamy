@extends('adforest.layout.master')

@section('template_title', $object->title)

@section('breadcrumbs')
    @include('adforest.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
@endsection

@section('content')
    <section class="section-padding error-page pattern-bgs gray ">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Middle Content Area -->
                <div class="col-md-8 col-xs-12 col-sm-12">
                    <!-- Single Ad -->
                    <div class="single-ad">
                        <!-- Title -->
                        <div class="ad-box featured-border">
                            <h1>{{ $object->title }}</h1>
                            <div class="short-history">
                                <ul>
                                    <li>@lang('advertisement.created_at'): <b>{{ \Carbon\Carbon::parse($object->created_at)->formatLocalized('%d %B %Y, %H:%M') }}</b></li>
                                    <li>@lang('advertisement.category'): <b><a href="#">Used Cars</a></b></li>
                                    <li>@lang('advertisement.location'): <b>London</b></li>
                                </ul>
                            </div>
                            <div class="featured-ribbon">
                                <span>Featured</span>
                            </div>
                        </div>
                        <!-- Listing Slider  -->
                        <div class="flexslider single-page-slider">
                            <div class="flex-viewport">
                                <ul class="slides slide-main">
                                    <li class=""><img alt="" src="{{ asset('adforest/images/single-page/1.jpg') }}" title=""></li>
                                    <li><img alt="" src="{{ asset('adforest/images/single-page/2.jpg') }}" title=""></li>
                                    <li class="flex-active-slide"><img alt="" src="{{ asset('adforest/images/single-page/3.jpg') }}" title="">
                                    </li>
                                    <li><img alt="" src="{{ asset('adforest/images/single-page/4.jpg') }}" title=""></li>
                                    <li><img alt="" src="{{ asset('adforest/images/single-page/5.jpg') }}" title=""></li>
                                    <li><img alt="" src="{{ asset('adforest/images/single-page/6.jpg') }}" title=""></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Listing Slider Thumb -->
                        <div class="flexslider" id="carousels">
                            <div class="flex-viewport">
                                <ul class="slides slide-thumbnail">
                                    <li><img alt="" draggable="false" src="{{ asset('adforest/images/single-page/1_thumb.jpg') }}"></li>
                                    <li><img alt="" draggable="false" src="{{ asset('adforest/images/single-page/2_thumb.jpg') }}"></li>
                                    <li class="flex-active-slide"><img alt="" draggable="false"
                                                                       src="{{ asset('adforest/images/single-page/3_thumb.jpg') }}"></li>
                                    <li><img alt="" draggable="false" src="{{ asset('adforest/images/single-page/4_thumb.jpg') }}"></li>
                                    <li><img alt="" draggable="false" src="{{ asset('adforest/images/single-page/5_thumb.jpg') }}"></li>
                                    <li><img alt="" draggable="false" src="{{ asset('adforest/images/single-page/6_thumb.jpg') }}"></li>
                                    <!-- items mirrored twice, total of 12 -->
                                </ul>
                            </div>
                        </div>
                        <!-- Share Ad  -->
                        <div class="ad-share text-center">
                            <div data-toggle="modal" data-target=".share-ad" class="ad-box col-md-4 col-sm-4 col-xs-12">
                                <i class="fa fa-share-alt"></i> <span class="hidetext">Share</span>
                            </div>
                            <a class="ad-box col-md-4 col-sm-4 col-xs-12" href="#"><i class="fa fa-star active"></i>
                                <span class="hidetext">Add to watchlist</span></a>
                            <div data-target=".report-quote" data-toggle="modal"
                                 class="ad-box col-md-4 col-sm-4 col-xs-12">
                                <i class="fa fa-warning"></i> <span class="hidetext">Report</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- Short Description  -->
                        <div class="ad-box">
                            <div class="short-features">
                                <!-- Heading Area -->
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        @lang('advertisement.description')
                                    </h3>
                                </div>
                                <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                    <span><strong>Condition</strong> :</span> Used
                                </div>
                                <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                    <span><strong>Brand</strong> :</span> Nokia
                                </div>
                                <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                    <span><strong>Model</strong> :</span> Lumia 625
                                </div>
                                <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                    <span><strong>Product Type</strong>:</span> Mobile
                                </div>
                                <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                    <span><strong>Date</strong> :</span> 2014-10-06
                                </div>
                                <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                    <span><strong>Price</strong> :</span> Rs. 22,000
                                </div>
                            </div>
                            <!-- Short Features  -->
                            <div class="desc-points">
                                <ul>
                                    <li>
                                        Looking to sell the car urgently.
                                    </li>
                                    <li>
                                        Engine is good condition.
                                    </li>
                                    <li>
                                        Complete service history available.
                                    </li>
                                    <li>
                                        Original return file is available.
                                    </li>
                                    <li>
                                        After Market Alloy rims.
                                    </li>
                                    <li>
                                        As good as a brand new car.
                                    </li>
                                    <li>
                                        Lady Driven Car in Immaculate Condition.
                                    </li>
                                    <li>
                                        No Work Required in Car.
                                    </li>
                                    <li>
                                        Excellent Mileage , Local Average = 14 km , Long Average = 16 km .
                                    </li>
                                </ul>
                            </div>
                            <!-- Related Image  -->
                            <div class="ad-related-img">
                                <img src="{{ asset('adforest/images/car-img1.png') }}" alt="" class="img-responsive center-block">
                            </div>
                            <!-- Ad Specifications -->
                            <div class="specification">
                                <!-- Heading Area -->
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        Specifications
                                    </h3>
                                </div>
                                <p>
                                    samsung galaxy note 2 new condition with handsfree and charger urgent sale. with
                                    book pouch original 4g lte. 16 gb condition 10/10 andriod kitkat4.4.2
                                </p>
                                <p>
                                    Bank Leased 5 Year plan 2013 Honda Civic 1.8 Vti Oriel Prosmatec Automatic ( New
                                    Shape ) Attractive Silver Color 1 year installments paid Lahore Reg number Well
                                    Maintained Insurance + tracker etc included Options: Sunroof
                                </p>
                                <p>
                                    Chilled AC Power Windows Power Steering ABS braking system ETC 15000 km carefully
                                    driven No SMS / Email , Serious Buyers Requested To Call .
                                </p>
                                <p>
                                    Chilled AC Power Windows Power Steering ABS braking system ETC 15000 km carefully
                                    driven No SMS / Email , Serious Buyers Requested To Call .
                                </p>
                                <p>
                                    Bank Leased 5 Year plan 2013 Honda Civic 1.8 Vti Oriel Prosmatec Automatic ( New
                                    Shape ) Attractive Silver Color 1 year installments paid Lahore Reg number Well
                                    Maintained Insurance + tracker etc included Options: Sunroof
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- Single Ad End -->
                    <!-- Price Alert -->
                    <div class="alert-box-container  margin-top-30">
                        <div class="well">
                            <h3>Create Alert</h3>
                            <p>Receive emails for the latest ads matching your search criteria</p>
                            <form>
                                <div class="row">
                                    <div class="col-md-5 col-xs-12 col-sm-12">
                                        <input placeholder="Enter Your Email " type="text" class="form-control">
                                    </div>
                                    <div class="col-md-4 col-xs-12 col-sm-12">
                                        <select class="alerts">
                                            <option value="1">Daily</option>
                                            <option value="7">Weekly</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-xs-12 col-sm-12">
                                        <input class="btn btn-theme btn-block" value="Submit" type="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Price Alert End -->
                    <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
                    <div class="grid-panel margin-top-30">
                        <div class="heading-panel">
                            <div class="col-xs-12 col-md-12 col-sm-12">
                                <h3 class="main-title text-left">
                                    Related Ads
                                </h3>
                            </div>
                        </div>
                        <!-- Ads Archive -->
                        <div class="posts-masonry">
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <!-- Ads Listing -->
                                <div class="ads-list-archive">
                                    <!-- Image Block -->
                                    <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                        <!-- Img Block -->
                                        <div class="ad-archive-img">
                                            <a href="#">
                                                <div class="ribbon popular"></div>
                                                <img class="img-responsive" src="{{ asset('adforest/images/posting/10.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <!-- Img Block -->
                                    </div>
                                    <!-- Ads Listing -->
                                    <div class="clearfix visible-xs-block"></div>
                                    <!-- Content Block -->
                                    <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                        <!-- Ad Desc -->
                                        <div class="ad-archive-desc">
                                            <!-- Price -->
                                            <div class="ad-price">$38,000</div>
                                            <!-- Title -->
                                            <h3>2013 BMW M3 GTR </h3>
                                            <!-- Category -->
                                            <div class="category-title"><span><a href="#">Car & Bikes</a></span></div>
                                            <!-- Short Description -->
                                            <div class="clearfix visible-xs-block"></div>
                                            <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset
                                                ut vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                            <!-- Ad Features -->
                                            <ul class="add_info">
                                                <!-- Contact Details -->
                                                <li>
                                                    <div class="custom-tooltip tooltip-effect-4">
                                                        <span class="tooltip-item"><i class="fa fa-phone"></i></span>
                                                        <div class="tooltip-content">
                                                            <h4>Call Timings</h4>
                                                            <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                            <br> <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                            <br> <strong>Sunday</strong> <span
                                                                    class="label label-success">+92-123-4567</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- Address -->
                                                <li>
                                                    <div class="custom-tooltip tooltip-effect-4">
                                                        <span class="tooltip-item"><i
                                                                    class="fa fa-map-marker"></i></span>
                                                        <div class="tooltip-content">
                                                            <h4>Address</h4>
                                                            Musee du Louvre, 75058 Paris - France
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- Ad Type -->
                                                <li>
                                                    <div class="custom-tooltip tooltip-effect-4">
                                                        <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                        <div class="tooltip-content"><strong>Condition</strong> <span
                                                                    class="label label-danger">Used</span></div>
                                                    </div>
                                                </li>
                                                <!-- Ad Type -->
                                                <li>
                                                    <div class="custom-tooltip tooltip-effect-4">
                                                        <span class="tooltip-item"><i class="fa fa-check-square-o"></i></span>
                                                        <div class="tooltip-content"><strong>Warrinty</strong> <span
                                                                    class="label label-danger">No </span></div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- Ad History -->
                                            <div class="clearfix archive-history">
                                                <div class="last-updated">Last Updated: 1 day ago</div>
                                                <div class="ad-meta"><a class="btn save-ad"><i
                                                                class="fa fa-heart-o"></i> Save Ad.</a> <a
                                                            class="btn btn-success"><i class="fa fa-phone"></i> View
                                                        Details.</a></div>
                                            </div>
                                        </div>
                                        <!-- Ad Desc End -->
                                    </div>
                                    <!-- Content Block End -->
                                </div>
                                <!-- Ads Listing -->
                                <div class="ads-list-archive">
                                    <!-- Image Block -->
                                    <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                        <!-- Img Block -->
                                        <div class="ad-archive-img">
                                            <a href="#">
                                                <div class="ribbon popular"></div>
                                                <img class="img-responsive" src="{{ asset('adforest/images/posting/9.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <!-- Img Block -->
                                    </div>
                                    <!-- Ads Listing -->
                                    <div class="clearfix visible-xs-block"></div>
                                    <!-- Content Block -->
                                    <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                        <!-- Ad Desc -->
                                        <div class="ad-archive-desc">
                                            <!-- Price -->
                                            <div class="ad-price">$500</div>
                                            <!-- Title -->
                                            <h3>Honda Civic 2017 Sports Edition</h3>
                                            <!-- Category -->
                                            <div class="category-title"><span><a href="#">Car & Bikes</a></span></div>
                                            <!-- Short Description -->
                                            <div class="clearfix visible-xs-block"></div>
                                            <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset
                                                ut vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                            <!-- Ad Features -->
                                            <ul class="add_info">
                                                <!-- Contact Details -->
                                                <li>
                                                    <div class="custom-tooltip tooltip-effect-4">
                                                        <span class="tooltip-item"><i class="fa fa-phone"></i></span>
                                                        <div class="tooltip-content">
                                                            <h4>Call Timings</h4>
                                                            <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                            <br> <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                            <br> <strong>Sunday</strong> <span
                                                                    class="label label-success">+92-123-4567</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- Address -->
                                                <li>
                                                    <div class="custom-tooltip tooltip-effect-4">
                                                        <span class="tooltip-item"><i
                                                                    class="fa fa-map-marker"></i></span>
                                                        <div class="tooltip-content">
                                                            <h4>Address</h4>
                                                            Musee du Louvre, 75058 Paris - France
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- Ad Type -->
                                                <li>
                                                    <div class="custom-tooltip tooltip-effect-4">
                                                        <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                        <div class="tooltip-content"><strong>Condition</strong> <span
                                                                    class="label label-danger">Used</span></div>
                                                    </div>
                                                </li>
                                                <!-- Ad Type -->
                                                <li>
                                                    <div class="custom-tooltip tooltip-effect-4">
                                                        <span class="tooltip-item"><i class="fa fa-check-square-o"></i></span>
                                                        <div class="tooltip-content"><strong>Warrinty</strong> <span
                                                                    class="label label-danger">No </span></div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- Ad History -->
                                            <div class="clearfix archive-history">
                                                <div class="last-updated">Last Updated: 1 day ago</div>
                                                <div class="ad-meta"><a class="btn save-ad"><i
                                                                class="fa fa-heart-o"></i> Save Ad.</a> <a
                                                            class="btn btn-success"><i class="fa fa-phone"></i> View
                                                        Details.</a></div>
                                            </div>
                                        </div>
                                        <!-- Ad Desc End -->
                                    </div>
                                    <!-- Content Block End -->
                                </div>
                                <!-- Ads Listing -->
                                <div class="ads-list-archive">
                                    <!-- Image Block -->
                                    <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                        <!-- Img Block -->
                                        <div class="ad-archive-img">
                                            <a href="#">
                                                <div class="ribbon popular"></div>
                                                <img class="img-responsive" src="{{ asset('adforest/images/posting/2.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <!-- Img Block -->
                                    </div>
                                    <!-- Ads Listing -->
                                    <div class="clearfix visible-xs-block"></div>
                                    <!-- Content Block -->
                                    <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                        <!-- Ad Desc -->
                                        <div class="ad-archive-desc">
                                            <!-- Price -->
                                            <div class="ad-price">$449</div>
                                            <!-- Title -->
                                            <h3>Sony Cyber-shot 20.2-Megapixel</h3>
                                            <!-- Category -->
                                            <div class="category-title"><span><a href="#">Art & Toys </a></span></div>
                                            <!-- Short Description -->
                                            <div class="clearfix visible-xs-block"></div>
                                            <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset
                                                ut vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                            <!-- Ad Features -->
                                            <ul class="add_info">
                                                <!-- Contact Details -->
                                                <li>
                                                    <div class="custom-tooltip tooltip-effect-4">
                                                        <span class="tooltip-item"><i class="fa fa-phone"></i></span>
                                                        <div class="tooltip-content">
                                                            <h4>Call Timings</h4>
                                                            <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                            <br> <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                            <br> <strong>Sunday</strong> <span
                                                                    class="label label-success">+92-123-4567</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- Address -->
                                                <li>
                                                    <div class="custom-tooltip tooltip-effect-4">
                                                        <span class="tooltip-item"><i
                                                                    class="fa fa-map-marker"></i></span>
                                                        <div class="tooltip-content">
                                                            <h4>Address</h4>
                                                            Musee du Louvre, 75058 Paris - France
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- Ad Type -->
                                                <li>
                                                    <div class="custom-tooltip tooltip-effect-4">
                                                        <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                        <div class="tooltip-content"><strong>Condition</strong> <span
                                                                    class="label label-danger">Used</span></div>
                                                    </div>
                                                </li>
                                                <!-- Ad Type -->
                                                <li>
                                                    <div class="custom-tooltip tooltip-effect-4">
                                                        <span class="tooltip-item"><i class="fa fa-check-square-o"></i></span>
                                                        <div class="tooltip-content"><strong>Warrinty</strong> <span
                                                                    class="label label-danger">No </span></div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- Ad History -->
                                            <div class="clearfix archive-history">
                                                <div class="last-updated">Last Updated: 1 day ago</div>
                                                <div class="ad-meta"><a class="btn save-ad"><i
                                                                class="fa fa-heart-o"></i> Save Ad.</a> <a
                                                            class="btn btn-success"><i class="fa fa-phone"></i> View
                                                        Details.</a></div>
                                            </div>
                                        </div>
                                        <!-- Ad Desc End -->
                                    </div>
                                    <!-- Content Block End -->
                                </div>
                                <!-- Ads Listing -->
                                <div class="ads-list-archive">
                                    <!-- Image Block -->
                                    <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                        <!-- Img Block -->
                                        <div class="ad-archive-img">
                                            <a href="#"> <img class="img-responsive" src="{{ asset('adforest/images/posting/1.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <!-- Img Block -->
                                    </div>
                                    <!-- Ads Listing -->
                                    <div class="clearfix visible-xs-block"></div>
                                    <!-- Content Block -->
                                    <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                        <!-- Ad Desc -->
                                        <div class="ad-archive-desc">
                                            <!-- Price -->
                                            <div class="ad-price">$350</div>
                                            <!-- Title -->
                                            <h3>Sony Xperia Z5 Waterproof</h3>
                                            <!-- Category -->
                                            <div class="category-title"><span><a href="#">Mobiles</a></span></div>
                                            <!-- Short Description -->
                                            <div class="clearfix visible-xs-block"></div>
                                            <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset
                                                ut vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                            <!-- Ad Features -->
                                            <ul class="add_info">
                                                <!-- Contact Details -->
                                                <li>
                                                    <div class="custom-tooltip tooltip-effect-4">
                                                        <span class="tooltip-item"><i class="fa fa-phone"></i></span>
                                                        <div class="tooltip-content">
                                                            <h4>Call Timings</h4>
                                                            <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                            <br> <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                            <br> <strong>Sunday</strong> <span
                                                                    class="label label-success">+92-123-4567</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- Address -->
                                                <li>
                                                    <div class="custom-tooltip tooltip-effect-4">
                                                        <span class="tooltip-item"><i
                                                                    class="fa fa-map-marker"></i></span>
                                                        <div class="tooltip-content">
                                                            <h4>Address</h4>
                                                            Musee du Louvre, 75058 Paris - France
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- Ad Type -->
                                                <li>
                                                    <div class="custom-tooltip tooltip-effect-4">
                                                        <span class="tooltip-item"><i class="fa fa-cog"></i></span>
                                                        <div class="tooltip-content"><strong>Condition</strong> <span
                                                                    class="label label-danger">Used</span></div>
                                                    </div>
                                                </li>
                                                <!-- Ad Type -->
                                                <li>
                                                    <div class="custom-tooltip tooltip-effect-4">
                                                        <span class="tooltip-item"><i class="fa fa-check-square-o"></i></span>
                                                        <div class="tooltip-content"><strong>Warrinty</strong> <span
                                                                    class="label label-danger">No </span></div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- Ad History -->
                                            <div class="clearfix archive-history">
                                                <div class="last-updated">Last Updated: 1 day ago</div>
                                                <div class="ad-meta"><a class="btn save-ad"><i
                                                                class="fa fa-heart-o"></i> Save Ad.</a> <a
                                                            class="btn btn-success"><i class="fa fa-phone"></i> View
                                                        Details.</a></div>
                                            </div>
                                        </div>
                                        <!-- Ad Desc End -->
                                    </div>
                                    <!-- Content Block End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- =-=-=-=-=-=-= Latest Ads End =-=-=-=-=-=-= -->
                </div>
                <!-- Right Sidebar -->
                <div class="col-md-4 col-xs-12 col-sm-12">
                    <!-- Sidebar Widgets -->
                    <div class="sidebar">
                        <!-- Contact info -->
                        <div class="contact white-bg">
                            <!-- Email Button trigger modal -->
                            <button class="btn-block btn-contact contactEmail" data-toggle="modal"
                                    data-target=".price-quote">Contact Seller Via Email
                            </button>
                            <!-- Email Modal -->
                            <button class="btn-block btn-contact contactPhone number" data-last="111111X">0320<span>XXXXXXX</span>
                            </button>
                        </div>
                        <!-- Price info block -->
                        <div class="ad-listing-price">
                            <p>Rs. 22,000</p>
                        </div>
                        <!-- User Info -->
                        <div class="white-bg user-contact-info">
                            <div class="user-info-card">
                                <div class="user-photo col-md-4 col-sm-3  col-xs-4">
                                    <img src="{{ asset('adforest/images/users/3.jpg') }}" alt="">
                                </div>
                                <div class="user-information no-padding col-md-8 col-sm-9 col-xs-8">
                                    <span class="user-name"><a class="hover-color"
                                                               href="profile.html">Sonu Monu</a></span>
                                    <div class="item-date">
                                        <span class="ad-pub">Published on: 10 Dec 2017</span><br>
                                        <a href="#" class="link">More Ads</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ad-listing-meta">
                                <ul>
                                    <li>Ad Id: <span class="color">4143</span></li>
                                    <li>Categories: <span class="color">Used Cars</span></li>
                                    <li>Visits: <span class="color">9</span></li>
                                    <li>Location: <span class="color">New York, USA</span></li>
                                </ul>
                            </div>
                            <div id="itemMap" style="width: 100%; height: 370px; margin-bottom:5px;"></div>
                        </div>
                        <!-- Featured Ads -->
                        <div class="widget">
                            <div class="widget-heading">
                                <h4 class="panel-title"><a>Featured Ads</a></h4>
                            </div>
                            <div class="widget-content">
                                <div class="featured-slider-3">
                                    <!-- Featured Ads -->
                                    <div class="item">
                                        <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                            <!-- Ad Box -->
                                            <div class="category-grid-box">
                                                <!-- Ad Img -->
                                                <div class="category-grid-img">
                                                    <img class="img-responsive" alt="" src="{{ asset('adforest/images/posting/car-3.jpg') }}">
                                                    <!-- Ad Status -->
                                                    <!-- User Review -->
                                                    <div class="user-preview">
                                                        <a href="#"> <img src="{{ asset('adforest/images/users/2.jpg') }}"
                                                                          class="avatar avatar-small" alt=""> </a>
                                                    </div>
                                                    <!-- View Details --><a href="" class="view-details">View
                                                        Details</a>
                                                </div>
                                                <!-- Ad Img End -->
                                                <div class="short-description">
                                                    <!-- Ad Category -->
                                                    <div class="category-title"><span><a href="#">Cars</a></span></div>
                                                    <!-- Ad Title -->
                                                    <h3><a title="" href="single-page-listing.html">2017 Honda Civic
                                                            EX</a></h3>
                                                    <!-- Price -->
                                                    <div class="price">$18,200 <span
                                                                class="negotiable">(Negotiable)</span></div>
                                                </div>
                                                <!-- Addition Info -->
                                                <div class="ad-info">
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>London</li>
                                                        <li><i class="fa fa-clock-o"></i> 15 minutes ago</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Ad Box End -->
                                        </div>
                                    </div>
                                    <!-- Featured Ads -->
                                    <div class="item">
                                        <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                            <!-- Ad Box -->
                                            <div class="category-grid-box">
                                                <!-- Ad Img -->
                                                <div class="category-grid-img">
                                                    <img class="img-responsive" alt="" src="{{ asset('adforest/images/posting/fur-3.jpg') }}">
                                                    <!-- Ad Status -->
                                                    <!-- User Review -->
                                                    <div class="user-preview">
                                                        <a href="#"> <img src="{{ asset('adforest/images/users/2.jpg') }}"
                                                                          class="avatar avatar-small" alt=""> </a>
                                                    </div>
                                                    <!-- View Details --><a href="" class="view-details">View
                                                        Details</a>
                                                </div>
                                                <!-- Ad Img End -->
                                                <div class="short-description">
                                                    <!-- Ad Category -->
                                                    <div class="category-title"><span><a
                                                                    href="#">Cameras & Accessories</a></span></div>
                                                    <!-- Ad Title -->
                                                    <h3><a title="" href="single-page-listing.html">Office Furniture For
                                                            Sale </a></h3>
                                                    <!-- Price -->
                                                    <div class="price">$250 <span class="negotiable">(Negotiable)</span>
                                                    </div>
                                                </div>
                                                <!-- Addition Info -->
                                                <div class="ad-info">
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>London</li>
                                                        <li><i class="fa fa-clock-o"></i> 15 minutes ago</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Ad Box End -->
                                        </div>
                                    </div>
                                    <!-- Featured Ads -->
                                    <div class="item">
                                        <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                            <!-- Ad Box -->
                                            <div class="category-grid-box">
                                                <!-- Ad Img -->
                                                <div class="category-grid-img">
                                                    <img class="img-responsive" alt="" src="{{ asset('adforest/images/posting/mob-6.jpg') }}">
                                                    <!-- Ad Status -->
                                                    <!-- User Review -->
                                                    <div class="user-preview">
                                                        <a href="#"> <img src="{{ asset('adforest/images/users/2.jpg') }}"
                                                                          class="avatar avatar-small" alt=""> </a>
                                                    </div>
                                                    <!-- View Details --><a href="" class="view-details">View
                                                        Details</a>
                                                </div>
                                                <!-- Ad Img End -->
                                                <div class="short-description">
                                                    <!-- Ad Category -->
                                                    <div class="category-title"><span><a
                                                                    href="#">Cameras & Accessories</a></span></div>
                                                    <!-- Ad Title -->
                                                    <h3><a title="" href="single-page-listing.html">Sony Xperia Z5 </a>
                                                    </h3>
                                                    <!-- Price -->
                                                    <div class="price">$250 <span class="negotiable">(Negotiable)</span>
                                                    </div>
                                                </div>
                                                <!-- Addition Info -->
                                                <div class="ad-info">
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>London</li>
                                                        <li><i class="fa fa-clock-o"></i> 15 minutes ago</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Ad Box End -->
                                        </div>
                                    </div>
                                    <!-- Featured Ads -->
                                    <div class="item">
                                        <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                            <!-- Ad Box -->
                                            <div class="category-grid-box">
                                                <!-- Ad Img -->
                                                <div class="category-grid-img">
                                                    <img class="img-responsive" alt="" src="{{ asset('adforest/images/posting/cam-2.jpg') }}">
                                                    <!-- Ad Status -->
                                                    <!-- User Review -->
                                                    <div class="user-preview">
                                                        <a href="#"> <img src="{{ asset('adforest/images/users/2.jpg') }}"
                                                                          class="avatar avatar-small" alt=""> </a>
                                                    </div>
                                                    <!-- View Details --><a href="" class="view-details">View
                                                        Details</a>
                                                </div>
                                                <!-- Ad Img End -->
                                                <div class="short-description">
                                                    <!-- Ad Category -->
                                                    <div class="category-title"><span><a
                                                                    href="#">Cameras & Accessories</a></span></div>
                                                    <!-- Ad Title -->
                                                    <h3><a title="" href="single-page-listing.html">Sony Xperia Z5 </a>
                                                    </h3>
                                                    <!-- Price -->
                                                    <div class="price">$250 <span class="negotiable">(Negotiable)</span>
                                                    </div>
                                                </div>
                                                <!-- Addition Info -->
                                                <div class="ad-info">
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>London</li>
                                                        <li><i class="fa fa-clock-o"></i> 15 minutes ago</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Ad Box End -->
                                        </div>
                                    </div>
                                    <!-- Featured Ads -->
                                    <div class="item">
                                        <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                            <!-- Ad Box -->
                                            <div class="category-grid-box">
                                                <!-- Ad Img -->
                                                <div class="category-grid-img">
                                                    <img class="img-responsive" alt="" src="{{ asset('adforest/images/posting/cam-2.jpg') }}">
                                                    <!-- Ad Status -->
                                                    <!-- User Review -->
                                                    <div class="user-preview">
                                                        <a href="#"> <img src="{{ asset('adforest/images/users/2.jpg') }}"
                                                                          class="avatar avatar-small" alt=""> </a>
                                                    </div>
                                                    <!-- View Details --><a href="" class="view-details">View
                                                        Details</a>
                                                </div>
                                                <!-- Ad Img End -->
                                                <div class="short-description">
                                                    <!-- Ad Category -->
                                                    <div class="category-title"><span><a
                                                                    href="#">Cameras & Accessories</a></span></div>
                                                    <!-- Ad Title -->
                                                    <h3><a title="" href="single-page-listing.html">Sony Xperia Z5 </a>
                                                    </h3>
                                                    <!-- Price -->
                                                    <div class="price">$250 <span class="negotiable">(Negotiable)</span>
                                                    </div>
                                                </div>
                                                <!-- Addition Info -->
                                                <div class="ad-info">
                                                    <ul>
                                                        <li><i class="fa fa-map-marker"></i>London</li>
                                                        <li><i class="fa fa-clock-o"></i> 15 minutes ago</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Ad Box End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Recent Ads -->
                        <div class="widget">
                            <div class="widget-heading">
                                <h4 class="panel-title"><a>Recent Ads</a></h4>
                            </div>
                            <div class="widget-content recent-ads">
                                <!-- Ads -->
                                <div class="recent-ads-list">
                                    <div class="recent-ads-container">
                                        <div class="recent-ads-list-image">
                                            <a href="#" class="recent-ads-list-image-inner">
                                                <img src="{{ asset('adforest/images/posting/thumb-1.jpg') }}" alt="">
                                            </a><!-- /.recent-ads-list-image-inner -->
                                        </div>
                                        <!-- /.recent-ads-list-image -->
                                        <div class="recent-ads-list-content">
                                            <h3 class="recent-ads-list-title">
                                                <a href="#">Sony Xperia Z1</a>
                                            </h3>
                                            <ul class="recent-ads-list-location">
                                                <li><a href="#">New York</a>,</li>
                                                <li><a href="#">Brooklyn</a></li>
                                            </ul>
                                            <div class="recent-ads-list-price">
                                                $ 17,000
                                            </div>
                                            <!-- /.recent-ads-list-price -->
                                        </div>
                                        <!-- /.recent-ads-list-content -->
                                    </div>
                                    <!-- /.recent-ads-container -->
                                </div>
                                <!-- Ads -->
                                <div class="recent-ads-list">
                                    <div class="recent-ads-container">
                                        <div class="recent-ads-list-image">
                                            <a href="#" class="recent-ads-list-image-inner">
                                                <img src="{{ asset('adforest/images/posting/thumb-2.jpg') }}" alt="">
                                            </a><!-- /.recent-ads-list-image-inner -->
                                        </div>
                                        <!-- /.recent-ads-list-image -->
                                        <div class="recent-ads-list-content">
                                            <h3 class="recent-ads-list-title">
                                                <a href="#">2017 BMW i8</a>
                                            </h3>
                                            <ul class="recent-ads-list-location">
                                                <li><a href="#">New York</a>,</li>
                                                <li><a href="#">Brooklyn</a></li>
                                            </ul>
                                            <div class="recent-ads-list-price">
                                                $ 66,000
                                            </div>
                                            <!-- /.recent-ads-list-price -->
                                        </div>
                                        <!-- /.recent-ads-list-content -->
                                    </div>
                                    <!-- /.recent-ads-container -->
                                </div>
                                <!-- Ads -->
                                <div class="recent-ads-list">
                                    <div class="recent-ads-container">
                                        <div class="recent-ads-list-image">
                                            <a href="#" class="recent-ads-list-image-inner">
                                                <img src="{{ asset('adforest/images/posting/thumb-3.jpg') }}" alt="">
                                            </a><!-- /.recent-ads-list-image-inner -->
                                        </div>
                                        <!-- /.recent-ads-list-image -->
                                        <div class="recent-ads-list-content">
                                            <h3 class="recent-ads-list-title">
                                                <a href="#">Dell Latitude e7440</a>
                                            </h3>
                                            <ul class="recent-ads-list-location">
                                                <li><a href="#">New York</a>,</li>
                                                <li><a href="#">Brooklyn</a></li>
                                            </ul>
                                            <div class="recent-ads-list-price">
                                                $ 37,000
                                            </div>
                                            <!-- /.recent-ads-list-price -->
                                        </div>
                                        <!-- /.recent-ads-list-content -->
                                    </div>
                                    <!-- /.recent-ads-container -->
                                </div>
                                <!-- Ads -->
                                <div class="recent-ads-list">
                                    <div class="recent-ads-container">
                                        <div class="recent-ads-list-image">
                                            <a href="#" class="recent-ads-list-image-inner">
                                                <img src="{{ asset('adforest/images/posting/thumb-4.jpg') }}" alt="">
                                            </a><!-- /.recent-ads-list-image-inner -->
                                        </div>
                                        <!-- /.recent-ads-list-image -->
                                        <div class="recent-ads-list-content">
                                            <h3 class="recent-ads-list-title">
                                                <a href="#">Sport Stylish Steering</a>
                                            </h3>
                                            <ul class="recent-ads-list-location">
                                                <li><a href="#">New York</a>,</li>
                                                <li><a href="#">Brooklyn</a></li>
                                            </ul>
                                            <div class="recent-ads-list-price">
                                                $ 11,000
                                            </div>
                                            <!-- /.recent-ads-list-price -->
                                        </div>
                                        <!-- /.recent-ads-list-content -->
                                    </div>
                                    <!-- /.recent-ads-container -->
                                </div>
                                <!-- Ads -->
                                <div class="recent-ads-list">
                                    <div class="recent-ads-container">
                                        <div class="recent-ads-list-image">
                                            <a href="#" class="recent-ads-list-image-inner">
                                                <img src="{{ asset('adforest/images/posting/thumb-5.jpg') }}" alt="">
                                            </a><!-- /.recent-ads-list-image-inner -->
                                        </div>
                                        <!-- /.recent-ads-list-image -->
                                        <div class="recent-ads-list-content">
                                            <h3 class="recent-ads-list-title">
                                                <a href="#">Apple Wrist Watches</a>
                                            </h3>
                                            <ul class="recent-ads-list-location">
                                                <li><a href="#">New York</a>,</li>
                                                <li><a href="#">Brooklyn</a></li>
                                            </ul>
                                            <div class="recent-ads-list-price">
                                                $ 20,000
                                            </div>
                                            <!-- /.recent-ads-list-price -->
                                        </div>
                                        <!-- /.recent-ads-list-content -->
                                    </div>
                                    <!-- /.recent-ads-container -->
                                </div>
                            </div>
                        </div>
                        <!-- Saftey Tips  -->
                        <div class="widget">
                            <div class="widget-heading">
                                <h4 class="panel-title"><a>Safety tips for deal</a></h4>
                            </div>
                            <div class="widget-content saftey">
                                <ol>
                                    <li>Use a safe location to meet seller</li>
                                    <li>Avoid cash transactions</li>
                                    <li>Beware of unrealistic offers</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Widgets End -->
                </div>
                <!-- Middle Content Area  End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>
@endsection