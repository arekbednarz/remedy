@extends('frontend.layouts.app')

@push('after-styles')
    <link href="{{ asset('/css/frontend/pages/profile_details.css') }}" rel="stylesheet">
@endpush

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
                    <!-- /box_general -->

                    @include('frontend.pages.specialist.show_general')

                    @include('frontend.pages.specialist.show_ratings')


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