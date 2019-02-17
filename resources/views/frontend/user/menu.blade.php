<aside class="col-lg-3" id="sidebar">
    <!--/sticky -->
    <div class="theiaStickySidebar">
        <div class="box_style_cat" id="faq_box">
            <ul id="cat_nav">
                <li><a href="{{ route('frontend.user.dashboard') }}" class="{{ Route::current()->getName() == 'frontend.user.dashboard' ? 'active' : '' }}"><i class="icon-table"></i>@lang('general.dashboard')</a></li>
                <li><a href="{{ route('frontend.user.messages') }}" class="{{ Route::current()->getName() == 'frontend.user.messages' ? 'active' : '' }}"><i class="icon-mail-alt"></i>@lang('general.messages')</a></li>
                <li><a href="{{ route('frontend.user.favourites') }}" class="{{ Route::current()->getName() == 'frontend.user.favourites' ? 'active' : '' }}"><i class="icon-heart"></i>@lang('general.favorites')</a></li>
                <li><a href="{{ route('frontend.user.profile') }}" class="{{ Route::current()->getName() == 'frontend.user.profile' ? 'active' : '' }}"><i class="icon-user"></i>@lang('general.profile')</a></li>
            </ul>
        </div>
    </div>
</aside>
<!--/aside -->