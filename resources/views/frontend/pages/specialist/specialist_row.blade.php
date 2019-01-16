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
        <li><a href="#0" onclick="onHtmlClick('Doctors', 0)" class="btn_listing">@lang('general.view_on_map')</a></li>
        <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
        <li><a href="detail-page.html">@lang('general.view_profile')</a></li>
    </ul>
</div>