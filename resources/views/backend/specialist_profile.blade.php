@extends('backend.layouts.app')


@push('after-styles')
    <link href="/vendor/dropzone.css" rel="stylesheet">
    <link href="/css/backend/croppie.css" rel="stylesheet">
    <link href="/js/backend/editor/summernote-bs4.css" rel="stylesheet">

    <style>

        .file-btn input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            width: 300px;
            height: 50px;
            opacity: 0;

        }

        .file-btn span {
            color: white;
        }

        .profile-picture-preview {
            width: 200px;
            height: 260px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

    </style>
@endpush

@section('title', app_name() . ' | ' . __('strings.backend.specialist_profile.title'))

@section('content')


    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-file"></i>@lang('general.profile_picture')</h2>
        </div>
        <div class="row">

            <div id="current-profile-picture" class="col-md-12">
                <img class="profile-picture-preview" src="/storage/avatars/aa.jpg">
                <button class="btn btn-primary" id="upload_new_profile_picture">Zmień zdjęcie profilowe</button>
            </div>

            <div id="new-profile-picture" class="col-md-12">


                <div id="upload-demo" class="croppie-container">
                    <div class="cr-boundary" aria-dropeffect="none">
                        <canvas class="cr-image" alt="preview" aria-grabbed="false">

                        </canvas>
                        <div class="cr-viewport cr-vp-circle" tabindex="0" style="width: 100px; height: 100px;">

                        </div>
                        <div class="cr-overlay"></div></div><div class="cr-slider-wrap">
                        <input class="cr-slider" type="range" step="0.0001" aria-label="zoom">
                    </div>
                </div>



                <div class="row">
                    <a class="btn_1 file-btn">
                        <span>Wczytaj zdjęcie profilowe</span>
                        <input type="file" class="" id="profile-picture-upload" accept="image/*" required/>
                    </a>
                </div>

                <div class="row">
                    <div class="text-center">
                        <img id="profile-pic-preview" src="/storage/avatars/aa.jpg">
                    </div>
                </div>

                <button class="btn btn-primary" id="save_new_profile_picture">Zapisz</button>
                <button class="btn btn-danger" id="cancel_new_profile_picture">Anuluj</button>

            </div>


        </div>
        <!-- /row-->
    </div>

    <!--<div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-file"></i>@lang('general.profile_picture')</h2>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <input type="hidden" name="avatar_filename" id="avatar_filename">
                    <form action="{{ route('admin.upload_file') }}" class="dropzone" id="avatar_upload" >
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>

    </div>-->
    <!-- /box_general-->



    {{ html()->form('POST', route('admin.profile.store'))->open() }}


    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-file"></i>@lang('general.basic_info')</h2>
        </div>

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
        <!-- /row-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>@lang('general.telephone')</label>
                    <input type="text" class="form-control" placeholder="@lang('general.your_telephone_number')" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>@lang('general.mobile')</label>
                    <input type="text" class="form-control" placeholder="@lang('general.your_mobile_number')" name="mobile_number" value="{{ old('mobile_number', $user->mobile_number) }}">
                </div>
            </div>
        </div>

        <!-- /row-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>@lang('general.facebook')</label>
                    <input type="text" class="form-control" placeholder="@lang('general.your_facebook')" name="facebook" value="{{ old('facebook', $user->facebook) }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>@lang('general.skype')</label>
                    <input type="text" class="form-control" placeholder="@lang('general.your_skype')" name="skype" value="{{ old('skype', $user->skype) }}">
                </div>
            </div>
        </div>
        <!-- /row-->
    </div>
    <!-- /box_general-->

    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-file-text"></i>@lang('general.specialization')</h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <select class="form-control" name="specialization_id">
                        @foreach($specializations as $specialization)
                            <option {{ old('specialization_id', $user->mainSpecialization()->id) == $specialization->id ? 'selected' : '' }} value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <!-- /row-->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>@lang('general.specialization_description')</label>
                    <div id="description">{!! $user->description !!}</div>
                    <textarea style="display:none;" name="description" id="description_textarea">{{ $user->description }}</textarea>
                </div>
                <button id="editDescription" class="btn_1 small" onclick="onEditDescription()" type="button">@lang('general.edit_description')</button>
                <button id="saveDescription" class="btn_1 small" onclick="onSaveDescription()" type="button">@lang('general.save_description')</button>
            </div>
        </div>

        <!-- /row-->
    </div>
    <!-- /box_general-->

    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-map-marker"></i>@lang('general.address')</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>@lang('general.state')</label>
                    <select class="form-control">
                        @foreach(\App\Models\State::getStatesByCountrycode(\App\Models\State::POLAND_CODE) as $id => $name)
                            <option value="{{ $id }}" {{ $user->state == $id ? 'selected="selected"' : '' }}>{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>@lang('general.address')</label>
                    <input type="text" class="form-control" placeholder="@lang('general.your_address')" id="map-search" name="address" value="{{ old('address', $user->address) }}">

                    <input type="hidden" id="latitude" name="latitude" class="latitude" value="{{ old('latitude', $user->latitude) }}">
                    <input type="hidden" id="longitude" name="longitude" class="longitude" value="{{ old('longitude', $user->longitude) }}">
                    <input type="hidden" name="city" class="reg-input-city" placeholder="City" value="{{ old('city', $user->city) }}">
                </div>
            </div>
        </div>
        <!-- /row-->




        <div id="map-canvas" style="width:100%; height:500px;" ></div>

    </div>
    <!-- /box_general-->


    <!--<div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-folder"></i>Pricing</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h6>Treatments</h6>
                <table id="pricing-list-container" style="width:100%;">
                    <tr class="pricing-list-item">
                        <td>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Price">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <a class="delete" href="#"><i class="fa fa-fw fa-remove"></i></a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
                <a href="#0" class="btn_1 gray add-pricing-list-item"><i class="fa fa-fw fa-plus-circle"></i>Add Item</a>
            </div>
        </div>
    </div>-->
    <!-- /box_general-->
    <p><input type="submit" class="btn_1 medium" value="@lang('general.save')"></p>

    {{ html()->form()->close() }}




@endsection

@push('after-scripts')
    <script src="/vendor/dropzone.min.js"></script>
    <script src="/js/backend/editor/summernote-bs4.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAPS_API_KEY')}}&libraries=places&callback=initialize"></script>
    <script src="/js/backend/maps.js"></script>
    <script src="/js/backend/croppie.min.js"></script>
    <script src="/js/backend/profile.js"></script>
@endpush