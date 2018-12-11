@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="hero_home version_1">
        <div class="content">
            <h3>@lang('general.dashboard_find')</h3>
            <p>
                @lang('general.dashboard_find_description')
            </p>
            <form method="post" action="list.html">
                <div id="custom-search-input">
                    <div class="input-group">
                        <input type="text" class=" search-query" placeholder="@lang('general.dashboard_search_ex')">
                        <input type="submit" class="btn_search" value="@lang('general.search')">
                    </div>
                    <ul>
                        <li>
                            <input type="radio" id="all" name="radio_search" value="all" checked>
                            <label for="all">@lang('general.all')</label>
                        </li>
                        <li>
                            <input type="radio" id="doctor" name="radio_search" value="doctor">
                            <label for="doctor">@lang('general.expert')</label>
                        </li>
                        <li>
                            <input type="radio" id="clinic" name="radio_search" value="clinic">
                            <label for="clinic">@lang('general.method')</label>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
    <!-- /Hero -->

    <div class="container margin_120_95">
        <div class="main_title">
            <h2>@lang('general.dashboard_list_choose')</h2>
            <p>@lang('general.dashboard_list_choose_description')</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="list_home">
                    <div class="list_title">
                        <i class="icon_pin_alt"></i>
                        <h3>@lang('general.find_by_region')</h3>
                    </div>
                    <ul>
                        @foreach(['dolnośląskie','kujawsko-pomorskie','lubelskie','lubuskie','łódzkie','małopolskie','mazowieckie','opolskie','podkarpackie','podlaskie','pomorskie','śląskie','świętokrzyskie','warmińsko-mazurskie','wielkopolskie','zachodniopomorskie'] as $regionaName)
                            <li><a href="#0"><strong>23</strong>{{ ucfirst($regionaName) }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="list_home">
                    <div class="list_title">
                        <i class="icon_archive_alt"></i>
                        <h3>@lang('general.find_by_method')</h3>
                    </div>
                    <ul>
                        <li><a href="#0"><strong>23</strong>Allergist</a></li>
                        <li><a href="#0"><strong>23</strong>Cardiologist</a></li>
                        <li><a href="#0"><strong>23</strong>Chiropractor</a></li>
                        <li><a href="#0"><strong>23</strong>Dentist</a></li>
                        <li><a href="#0"><strong>23</strong>Dermatologist</a></li>
                        <li><a href="#0"><strong>23</strong>Gastroenterologist</a></li>
                        <li><a href="#0"><strong>23</strong>Ophthalmologist</a></li>
                        <li><a href="#0"><strong>23</strong>Optometrist</a></li>
                        <li><a href="#0"><strong>23</strong>Pediatrician</a></li>
                        <li><a href="#0">More....</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

    <div class="bg_color_1">
        <div class="container margin_120_95">
            <div class="main_title">
                <h2>@lang('general.most_viewed_experts')</h2>
                <p>@lang('general.most_viewed_experts_description')</p>
            </div>
            <div id="reccomended" class="owl-carousel owl-theme">
                <div class="item">
                    <a href="detail-page.html">
                        <div class="views"><i class="icon-eye-7"></i>140</div>
                        <div class="title">
                            <h4>Dr. Julia Holmes<em>Pediatrician - Cardiologist</em></h4>
                        </div><img src="http://via.placeholder.com/350x500.jpg" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="detail-page.html">
                        <div class="views"><i class="icon-eye-7"></i>120</div>
                        <div class="title">
                            <h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
                        </div><img src="http://via.placeholder.com/350x500.jpg" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="detail-page.html">
                        <div class="views"><i class="icon-eye-7"></i>115</div>
                        <div class="title">
                            <h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
                        </div><img src="http://via.placeholder.com/350x500.jpg" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="detail-page.html">
                        <div class="views"><i class="icon-eye-7"></i>98</div>
                        <div class="title">
                            <h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
                        </div><img src="http://via.placeholder.com/350x500.jpg" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="detail-page.html">
                        <div class="views"><i class="icon-eye-7"></i>98</div>
                        <div class="title">
                            <h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
                        </div><img src="http://via.placeholder.com/350x500.jpg" alt="">
                    </a>
                </div>
            </div>
            <!-- /carousel -->
        </div>
        <!-- /container -->
    </div>
    <!-- /white_bg -->



    <div id="app_section">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-5">
                    <p><img src="img/frontend/app_img.svg" alt="" class="img-fluid" width="500" height="433"></p>
                </div>
                <div class="col-md-6">
                    <small>Oferta specjalna!</small>
                    <h3>Załóż <strong>Swój profil</strong> za darmo!</h3>
                    <p class="lead">Jeśli jesteś specjalistą z dziedziny medycyny alternatywnej możesz <strong>bez żadnych kosztów</strong> założyć swój profil w serwisie <strong>Remedy</strong>. Wystaczy wypełnić jeden formularz a dzieki temu ty i twój biznes będzie widoczny w sieci jak nigdy dotąd! </p>
                    <div class="app_buttons wow" data-wow-offset="100">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 43.1 85.9" style="enable-background:new 0 0 43.1 85.9;" xml:space="preserve">
                                <path stroke-linecap="round" stroke-linejoin="round" class="st0 draw-arrow" d="M11.3,2.5c-5.8,5-8.7,12.7-9,20.3s2,15.1,5.3,22c6.7,14,18,25.8,31.7,33.1" />
                            <path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-1" d="M40.6,78.1C39,71.3,37.2,64.6,35.2,58" />
                            <path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-2" d="M39.8,78.5c-7.2,1.7-14.3,3.3-21.5,4.9" />
                            </svg>
                        <a href="#0" class="fadeIn"><img src="img/frontend/apple_app.png" alt="" width="150" height="50" data-retina="true"></a>
                        <a href="#0" class="fadeIn"><img src="img/frontend/google_play_app.png" alt="" width="150" height="50" data-retina="true"></a>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /app_section -->
@endsection