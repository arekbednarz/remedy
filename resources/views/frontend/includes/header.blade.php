<header class="header_sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div id="logo_home">
                    <h1><a href="{{ route('frontend.index') }}" title="Remedy">Remedy</a></h1>
                </div>
            </div>
            <nav class="col-lg-9 col-6">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="{{route('frontend.index')}}"><span>Menu mobile</span></a>
                <ul id="top_access">
                    <li><a href="{{route('frontend.auth.login')}}"><i class="pe-7s-user"></i></a></li>
                    <li><a href="{{route('frontend.auth.register')}}"><i class="pe-7s-add-user"></i></a></li>
                </ul>
                <div class="main-menu">
                    <ul>
                        <li class="submenu">
                            <a href="{{route('frontend.index')}}" class="show-submenu">@lang('menus.main_page')</a>
                        </li>
                        <li class="submenu">
                            <a href="#0" class="show-submenu">Metody leczenia<i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li class="third-level"><a href="#0">Akupresura</a>
                                    <ul>
                                        <li><a href="list.html">Refleksologia</a></li>
                                        <li><a href="grid-list.html">Masaż głowy</a></li>
                                    </ul>
                                </li>
                                <li><a href="submit-review.html">Urynoterapia</a></li>
                                <li><a href="blog-1.html">Akupunktura</a></li>
                                <li><a href="badges.html">Homeopatia</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#0" class="show-submenu">Zarejestruj się<i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="{{route('frontend.auth.register.specialist')}}">Jako Specjalista</a></li>
                                <li><a href="{{route('frontend.auth.register')}}">Jako użytkownik</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /main-menu -->
            </nav>
        </div>
    </div>
    <!-- /container -->
</header>