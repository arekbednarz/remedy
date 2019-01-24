<div class="hero_home version_1">
    <div class="content">
        <h3>@lang('general.dashboard_find')</h3>
        <p>
            @lang('general.dashboard_find_description')
        </p>
        <form id="specialist_search_form" method="get" action="{{ route('frontend.user.specialist.index') }}">
            <div id="custom-search-input">
                <div class="input-group">
                    <input type="text" class=" search-query" name="query" placeholder="@lang('general.dashboard_search_ex')">
                    <input type="submit" class="btn_search" value="@lang('general.search')">
                </div>
                <ul>
                    <li>
                        <input type="radio" id="all" name="radio_search" value="all" checked>
                        <label for="all">@lang('general.all')</label>
                    </li>
                    <li>
                        <input type="radio" id="doctor" name="radio_search" value="specialist">
                        <label for="doctor">@lang('general.expert')</label>
                    </li>
                    <li>
                        <input type="radio" id="clinic" name="radio_search" value="specialization">
                        <label for="clinic">@lang('general.method')</label>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</div>
<!-- /Hero -->