@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.specialists'))

@push('after-styles')
    <link href="{{ asset('css/frontend/pages/specialist_search_list.css') }}" rel="stylesheet">
@endpush

@push('after-scripts')
    <script src="{{ asset('js/frontend/search.js') }}"></script>
    <script src="{{ asset('js/frontend/favourite.js') }}"></script>
@endpush

@section('content')

    <main style="transform: none">
        <form id="specialist_search_form" method="get" action="{{ route('frontend.user.specialist.index') }}">

            <div id="results">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h4><strong>@lang('general.showing') {{ count($specialists) }}</strong> @lang('general.of') {{ $specialists->total() }} @lang('general.results')</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="search_bar_list">
                                <input type="text" name="query" class="form-control" value="{{ $request['query'] }}" placeholder="@lang('general.dashboard_search_ex')">
                                <input type="submit" value="Search">
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>

            <div class="filters_listing">
                <div class="container">
                    <ul class="clearfix">
                        <!--<li>
                            <div class="switch-field">
                                <input type="radio" id="all" name="type_patient" value="all" checked="">
                                <label for="all">@lang('general.sex_all')</label>
                                <input type="radio" id="doctors" name="type_patient" value="doctors">
                                <label for="doctors">@lang('general.women')</label>
                                <input type="radio" id="clinics" name="type_patient" value="clinics">
                                <label for="clinics">@lang('general.men')</label>
                            </div>
                        </li>-->

                        <!--<li>
                            <h6>Layout</h6>
                            <div class="layout_view">
                                <a href="grid-list.html"><i class="icon-th"></i></a>
                                <a href="#0" class="active"><i class="icon-th-list"></i></a>
                                <a href="list-map.html"><i class="icon-map-1"></i></a>
                            </div>
                        </li>-->
                        <li>
                            <h6>@lang('general.method')</h6>
                            <select name="specialization" class="selectbox search_filter" sb="75791728" style="display: none;">
                                <option value="">@lang('general.all_specializations')</option>
                                @foreach($specializations as $specialization)
                                    <option value="{{ $specialization->id }}" {{ $request['specialization'] == $specialization->id ? 'selected' : '' }}>{{ $specialization->name }}</option>
                                @endforeach
                            </select>
                        </li>
                        <li>
                            <h6>@lang('general.state')</h6>
                            <select name="state" class="selectbox search_filter" sb="75791728" style="display: none;">
                                <option value="">@lang('general.all_regions')</option>
                                @foreach($states as $state)
                                    <option value="{{ $state->id }}" {{ $request['state'] == $state->id ? 'selected' : '' }}>{{ $state->name }}</option>
                                @endforeach
                            </select>
                        </li>
                        <li>
                            <h6>@lang('general.city')</h6>
                            <input type="text" class="form-control" id="search-city-input" name="city" value="{{ $request['city'] }}">
                        </li>
                        <li>
                            <h6>@lang('general.sort_by')</h6>
                            <select name="orderby" class="selectbox search_filter" sb="75791728" style="display: none;">
                                <option value="Closest">Closest</option>
                                <option value="Best rated">Best rated</option>
                            </select>
                        </li>

                    </ul>
                </div>
                <!-- /container -->
            </div>

        </form>

        <div class="container margin_60_35" style="transform: none;">
            <div class="row" style="transform: none;">
                <div class="col-md-12">

                    @if (!$specialists->isEmpty())
                        @foreach($specialists as $specialist)
                            @include('frontend.pages.specialist.specialist_row', ['specialist' => $specialist, 'ratings' => $specialist->ratingDetails()])
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
                <div class="col-md-12">
                    {{ $specialists->links() }}
                </div>
            </div>
        </div>
    </main>


@endsection