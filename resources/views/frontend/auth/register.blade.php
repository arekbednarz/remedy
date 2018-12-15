@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.register_box_title'))

@section('content')
    <div class="bg_color_2">
        <div class="container margin_60_35">
            <div id="register">
                <h1>@lang('general.login_to_find_specialist')</h1>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        {{ html()->form('POST', route('frontend.auth.register.post'))->open() }}
                            <div class="box_form">
                                <div class="form-group">
                                    <label>@lang('general.name')</label>
                                    {{ html()->text('first_name')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.first_name'))
                                        ->attribute('maxlength', 191) }}
                                </div>
                                <div class="form-group">
                                    <label>@lang('general.lastname')</label>
                                    {{ html()->text('last_name')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.last_name'))
                                        ->attribute('maxlength', 191) }}
                                </div>
                                <div class="form-group">
                                    <label>@lang('general.email')</label>
                                    {{ html()->email('email')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.email'))
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                </div>
                                <div class="form-group">
                                    <label>@lang('general.password_')</label>
                                    {{ html()->password('password')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.password'))
                                        ->required() }}
                                </div>
                                <div class="form-group">
                                    <label>@lang('general.confirm_password')</label>
                                    {{ html()->password('password_confirmation')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.password_confirmation'))
                                        ->required() }}
                                </div>
                                <div id="pass-info" class="clearfix"></div>
                                <div class="checkbox-holder text-left">
                                    <div class="checkbox_2">
                                        <input type="checkbox" value="accept_2" id="check_2" name="check_2" checked>
                                        <label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                                    </div>
                                </div>
                                <div class="form-group text-center add_top_30">
                                    {{ form_submit(__('labels.frontend.auth.register_button')) }}
                                </div>
                            </div>
                            
                        {{ html()->form()->close() }}

                        <div class="row">
                            <div class="col">
                                <div class="text-center">
                                    {!! $socialiteLinks !!}
                                </div>
                            </div><!--/ .col -->
                        </div><!-- / .row -->
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /register -->
        </div>
    </div>
    </main>
    <!-- /main -->
@endsection

@push('after-scripts')
    @if(config('access.captcha.registration'))
        {!! Captcha::script() !!}
    @endif
@endpush
