@extends('backend.layouts.app')


@push('after-styles')
    <link href="/vendor/dropzone.css" rel="stylesheet">
    <link href="/js/backend/editor/summernote-bs4.css" rel="stylesheet">
@endpush

@section('title', app_name() . ' | ' . __('strings.backend.specialist_profile.title'))

@section('content')

    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-file"></i>@lang('general.basic_info')</h2>
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
                    <input type="email" class="form-control" placeholder="@lang('general.your_mobile_number')" name="movile_number" value="{{ old('mobile_number', $user->mobile_number) }}">
                </div>
            </div>
        </div>
        <!-- /row-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>@lang('general.email')</label>
                    <input type="email" class="form-control" placeholder="@lang('general.your_email')" name="email" value="{{ old('email', $user->email) }}">
                </div>
            </div>
        </div>
        <!-- /row-->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Profile picture</label>
                    <form action="{{ route('admin.upload_file') }}" class="dropzone" id="avatar_upload" >
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
        <!-- /row-->
    </div>
    <!-- /box_general-->

    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-map-marker"></i>Address</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>City</label>
                    <select class="form-control">
                        <option value="">Select city</option>
                        <option value="New York">New York</option>
                        <option value="Chicago">Chicago</option>
                        <option value="Miami">Miami</option>
                        <option value="Los Angeles">Los Angeles</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Your address">
                </div>
            </div>
        </div>
        <!-- /row-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>State</label>
                    <input type="text" class="form-control" placeholder="Your state">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Zip code</label>
                    <input type="text" class="form-control" placeholder="Your zip code">
                </div>
            </div>
        </div>
        <!-- /row-->
        <label for="">Address: <input id="map-search" class="controls" type="text" placeholder="Search Box" size="104"></label><br>
        <label for="">Lat: <input type="text" class="latitude"></label>
        <label for="">Long: <input type="text" class="longitude"></label>
        <label for="">City <input type="text" class="reg-input-city" placeholder="City"></label>


        <div id="map-canvas" style="width:100%; height:500px;" ></div>

    </div>
    <!-- /box_general-->

    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-file-text"></i>Curriculum</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Professional statement</label>
                    <div class="editor"></div>
                </div>
            </div>
        </div>
        <!-- /row-->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Specialization <a href="#0" data-toggle="tooltip" data-placement="top" title="Separated by commas"><i class="fa fa-fw fa-question-circle"></i></a></label>
                    <input type="text" class="form-control" placeholder="Ex: Piscologist, Pediatrician...">
                </div>
            </div>
        </div>
        <!-- /row-->
    </div>
    <!-- /box_general-->

    <div class="box_general padding_bottom">
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
        <!-- /row-->
    </div>
    <!-- /box_general-->
    <p><a href="#0" class="btn_1 medium">Save</a></p>






@endsection

@push('after-scripts')
    <script src="/vendor/dropzone.min.js"></script>
    <script src="/js/backend/editor/summernote-bs4.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAPS_API_KEY')}}&libraries=places&callback=initialize"></script>
    <script src="/js/backend/maps.js"></script>
    <script src="/js/backend/profile.js"></script>
    </body>
    </html>

@endpush