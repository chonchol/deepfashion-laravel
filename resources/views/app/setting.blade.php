@extends('layouts.app')

@push('styles')
    <link href="{{ asset('assets/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/colorpicker/nano.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/form.css') }}" rel="stylesheet">
@endpush

@section('content')

<section class="step">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-4">
                <div class="main-progress">
                    <ul id="progressbar">
                        <li class="success">Upload Photos</li>
                        <li class="active">Model Settings</li>
                        <li class="not-active">Get Photos</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 custom-margin">
                <div class="next-btn-area">
                    <button type="submit" form="form-setting" class="btn btn-next active">Next</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="form-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 padding-handle">
                <h2>Settings</h2>
                <div id="accordion">
                    <form action="{{ route('setting', ['id' => $gallery->id]) }}" method="POST" id="form-setting" enctype="multipart/form-data">
                        @csrf
                        <div class="form-content">
                            <div class="form-header">
                                <a class="card-link" data-toggle="collapse" href="#menuone" aria-expanded="true" aria-controls="menuone">
                                    <h3>Model</h3>
                                    <span class="collapsed">
                                    <p><b>-</b></p>
                                </span>
                                    <span class="expanded">
                                    <p><b>+</b></p>
                                </span>
                                </a>
                            </div>
                            <div id="menuone" class="collapse show">
                                <div class="accordion-padding">
{{--                                <form action="#">--}}
                                    <div class="form-group">
                                        <label class="col-form-label disable-label">Gender
                                            <div class="tooltip-custom">
                                                <img src="{{ asset('assets/images/Information.svg') }}" alt="information">
                                                <span class="tooltiptext"><a href="{{ url('/#contact') }}" target="_blank">Contact us</a> to unlock this option.</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="container">
                                        <div class="row custom-padd">
                                            <div class="col-md-6">
                                                <label class="custom-radio-check">Male
                                                    <input type="radio" name="model_gender" value="Male" disabled>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="custom-radio-check">Female
                                                    <input type="radio" name="model_gender" value="Female" disabled>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="custom-radio-check">Unisex
                                                    <input type="radio" checked="checked" name="model_gender" value="Unisex" disabled>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="custom-radio-check">Ghost
                                                    <input type="radio" name="model_gender" value="Ghost" disabled>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group pad-control-age">
                                        <label for="age" class="col-form-label disable-label">
                                            Age Range
                                            <div class="tooltip-custom">
                                                <img src="{{ asset('assets/images/Information.svg') }}" alt="information">
                                                <span class="tooltiptext"><a href="{{ url('/#contact') }}" target="_blank">Contact us</a> to unlock this option.</span>
                                            </div>
                                        </label>
                                        <input type="text" id="age" name="model_age_max" readonly>
                                        <div id="slider-range"></div>
                                    </div>
                                    <div class="form-group pad-control-height">
                                        <label for="height" class="col-form-label disable-label">
                                            Height Range
                                            <div class="tooltip-custom">
                                                <img src="{{ asset('assets/images/Information.svg') }}" alt="information">
                                                <span class="tooltiptext"><a href="{{ url('/#contact') }}" target="_blank">Contact us</a> to unlock this option.</span>
                                            </div>
                                        </label>
                                        <input type="text" id="height" name="model_height_max" readonly>
                                        <div id="height-range"></div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEthnicity" class="col-sm-4 col-form-label disable-label">
                                            Ethnicity
                                            <div class="tooltip-custom">
                                                <img src="{{ asset('assets/images/Information.svg') }}" alt="information">
                                                <span class="tooltiptext"><a href="{{ url('/#contact') }}" target="_blank">Contact us</a> to unlock this option.</span>
                                            </div>
                                        </label>
                                        <div class="col-sm-7 col-sm-offset-right-1">
                                            <select id="inputEthnicity" class="form-control" name="model_ethnicity" disabled>
                                                <option value="Random" selected>Random</option>
                                                <option value="Asian">Asian</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputShape" class="col-sm-4 col-form-label disable-label">
                                            Body Shape
                                            <div class="tooltip-custom">
                                                <img src="{{ asset('assets/images/Information.svg') }}" alt="information">
                                                <span class="tooltiptext"><a href="{{ url('/#contact') }}" target="_blank">Contact us</a> to unlock this option.</span>
                                            </div>
                                        </label>
                                        <div class="col-sm-7 col-sm-offset-right-1">
                                            <select id="inputShape" class="form-control" value="model_body_shape" disabled>
                                                <option value="Random" selected>Random</option>
                                                <option value="Any">Any</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="model_plus_size" value="0" id="customCheck1" disabled>
                                        <label class="custom-control-label disable-label" for="customCheck1">Plus Size</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEye" class="col-sm-4 col-form-label disable-label">
                                            Eye Color
                                            <div class="tooltip-custom">
                                                <img src="{{ asset('assets/images/Information.svg') }}" alt="information">
                                                <span class="tooltiptext"><a href="{{ url('/#contact') }}" target="_blank">Contact us</a> to unlock this option.</span>
                                            </div>
                                        </label>
                                        <div class="col-sm-7 col-sm-offset-right-1">
                                            <select id="inputEye" class="form-control" name="model_eye_color" disabled>
                                                <option value="Random" selected>Random</option>
                                                <option value="Blue">Blue</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputHair" class="col-sm-4 col-form-label disable-label">
                                            Hair Color
                                            <div class="tooltip-custom">
                                                <img src="{{ asset('assets/images/Information.svg') }}" alt="information">
                                                <span class="tooltiptext"><a href="{{ url('/#contact') }}" target="_blank">Contact us</a> to unlock this option.</span>
                                            </div>
                                        </label>
                                        <div class="col-sm-7 col-sm-offset-right-1">
                                            <select id="inputHair" class="form-control" name="model_hair_color" disabled>
                                                <option value="Random" selected>Random</option>
                                                <option value="Black">Black</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
{{--                                </form>--}}
                            </div>

                            </div>
                        </div>

                        <div class="form-content">
                            <div class="form-header second-head">
                                <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="true" aria-controls="menutwo">
                                    <h3>Photo Settings</h3>
                                    <span class="collapsed">
                                        <p><b>-</b></p>
                                    </span>
                                    <span class="expanded">
                                        <p><b>+</b></p>
                                    </span>
                                </a>
                            </div>
                            <div id="menutwo" class="collapse show">
                                <div class="accordion-padding">
{{--                                <form action="#">--}}
                                    <div class="form-group row">
                                        <label for="inputBackColor" class="col-sm-4 col-form-label">
                                            Background Color
                                        </label>

                                        <div class="col-sm-7 col-sm-offset-right-1">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="color-picker"></div>
                                                </div>
                                                <input id="inputBackColor" type="text" name="photo_bkg_color" value="#FFFFFF" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDimension" class="col-sm-4 col-form-label">
                                            Dimensions
                                        </label>
                                        <div class="col-sm-7 col-sm-offset-right-1">
                                            <select id="inputDimension" name="photo_dimension" class="form-control">
                                                <option value="500 x 500">500 x 500</option>
                                                <option value="1000 x 1000">1000 x 1000</option>
                                                <option value="1500 x 1500" selected>1500 x 1500</option>
                                                <option value="2000 x 2000">2000 x 2000</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputFormat" class="col-sm-4 col-form-label">
                                            Format
                                        </label>
                                        <div class="col-sm-7 col-sm-offset-right-1">
                                            <select id="inputFormat" name="photo_format" class="form-control">
                                                <option value="JPG" selected>JPG</option>
                                                <option value="PNG">PNG</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPhotoNum" class="col-sm-4 col-form-label">
                                            No. of shoots per photo
                                        </label>
                                        <div class="col-sm-7 col-sm-offset-right-1">
                                            <input type="number" id="inputPhotoNum" name="photo_number_shoot" value="10" class="form-control">
                                        </div>
                                    </div>
{{--                                </form>--}}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <h2>Your Photos</h2>

                @foreach($photos as $photo)

                <div class="photo-details">

                        <div class="main-img">
                            <img class="gen-photo" src="{{ asset('uploaded-photo/'.$photo->url) }}" alt="">
                        </div>

                        <p>{{ $photo->url }}</p>
                        <a href="#" class="deletePhoto" title="delete" data-id="{{ $photo->id }}" data-token="{{ csrf_token() }}"><img class="cancel-btn" src="{{ asset('assets/images/cancel-grey.svg') }}" alt=""></a>
                        {{--                    <a href="{{route('deletePhoto',$photo->id)}}"><img class="cancel-btn" src="{{ asset('assets/images/cancel-grey.svg') }}" alt=""></a>--}}

                </div>

                @endforeach

            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')

    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>

    <script src="{{ asset('assets/js/colorpicker/pickr.es5.min.js') }}"></script>
    <script src="{{ asset('assets/js/colorpicker/script.js') }}"></script>

    <script>
        $(document).ready(function(){

            $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 100,
                values: [ 16, 60 ],
                slide: function( event, ui ) {
                    $( "#age" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
                }
            });

            $( "#age" ).val($( "#slider-range" ).slider( "values", 0 ) +
                " - " + $( "#slider-range" ).slider( "values", 1 ) );

            $( "#height-range" ).slider({
                range: true,
                min: 0,
                max: 12,
                values: [ 3, 7 ],
                slide: function( event, ui ) {
                    $( "#height" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
                }
            });
            $( "#height" ).val($( "#height-range" ).slider( "values", 0 ) +
                " - " + $( "#height-range" ).slider( "values", 1 ) );


            // $('[data-toggle="tooltip"]').tooltip();
            $('#slider-range').slider( 'disable');
            $('#height-range').slider( 'disable');

            $('#inputPhotoNum').on('mouseup keyup', function () {
                $(this).val(Math.min(50, Math.max(1, $(this).val())));
            });

            $('.deletePhoto').click(function () {

                var id = $(this).data('id');

                var token = $(this).data('token');
                var el = this;
                //alert(token);
                $.ajaxSetup({
                   headers:{
                       'X_CSRF_TOKEN': $('meta[name="csrf-token"]').attr('content')
                   }
                });
                $.ajax({
                    url: '/photo/delete/'+id,
                    type: 'DELETE',
                    dataType: 'JSON',
                    data:{
                        'id': id,
                        '_token': token,
                    },
                    success: function (response,data) {

                        if (response.success == 200){
                            $(el).closest(".photo-details").remove();
                            // $(".photo-details").load(" .photo-details");
                        }
                        if ($('.photo-details').length <= 1) {
                            $('.cancel-btn').css({"display": "none"});
                            $('.cancel-btn').hide();
                        }

                        console.log(response);
                    },
                    error: function (xhr, response) {
                        console.log('Error');
                    }
                })
            });

            if ($('.photo-details').length <= 1) {
                // $('.btn-next').removeClass("active");
                // $('.btn-next').prop("disabled", true);
                //alert(" Minimum one photo required !!!");
                $('.cancel-btn').css({"display": "none"});
                $('.cancel-btn').hide();
            }

        });
    </script>

@endpush
