@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    <main>

        <div class="container margin_60">
            <div class="row">

                @include('frontend.user.menu')


                <div class="col-lg-9">

                    {{ html()->form('POST', route('frontend.user.profile.store'))->open() }}

                    <div class="box_general padding_bottom">
                        <!-- /row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('general.email')</label>
                                    <input type="email" class="form-control" placeholder="@lang('general.your_email')" readonly="readonly" value="{{ $user->email }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('general.name')</label>
                                    <input type="text" class="form-control" placeholder="@lang('general.your_name')" name="first_name" value="{{ old('first_name', $user->first_name) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('general.last_name')</label>
                                    <input type="text" class="form-control" placeholder="@lang('general.your_last_name')" name="last_name" value="{{ old('last_name', $user->last_name) }}">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4>@lang('general.password_change')</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('general.password')</label>
                                    <input type="password" class="form-control" placeholder="@lang('general.your_password')" name="password" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('general.confirm_password')</label>
                                    <input type="password" class="form-control" placeholder="@lang('general.confirm_your_password')" name="confirm_password" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /box_general-->

                    <p><input type="submit" class="btn_1 medium" value="@lang('general.save')"></p>

                    {{ html()->form()->close() }}

                </div>
            </div>
        </div>

    </main>
@endsection
