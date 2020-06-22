@extends('layouts.app')

@push('styles')
    <link href="{{ asset('assets/css/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/upload.css') }}" rel="stylesheet">
@endpush

@section('content')

<section class="step">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-4">
                <div class="main-progress">
                    <ul id="progressbar">
                        <li class="active">Upload Photos</li>
                        <li class="not-active">Model Settings</li>
                        <li class="not-active">Get Photos</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 custom-margin">
                <div class="next-btn-area">
{{--                    <button id="submit-all" class="btn btn-next" onclick="location.href='{{ url('/photo/setting') }}'" disabled="true">Next</button>--}}
                    <button type="button" form="upload-image" id="submit-all" class="btn btn-next" disabled="true">Next</button>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="error-area" style="display: none">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-custom alert-dismissible fade show" role="alert">
                    <p id="error-size" style="margin-bottom: 0px;"></p>
                    <p id="error-width" style="margin-bottom: 0px;"></p>
                    <p id="error-type" style="margin-bottom: 0px;"></p>
                    <p id="error-default" style="margin-bottom: 0px;"></p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <img src="{{ asset('assets/images/cancel.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="image-uploader">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Upload your photos</h2>
                <div id="hello"></div>
                <div id="image-upload-main" class="uploading-handle">
                    <form action="{{ route('savePhoto') }}" class="dropzone" method="POST" enctype="multipart/form-data" id="upload-image" disabled>
                        @csrf
                        <div class="dz-message">
                            <div class="upload-area">
                                <div class="adding">
                                    <div class="cloud-area">
                                        <img src="{{ asset('assets/images/cloud-backup-up-arrow.svg') }}" alt="">
                                        <img id="arrow-green" src="{{ asset('assets/images/cloud-backup-up-arrow-g.svg') }}" alt="">
                                    </div>
                                    <h3>Drag and Drop</h3>
                                </div>
                                <div class="uploading">
                                    <img class="loading" src="{{ asset('assets/images/loading.svg') }}" alt="">
                                    <h3>Uploading your photos…</h3>
                                </div>
                                <div class="uploaded">
                                    <img src="{{ asset('assets/images/green-tick.svg') }}" alt="">
                                    <h3>Photos Uploaded!</h3>
                                </div>

                                <span class="btn btn-file-add">Add From Computer</span>
                                <p><span>Tip:</span> Upload a min. of 500x500px image on solid background facing front to get the best results!</p>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-12 main-uploading" id="preview-template" style="display: none;">
                                        <div class="uploading-details dz-image-preview">
                                            <div class="dz-image">
                                                <img data-dz-thumbnail="" />
                                            </div>
                                            <div class="dz-details">
                                                <div class="dz-filename">
                                                    <p data-dz-name></p>
                                                </div>
                                            </div>
{{--                                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>--}}
{{--                                            <div class="dz-success-mark"><span>✔</span></div>--}}
{{--                                            <div class="dz-error-mark"><span>✘</span></div>--}}
{{--                                            <div class="dz-error-message"><span data-dz-errormessage></span></div>--}}

                                            <div class="remove-image">
                                                <img class="cancel-btn" src="{{ asset('assets/images/cancel-grey.svg') }}" alt="" data-dz-remove>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@push('scripts')

<script src="{{ asset('assets/js/dropzone.js') }}"></script>
<script>

    Dropzone.autoDiscover = false;

    $(document).ready(function () {
        $("#upload-image").dropzone({
            previewTemplate: document.querySelector('#preview-template').innerHTML,
            paramName: "url",
            uploadMultiple: true,
            parallelUploads: 50,
            thumbnailHeight: 24, //24
            thumbnailWidth: 20,  //20
            acceptedFiles: '.jpeg,.jpg,.png',
            maxFilesize: 5, //MB
            autoProcessQueue: false,
            // chunking: true,
            //url: "/photo/save",
            init: function() {

                this.on("addedfile", function (file) {

                    var _this = this;
                    if ($.inArray(file.type, ['image/jpeg', 'image/jpg', 'image/png']) == -1 || (file.width <= 500 || file.height <= 500) || (file.size > (1024 * 1024 * 5)) ) {
                        _this.removeFile(file);
                    }
                });

                this.on("removedfile", function(){
                    if ($('.dz-filename').length <= 1) {
                        $('.btn-next').removeClass("active");
                        $('.btn-next').prop("disabled", true);
                        //alert(" Minimum one photo required !!!");
                    }
                });

                this.on('thumbnail', function(file) {
                    if ( file.width <= 500 || file.height <= 500 ) {
                        file.rejectDimensions();
                        this.removeFile(file);
                    }
                    else {
                        file.acceptDimensions();
                    }
                });

                this.on("sending", function (file) {
                    $('.remove-image').hide();
                    //$('.hello').show();
                });

                // File upload Progress
                this.on("uploadprogress", function (progress) {
                    $('.remove-image').hide();
                    $('.adding').css({ display: "none" });
                    $('.uploading').css({ display: "block" });
                    //$('.hello').width(progress + '%');
                });

                this.on("queuecomplete", function (progress) {
                    //$('.meter').delay(999).slideUp(9999);

                    $('.uploading').css({ display: "none" });
                    //$('.uploaded').css({ display: "block" });
                    $('.remove-image').hide();
                });

                var submitButton = document.querySelector("#submit-all");
                myDropzone = this; // closure

                submitButton.addEventListener("click", function() {
                    myDropzone.processQueue(); // Tell Dropzone to process all queued files.
                });

            },
            accept: function(file, done) {

                var element = document.getElementById('submit-all');
                element.classList.add('active');
                document.getElementById('submit-all').disabled = false;

                file.acceptDimensions = function (){
                    done();
                };
                file.rejectDimensions = function() {
                    done("The image is width or height is under 500px");
                };
            },

            success: function (file, response) {
                $('.uploaded').css({ display: "block" });
                document.getElementById('submit-all').disabled = false;
                window.location.href = "/photo/setting/"+response;
            },
            error: function(file, message) {

                if (file.accepted == false){
                    document.getElementById('error-area').style.display = 'block';

                    if(file.upload.total >= 5000000){
                        document.getElementById("error-size").innerHTML = file.name + ' is not uploaded. Images size should be under 5 MB.';
                    }
                    // else if(file.type != 'image/jpeg' || file.type != 'image/jpg' || file.type != 'image/png'){
                    //     document.getElementById("error-type").innerHTML = file.name + ' is not uploaded. Images format should be PNG, JPEG, JPG';
                    // }
                    else if(file.width <= 500 || file.height <= 500){
                        document.getElementById("error-width").innerHTML = file.name + ' is not uploaded. Images width or height is too small. Images should be at least 500px X 500px';
                    }
                    else{
                        document.getElementById("error-default").innerHTML = file.name + ' is not uploaded. Images format should be PNG, JPEG, JPG';
                    }
                }
            }
        });
    });
</script>

{{--<script>--}}
{{--    $(document).ready(--}}
{{--        function(){--}}
{{--            $('.btn-next').click(--}}
{{--                function(){--}}

{{--                    $('.adding').css({ display: "none" });--}}
{{--                    $('.uploading').css({ display: "block" });--}}
{{--                    //$('.image-upload-main').attr('disabled',true);--}}
{{--                    $('input').prop( "disabled", true );--}}
{{--                    $('.dropzone.dz-clickable .dz-message, .dropzone.dz-clickable, .dropzone.dz-clickable .dz-message *').css({ cursor: "default"});--}}

{{--                }--}}
{{--            );--}}
{{--        });--}}
{{--</script>--}}
@endpush
