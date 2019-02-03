@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    <main>

        <div class="container margin_60">
            <div class="row">

                @include('frontend.user.menu')


                <div class="col-lg-9" id="faq">
                    <h4 class="nomargin_top">@lang('general.messages')</h4>

                </div>
            </div>
        </div>

    </main>
@endsection
