@extends('frontend.layouts.app')

@push('after-styles')
    <link href="{{ asset('/css/frontend/pages/profile_details.css') }}" rel="stylesheet">
@endpush

@section('title', app_name() . ' | ' . __('navs.general.specialists'))

@section('content')
    <main style="transform: none;">

        {{ html()->form('POST', route('frontend.rating.store'))->id('store_review')->open() }}
        {{ html()->hidden('specialist_id', $specialist->id) }}

        <div class="container margin_60_35">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="box_general_3 write_review">
                        <h1>@lang('general.write_review_for') {{ $specialist->first_name.' '.$specialist->last_name }}</h1>
                        <div class="rating_submit">
                            <div class="form-group">
                                <label class="d-block">@lang('general.overall_rating')</label>
                                <span class="rating">
								<input type="radio" class="rating-input" id="5_star" name="rating-input" value="5" {{ old('rating-input') == '5' ? 'checked="checked"' : '' }}><label for="5_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="4_star" name="rating-input" value="4" {{ old('rating-input') == '4' ? 'checked="checked"' : '' }}><label for="4_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="3_star" name="rating-input" value="3" {{ old('rating-input') == '3' ? 'checked="checked"' : '' }}><label for="3_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="2_star" name="rating-input" value="2" {{ old('rating-input') == '2' ? 'checked="checked"' : '' }}><label for="2_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="1_star" name="rating-input" value="1" {{ old('rating-input') == '1' ? 'checked="checked"' : '' }}><label for="1_star" class="rating-star"></label>
							</span>
                            </div>
                        </div>
                        <!-- /rating_submit -->
                        <div class="form-group">
                            <label>@lang('general.review_title')</label>
                            <input class="form-control" type="text" name="title" placeholder="@lang('general.review_title_placeholder')" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('general.your_review')</label>
                            <textarea class="form-control" style="height: 180px;" name="review" placeholder="@lang('general.review_placeholder')">{{ old('review') }}</textarea>
                        </div>
                        <hr>
                        <button type="submit" class="btn_1">@lang('general.save_review')</button>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>

        {{ html()->form()->close() }}

    </main>

@endsection