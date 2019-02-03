<header class="static">
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
                    @if(Auth::check())
                        <li id="user" class="submenu">
                            <a href="{{ auth()->user()->can('view backend') ? route('admin.dashboard') : route('frontend.user.dashboard') }}">
                                <figure><img src="{{ Auth::user()->profilePictureSrc() }}" alt=""></figure>
                                {{ Auth::user()->first_name }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.auth.logout') }}">@lang('navs.general.logout')</a>
                        </li>
                    @else
                        <li><a href="{{route('frontend.auth.login')}}"><i class="pe-7s-user"></i></a></li>
                        <li><a href="{{route('frontend.auth.register')}}"><i class="pe-7s-add-user"></i></a></li>
                    @endif
                </ul>
                <div class="main-menu">
                    <ul>
                        <li class="submenu">
                            <a href="{{route('frontend.index')}}" class="show-submenu">@lang('menus.main_page')</a>
                        </li>
                        <li class="submenu">
                            <a href="#0" class="show-submenu">Metody leczenia<i class="icon-down-open-mini"></i></a>
                            <ul>
                                @foreach(\App\Models\Specialization::all() as $specialization)
                                    <li><a href="{{ route('frontend.user.specialist.index') }}?specialization={{ $specialization->id }}">{{ $specialization->name }}</a>
                                @endforeach
                            </ul>
                        </li>
                        @if(Auth::guest())
                            <li class="submenu">
                                <a href="#0" class="show-submenu">Zarejestruj się<i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="{{route('frontend.auth.register.specialist')}}">Jako Specjalista</a></li>
                                    <li><a href="{{route('frontend.auth.register')}}">Jako użytkownik</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
                <!-- /main-menu -->
            </nav>
        </div>
    </div>
    <!-- /container -->
</header>