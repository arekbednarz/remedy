
<?php // dd($ratings) ?>
<div id="section_2">
    <div class="box_general_3">
        <div class="reviews-container">
            <div class="row">
                <div class="col-lg-3">
                    <div id="review_summary">
                        <strong>{{ $ratings['average'] }}</strong>
                        <div class="rating">
                            <i class="icon_star {{ $ratings['average'] > 0.5 ? 'voted' : '' }}"></i>
                            <i class="icon_star {{ $ratings['average'] > 1.5 ? 'voted' : '' }}"></i>
                            <i class="icon_star {{ $ratings['average'] > 2.5 ? 'voted' : '' }}"></i>
                            <i class="icon_star {{ $ratings['average'] > 3.5 ? 'voted' : '' }}"></i>
                            <i class="icon_star {{ $ratings['average'] > 4.5 ? 'voted' : '' }}"></i>
                        </div>
                        <small><p id="rating_count">({{ $ratings['count_reviews'] }} @lang('general.reviews'))</p></small>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-10 col-9">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ !empty($ratings['percentage']['5']) ? $ratings['percentage']['5'] : '0' }}%" aria-valuenow="{{ !empty($ratings['percentage']['5']) ? $ratings['percentage']['5'] : '0' }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-3"><small><strong>5 @lang('general.stars')</strong></small></div>
                    </div>
                    <!-- /row -->
                    <div class="row">
                        <div class="col-lg-10 col-9">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ !empty($ratings['percentage']['4']) ? $ratings['percentage']['4'] : '0' }}%" aria-valuenow="{{ !empty($ratings['percentage']['4']) ? $ratings['percentage']['4'] : '0' }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-3"><small><strong>4 @lang('general.stars')</strong></small></div>
                    </div>
                    <!-- /row -->
                    <div class="row">
                        <div class="col-lg-10 col-9">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ !empty($ratings['percentage']['3']) ? $ratings['percentage']['3'] : '0' }}%" aria-valuenow="{{ !empty($ratings['percentage']['3']) ? $ratings['percentage']['3'] : '0' }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-3"><small><strong>3 @lang('general.stars')</strong></small></div>
                    </div>
                    <!-- /row -->
                    <div class="row">
                        <div class="col-lg-10 col-9">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ !empty($ratings['percentage']['2']) ? $ratings['percentage']['2'] : '0' }}%" aria-valuenow="{{ !empty($ratings['percentage']['2']) ? $ratings['percentage']['2'] : '0' }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-3"><small><strong>2 @lang('general.stars')</strong></small></div>
                    </div>
                    <!-- /row -->
                    <div class="row">
                        <div class="col-lg-10 col-9">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ !empty($ratings['percentage']['1']) ? $ratings['percentage']['1'] : '0' }}" aria-valuenow="{{ !empty($ratings['percentage']['1']) ? $ratings['percentage']['1'] : '0' }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-3"><small><strong>1 @lang('general.stars')</strong></small></div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <!-- /row -->

            <hr>

            @foreach($specialist->ratings as $rating)

                @include('frontend.pages.specialist.show_review_row')

            @endforeach
        </div>
        <!-- End review-container -->
        <hr>
        <div class="text-right"><a href="submit-review.html" class="btn_1">Submit review</a></div>
    </div>
</div>
<!-- /section_2 -->