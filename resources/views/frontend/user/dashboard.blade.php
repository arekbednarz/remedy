@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    <main>

        <div class="container margin_60">
            <div class="row">

                @include('frontend.user.menu')


                <div class="col-lg-9" id="faq">
                    <h4 class="nomargin_top">@lang('general.dashboard')</h4>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card dashboard text-white bg-primary o-hidden h-100">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fa fa-fw fa-envelope-open"></i>
                                    </div>
                                    <div class="mr-5"><h5>26 New Messages!</h5></div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="messages.html">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                          </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card dashboard text-white bg-danger o-hidden h-100">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fa fa-fw fa-heart"></i>
                                    </div>
                                    <div class="mr-5"><h5>10 New Bookmarks!</h5></div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="bookmarks.html">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </main>
@endsection
