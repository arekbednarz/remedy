<div class="bg_color_1">
    <div class="container margin_120_95">
        <div class="main_title">
            <h2>@lang('general.most_viewed_experts')</h2>
            <p>@lang('general.most_viewed_experts_description')</p>
        </div>
        <div id="reccomended" class="owl-carousel owl-theme">
            @foreach($topSpecialists as $specialist)
                <div class="item">
                    <a href="{{ route('frontend.user.specialist.show', [$specialist->specialist->id]) }}">
                        <div class="views"><i class="icon-eye-7"></i>{{ $specialist->total }}</div>
                        <div class="title">
                            <h4>{{ $specialist->specialist->first_name.' '.$specialist->specialist->last_name }} <em>{{ $specialist->specialist->mainSpecialization()->name }}</em></h4>
                        </div><img src="{{ $specialist->specialist->profilePictureSrc() }}" alt="">
                    </a>
                </div>
            @endforeach

        </div>
        <!-- /carousel -->
    </div>
    <!-- /container -->
</div>
<!-- /white_bg -->