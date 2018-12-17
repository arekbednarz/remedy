<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

    <li class="nav-item">
        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/dashboard')) }}" href="{{ route('admin.dashboard') }}" data-toggle="tooltip" data-placement="right" title="@lang('menus.backend.sidebar.dashboard')">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">@lang('menus.backend.sidebar.dashboard')</span>
        </a>
    </li>

    @if ($logged_in_user->isAdmin())
        @include('backend.includes.partials.admin_sidebar_positions')
    @endif

    @if($logged_in_user->isSpecialist())
        @include('backend.includes.partials.specialist_sidebar_positions')
    @endif

</ul>
<ul class="navbar-nav sidenav-toggler">
    <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
        </a>
    </li>
</ul>
