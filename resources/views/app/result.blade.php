@extends('layouts.app')

@push('styles')
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/result.css') }}" rel="stylesheet">
@endpush

@section('content')

<section class="step result-step">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-progress">
                    <ul id="progressbar">
                        <li class="active">Upload Photos</li>
                        <li class="active">Model Settings</li>
                        <li class="not-active">Get Photos</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="photo-result">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="count-photos">
                    <h4>75 Photos Generated</h4>
                    <button class="btn btn-primary btn-download"><img src="{{ asset('assets/images/download.svg') }}" alt="">DOWNLOAD ALL</button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="image-header">
                    <img src="{{ asset('assets/images/red-dress.png') }}" alt="">
                    <p>Red swing dress.jpg</p>
                    <div class="image-count">
                        <span>8</span>
                    </div>
                    <hr class="hr-line">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img12.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb1.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img12.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb1.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img12.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb1.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img12.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb1.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img12.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb1.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img12.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb1.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img12.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb1.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img12.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb1.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img12.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb1.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img12.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb1.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img12.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb1.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img12.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb1.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="image-header">
                    <img src="{{ asset('assets/images/black-jeans.png') }}" alt="">
                    <p>Red swing dress.jpg</p>
                    <div class="image-count">
                        <span>8</span>
                    </div>
                    <hr class="hr-line">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img22.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb2.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img22.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb2.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img22.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb2.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img22.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb2.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img22.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb2.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img22.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb2.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img22.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb2.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img22.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb2.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img22.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb2.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img22.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb2.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img22.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb2.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="gallery-wrap">
                    <a href="{{ asset('assets/images/result-img22.png') }}" data-fancybox="images" data-small-btn="true">
                        <div class="img-wrap">
                            <img class="images" src="{{ asset('assets/images/result-thumb2.png') }}" alt="" />
                            <div class="middle">
                                <button class="btn btn-res-hover">View</button>
                                <button class="btn btn-res-hover">Download</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@push('scripts')

    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>

    <script>

        $(document).ready(function() {
            $('[data-fancybox="images"]').fancybox({
                buttons : [
                    'download'
                ],
                thumbs : {
                    autoStart : true,
                    axis        : 'x'
                },
                caption: function() { return ''; },
                infobar : false,
                toolbar : true,
            });
        });
    </script>

@endpush
