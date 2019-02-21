@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@push('after-styles')
    <link href="{{ asset('/css/frontend/pages/chat.css') }}" rel="stylesheet">
@endpush

@section('content')
    <main>

        <div class="container margin_60">
            <div class="row">

                @include('frontend.user.menu')

                <div class="col-lg-9">




                    <div id="frame">
                        <div class="content">
                            <div class="messages">
                                <ul>
                                    @foreach($chat as $message)
                                        <li class="{{ $message->sent_by_user ? 'sent' : 'replies' }}">
                                            <img src="http://emilcarlsson.se/assets/{{ $message->sent_by_user ? 'harveyspecter' : 'mikeross'}}.png" alt="" />
                                            <p>{{ $message->message }}</p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="message-input">
                                <div class="wrap">
                                    <input type="text" placeholder="Write your message..." />
                                    <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>


            </div>
        </div>

    </main>
@endsection
