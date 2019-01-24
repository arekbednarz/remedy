@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@push('after-scripts')
    <script src="{{ asset('js/frontend/search.js') }}"></script>
@endpush

@section('content')

    @include('frontend.pages.dashboard.search')

    @include('frontend.pages.dashboard.state_specialization')

    @include('frontend.pages.dashboard.promoted')

    @include('frontend.pages.dashboard.register_ad')


@endsection