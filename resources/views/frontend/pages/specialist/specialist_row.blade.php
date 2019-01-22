<div class="strip_list wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
    <a href="#0" class="wish_bt"></a>
    <figure>
        <a href="{{ route('frontend.user.specialist.show', [$specialist->id]) }}"><img src="/storage/avatars/{{ !empty($specialist->profile_picture) ? $specialist->profile_picture : 'no.jpg' }}" alt=""></a>
    </figure>
    <small>{{ $specialist->mainSpecialization()->name}}</small>
    <a href="{{ route('frontend.user.specialist.show', [$specialist->id]) }}"><h3>{{ $specialist->first_name.' '.$specialist->last_name }}</h3></a>
    <p>{{ $specialist->short_description }}</p>
    <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
    <a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
    <ul>
        <li><a href="https://www.google.com/maps/search/?api=1&query={{ $specialist->latitude }},{{$specialist->longitude}}" target="_blank"> @lang('general.view_on_map')</a></li>
        <li><a href="https://www.google.com/maps/dir/?api=1&dir_action=navigate&origin=&destination={{ $specialist->latitude }},{{$specialist->longitude}}" target="_blank"> @lang('general.directions')</a></li>
        <li><a href="detail-page.html">@lang('general.view_profile')</a></li>
    </ul>
</div>