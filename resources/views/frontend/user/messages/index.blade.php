@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    <main>

        <div class="container margin_60">
            <div class="row">

                @include('frontend.user.menu')

                <div class="col-lg-9" id="faq">
                    <h4 class="nomargin_top">@lang('general.messages')</h4>

                    <div class="theiaStickySidebar">
                        <div class="box_style_cat" id="faq_box">
                            <ul id="cat_nav">
                                @foreach($chats as $chat)
                                    <li>
                                        <a href="{{ route('frontend.messages.show', ['id' => $chat->specialist_id]) }}" class="{{ !$chat->sent_by_user && !$chat->viewd ? 'active' : '' }} mailmenu">
                                            <i class="{{ !$chat->sent_by_user && !$chat->viewd ? 'icon-mail-alt' : 'icon-mail' }}"></i>
                                            <b>{{ $chat->specialists->name }}</b> -
                                            <small>{{ str_limit($chat->message, 50, ' (...)') }}</small>
                                            <div class="pull-right">
                                                ({{ $chat->created_at }})
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>
@endsection
