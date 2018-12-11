@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')

    <div class="bg_color_2">
        <div class="container margin_60_35">
            <div id="login-2">
                <h1>Zaloguj się do <strong>Remedy</strong>!</h1>
                {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}
                    <div class="box_form clearfix">
                        <div class="box_login">
                            <a href="#0" class="social_bt facebook">Login with Facebook</a>
                            <a href="#0" class="social_bt google">Login with Google</a>
                            <a href="#0" class="social_bt linkedin">Login with Linkedin</a>
                        </div>
                        <div class="box_login last">
                            <div class="form-group">

                                {{ html()->email('email')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.email'))
                                        ->attribute('maxlength', 191)
                                        ->required() }}

                            </div>
                            <div class="form-group">

                                {{ html()->password('password')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.password'))
                                        ->required() }}
                                <a class="forgot" href="{{ route('frontend.auth.password.reset') }}"><small>@lang('labels.frontend.passwords.forgot_password')</small></a>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    {{ html()->label(html()->checkbox('remember', true, 1) . ' ' . __('labels.frontend.auth.remember_me'))->for('remember') }}
                                </div>
                            </div><!--form-group-->
                            <div class="form-group">
                                <input class="btn_1" type="submit" value="Login">
                            </div>
                        </div>
                    </div>
                {{ html()->form()->close() }}
                <p class="text-center link_bright">Do not have an account yet? <a href="{{ route('frontend.auth.register') }}"><strong>Register now!</strong></a></p>
            </div>
            <!-- /login -->
        </div>
    </div>


@endsection
