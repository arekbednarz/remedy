<div class="strip_list wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
    <a href="#0" class="wish_bt"></a>
    <figure>
        <a href="{{ route('frontend.user.specialist.show', [$specialist->id]) }}"><img src="{{ $specialist->profilePictureSrc() }}" alt=""></a>
    </figure>
    <small>{{ $specialist->mainSpecialization()->name}}</small>
    <a href="{{ route('frontend.user.specialist.show', [$specialist->id]) }}"><h3>{{ $specialist->first_name.' '.$specialist->last_name }}</h3></a>
    <p>{{ $specialist->short_description }}</p>
    <span class="rating">
        <i class="icon_star {{ $ratings['average'] >= 1 ? 'voted' : '' }}"></i>
        <i class="icon_star {{ $ratings['average'] >= 2 ? 'voted' : '' }}"></i>
        <i class="icon_star {{ $ratings['average'] >= 3 ? 'voted' : '' }}"></i>
        <i class="icon_star {{ $ratings['average'] >= 4 ? 'voted' : '' }}"></i>
        <i class="icon_star {{ $ratings['average'] >= 5 ? 'voted' : '' }}"></i>
        <small>({{ $ratings['count_reviews'] }})</small>
    </span>

    <ul>
        <li><a href="https://www.google.com/maps/search/?api=1&query={{ $specialist->latitude }},{{$specialist->longitude}}" target="_blank"> @lang('general.view_on_map')</a></li>
        <li><a href="https://www.google.com/maps/dir/?api=1&dir_action=navigate&origin=&destination={{ $specialist->latitude }},{{$specialist->longitude}}" target="_blank"> @lang('general.directions')</a></li>
        <li><a href="{{ route('frontend.user.specialist.show', [$specialist->id]) }}">@lang('general.view_profile')</a></li>
    </ul>
</div>