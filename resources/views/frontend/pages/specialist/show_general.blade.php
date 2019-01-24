<div id="section_1">
    <div class="box_general_3">
        <div class="profile">
            <div class="row">
                <div class="col-lg-5 col-md-4">
                    <figure>
                        <img src="{{ $specialist->profilePictureSrc() }}" alt="" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-7 col-md-8">
                    <small>{{ $specialist->mainSpecialization()->name }}</small>
                    <h1>{{ $specialist->first_name.' '.$specialist->last_name }}</h1>
                    <span class="rating">
                        <i class="icon_star {{ $ratings['average'] >= 1 ? 'voted' : '' }}"></i>
                        <i class="icon_star {{ $ratings['average'] >= 2 ? 'voted' : '' }}"></i>
                        <i class="icon_star {{ $ratings['average'] >= 3 ? 'voted' : '' }}"></i>
                        <i class="icon_star {{ $ratings['average'] >= 4 ? 'voted' : '' }}"></i>
                        <i class="icon_star {{ $ratings['average'] >= 5 ? 'voted' : '' }}"></i>
                        <small>({{ $ratings['count_reviews'] }})</small>
                    </span>
                    <ul class="statistic">
                        <li>854 Views</li>
                        <li>124 Patients</li>
                    </ul>
                    <ul class="contacts">
                        <li>
                            <h6>@lang('general.address')</h6>
                            {{ $specialist->address }}
                            <a href="https://www.google.com/maps/search/?api=1&query={{ $specialist->latitude }},{{$specialist->longitude}}" target="_blank"> <strong>@lang('general.view_on_map')</strong></a>
                        </li>
                        <li>
                            @if($specialist->phone_number or $specialist->mobile_number)
                                <h6>@lang('general.telephone')</h6>
                                @if($specialist->phone_number)
                                    <a href="tel://{{ $specialist->phone_number }}">{{ $specialist->phone_number }}</a>
                                @endif
                                @if($specialist->mobile_number)
                                    @if ($specialist->phone_number)
                                        -
                                    @endif
                                    <a href="tel://{{ $specialist->mobile_number }}">{{ $specialist->mobile_number }}</a>
                                @endif
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <hr>

        <!-- /profile -->
        <div class="indent_title_in">
            <i class="pe-7s-user"></i>
            <h3>@lang('general.description')</h3>
        </div>
        <div class="wrapper_indent" id="specialist_description">
        {!! $specialist->description !!}
        <!-- /row-->
        </div>
        <!-- /wrapper indent -->

        <hr>

        <!--<div class="indent_title_in">
            <i class="pe-7s-cash"></i>
            <h3>Prices &amp; Payments</h3>
            <p>Mussum ipsum cacilds, vidis litro abertis.</p>
        </div>
        <div class="wrapper_indent">
            <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit, posse exerci volutpat has in.</p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Service - Visit</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>New patient visit</td>
                        <td>$34</td>
                    </tr>
                    <tr>
                        <td>General consultation</td>
                        <td>$60</td>
                    </tr>
                    <tr>
                        <td>Back Pain</td>
                        <td>$40</td>
                    </tr>
                    <tr>
                        <td>Diabetes Consultation</td>
                        <td>$55</td>
                    </tr>
                    <tr>
                        <td>Eating disorder</td>
                        <td>$60</td>
                    </tr>
                    <tr>
                        <td>Foot Pain</td>
                        <td>$35</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>-->
        <!--  /wrapper_indent -->
    </div>
    <!-- /section_1 -->
</div>
