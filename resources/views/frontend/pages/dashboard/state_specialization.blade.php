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
                    @foreach($states as $state)
                        <li><a href="{{ route('frontend.user.specialist.index') }}?state={{ $state->id }}"><strong>{{ $state->specialists_count }}</strong>{{ ucfirst($state->name) }}</a></li>
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
                    @foreach($specializations as $specialization)
                        <li><a href="{{ route('frontend.user.specialist.index') }}?specialization={{ $specialization->id }}"><strong>{{ $specialization->users_count }}</strong>{{ $specialization->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- /row -->
</div>
<!-- /container -->