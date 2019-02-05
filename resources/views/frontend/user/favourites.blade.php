@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    <main>

        <div class="container margin_60">
            <div class="row">

                @include('frontend.user.menu')

                <div class="col-lg-9" id="faq">
                    <h4 class="nomargin_top">@lang('general.favorites')</h4>


                    @if (!$favourites->isEmpty())
                        @foreach($favourites as $favourite)
                            @include('frontend.pages.specialist.specialist_row', ['specialist' => $favourite, 'ratings' => $favourite->ratingDetails()])
                        @endforeach
                    @else
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div id="confirm">

                                    <h2>@lang('general.specialists_no_results')</h2>
                                    <p>@lang('general.specialists_no_results_message')</p>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>

    </main>
@endsection
