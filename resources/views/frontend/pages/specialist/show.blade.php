@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.specialists'))

@section('content')

    <main style="transform: none;">

        <div class="container margin_60" style="transform: none;">
            <div class="row" style="transform: none;">
                <div class="col-xl-8 col-lg-8">
                    <nav id="secondary_nav">
                        <div class="container">
                            <ul class="clearfix">
                                <li><a href="#section_1" class="active">@lang('general.general_info')</a></li>
                                <li><a href="#section_2">@lang('general.reviews')</a></li>
                                <li><a href="#sidebar">@lang('general.booking')</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div id="section_1">
                        <div class="box_general_3">
                            <div class="profile">
                                <div class="row">
                                    <div class="col-lg-5 col-md-4">
                                        <figure>
                                            <img src="{{ $specialist->profilePictureSrc() }}" alt="" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="col-lg-7 col-md-8">
                                        <small>{{ $specialist->mainSpecialization()->name }}</small>
                                        <h1>{{ $specialist->first_name.' '.$specialist->last_name }}</h1>
                                        <span class="rating">
											<i class="icon_star voted"></i>
											<i class="icon_star voted"></i>
											<i class="icon_star voted"></i>
											<i class="icon_star voted"></i>
											<i class="icon_star"></i>
											<small>(145)</small>
											<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
										</span>
                                        <ul class="statistic">
                                            <li>854 Views</li>
                                            <li>124 Patients</li>
                                        </ul>
                                        <ul class="contacts">
                                            <li>
                                                <h6>@lang('general.address')</h6>
                                                {{ $specialist->address }}
                                                <a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"> <strong>@lang('general.view_on_map')</strong></a>
                                            </li>
                                            <li>
                                                <h6>@lang('general.telephone')</h6> <a href="tel://000434323342">+00043 4323342</a> - <a href="tel://000434323342">+00043 4323342</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <!-- /profile -->
                            <div class="indent_title_in">
                                <i class="pe-7s-user"></i>
                                <h3>@lang('general.specialization_description')</h3>
                            </div>
                            <div class="wrapper_indent">
                                {!! $specialist->description !!}
                                <!-- /row-->
                            </div>
                            <!-- /wrapper indent -->

                            <hr>

                            <!--<div class="indent_title_in">
                                <i class="pe-7s-cash"></i>
                                <h3>Prices &amp; Payments</h3>
                                <p>Mussum ipsum cacilds, vidis litro abertis.</p>
                            </div>
                            <div class="wrapper_indent">
                                <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit, posse exerci volutpat has in.</p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Service - Visit</th>
                                            <th>Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>New patient visit</td>
                                            <td>$34</td>
                                        </tr>
                                        <tr>
                                            <td>General consultation</td>
                                            <td>$60</td>
                                        </tr>
                                        <tr>
                                            <td>Back Pain</td>
                                            <td>$40</td>
                                        </tr>
                                        <tr>
                                            <td>Diabetes Consultation</td>
                                            <td>$55</td>
                                        </tr>
                                        <tr>
                                            <td>Eating disorder</td>
                                            <td>$60</td>
                                        </tr>
                                        <tr>
                                            <td>Foot Pain</td>
                                            <td>$35</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>-->
                            <!--  /wrapper_indent -->
                        </div>
                        <!-- /section_1 -->
                    </div>
                    <!-- /box_general -->

                    <div id="section_2">
                        <div class="box_general_3">
                            <div class="reviews-container">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div id="review_summary">
                                            <strong>4.7</strong>
                                            <div class="rating">
                                                <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                            </div>
                                            <small>Based on 4 reviews</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                    </div>
                                </div>
                                <!-- /row -->

                                <hr>

                                <div class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="http://via.placeholder.com/150x150.jpg" alt="">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <div class="rev-info">
                                            Admin – April 03, 2016:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End review-box -->

                                <div class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="http://via.placeholder.com/150x150.jpg" alt="">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <div class="rev-info">
                                            Ahsan – April 01, 2016
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End review-box -->

                                <div class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="http://via.placeholder.com/150x150.jpg" alt="">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <div class="rev-info">
                                            Sara – March 31, 2016
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End review-box -->
                            </div>
                            <!-- End review-container -->
                            <hr>
                            <div class="text-right"><a href="submit-review.html" class="btn_1">Submit review</a></div>
                        </div>
                    </div>
                    <!-- /section_2 -->
                </div>
                <!-- /col -->
                <aside class="col-xl-4 col-lg-4" id="sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                    <!-- /box_general -->
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: relative; transform: none;"><div class="box_general_3 booking">
                            <form>
                                <div class="title">
                                    <h3>Book a Visit</h3>
                                    <small>Monday to Friday 09.00am-06.00pm</small>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input class="form-control picker-input" type="text" id="booking_date" data-lang="en" data-min-year="2017" data-max-year="2020" data-disabled-days="10/17/2017,11/18/2017" data-id="datedropper-0" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input class="form-control td-input" type="text" id="booking_time" value="9:00 am" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                                <ul class="treatments clearfix">
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" class="css-checkbox" id="visit1" name="visit1">
                                            <label for="visit1" class="css-label">Back Pain visit <strong>$55</strong></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" class="css-checkbox" id="visit2" name="visit2">
                                            <label for="visit2" class="css-label">Cardiovascular screen <strong>$55</strong></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" class="css-checkbox" id="visit3" name="visit3">
                                            <label for="visit3" class="css-label">Diabetes consultation <strong>$55</strong></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" class="css-checkbox" id="visit4" name="visit4">
                                            <label for="visit4" class="css-label">General visit <strong>$55</strong></label>
                                        </div>
                                    </li>
                                </ul>
                                <hr>
                                <a href="booking-page.html" class="btn_1 full-width">Book Now</a>
                            </form>
                        </div><div class="resize-sensor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 360px; height: 547px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div></aside>
                <!-- /asdide -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>

@endsection