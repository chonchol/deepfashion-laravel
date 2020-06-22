@extends('layouts.app')

@push('styles')
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
                    <img class="loading" src="{{ asset('assets/images/loading.svg') }}" alt="">
                    <h4>Generating Photos...</h4>
                    <button class="btn btn-primary btn-pending"></button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="image-header for-uploading">
                    <div class="mask"></div>
                    <div class="lg-hr-line"></div>
                    <hr class="hr-line-pending">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 col-sm-4">
                <div class="rectangle">
                    <div class="inner-rectangle"></div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="rectangle">
                    <div class="inner-rectangle"></div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="rectangle">
                    <div class="inner-rectangle"></div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="rectangle">
                    <div class="inner-rectangle"></div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="rectangle">
                    <div class="inner-rectangle"></div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="rectangle">
                    <div class="inner-rectangle"></div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="rectangle">
                    <div class="inner-rectangle"></div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="rectangle">
                    <div class="inner-rectangle"></div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="rectangle">
                    <div class="inner-rectangle"></div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="rectangle">
                    <div class="inner-rectangle"></div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="rectangle">
                    <div class="inner-rectangle"></div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="rectangle">
                    <div class="inner-rectangle"></div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
