<li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/auth*'), 'open') }}" data-toggle="tooltip" data-placement="right" title="@lang('menus.backend.access.title')">
    <a class="nav-link nav-link-collapse collapsed {{ active_class(Active::checkUriPattern('admin/auth*')) }}" data-toggle="collapse" href="#collapseAdminUser" data-parent="#exampleAccordion">
        <i class="fa fa-fw fa-wrench"></i>
        <span class="nav-link-text">@lang('menus.backend.access.title')</span>
        @if ($pending_approval > 0)
            <span class="badge badge-danger">{{ $pending_approval }}</span>
        @endif
    </a>

    <ul class="sidenav-second-level collapse" id="collapseAdminUser">
        <li class="nav-item">
            <a class="{{ active_class(Active::checkUriPattern('admin/auth/user*')) }}" href="{{ route('admin.auth.user.index') }}">
                @lang('labels.backend.access.users.management')

                @if ($pending_approval > 0)
                    <span class="badge badge-danger">{{ $pending_approval }}</span>
                @endif
            </a>
        </li>
        <li class="nav-item">
            <a class="{{ active_class(Active::checkUriPattern('admin/auth/role*')) }}" href="{{ route('admin.auth.role.index') }}">
                @lang('labels.backend.access.roles.management')
            </a>
        </li>
    </ul>
</li>

<li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/log-viewer*'), 'open') }}" data-toggle="tooltip" data-placement="right" title="@lang('menus.backend.log-viewer.main')">
    <a class="nav-link nav-link-collapse collapsed {{ active_class(Active::checkUriPattern('admin/log-viewer*')) }}" data-toggle="collapse" href="#collapseLogViewer" data-parent="#exampleAccordion">
        <i class="fa fa-fw fa-wrench"></i>
        <span class="nav-link-text">@lang('menus.backend.log-viewer.main')</span>
    </a>

    <ul class="sidenav-second-level collapse" id="collapseLogViewer">
        <li class="nav-item">
            <a class="{{ active_class(Active::checkUriPattern('admin/log-viewer')) }}" href="{{ route('log-viewer::dashboard') }}">
                @lang('menus.backend.log-viewer.dashboard')
            </a>
        </li>
        <li class="nav-item">
            <a class="{{ active_class(Active::checkUriPattern('admin/log-viewer/logs*')) }}" href="{{ route('log-viewer::logs.list') }}">
                @lang('menus.backend.log-viewer.logs')
            </a>
        </li>
    </ul>
</li>