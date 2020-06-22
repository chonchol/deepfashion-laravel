@extends('layouts.master')

@push('styles')
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
@endpush

@section('content')

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 head-text">
                <h2>Transform garment images to on-model photos.</h2>
                <p>Automated professional model generation with garment using cutting edge AI.</p>
                <a href="{{ url('register?plan=free') }}"><button class="btn btn-primary my-2 my-sm-0 nav-button">Try For Free</button></a>
            </div>
            <div class="col-md-7 head-img">
                <img class="img-fluid" src="{{ asset('assets/images/header.png') }}" alt="">
            </div>
        </div>
    </div>
</header>


<!-- Page Content -->
<section id="feature" class="model-image">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>High Quality Model Images</h2>
                <p>DeepFashion uses state-of-the-art technology to generate high quality product-on-model catalog images for your product pages at a fraction of the time.</p>
                <a href="{{ url('register?plan=free') }}">
                    <button class="btn btn-primary model-img-btn">Try For Free</button>
                </a>
            </div>
        </div>



        <div class="row image-main">
            <div class="image-block col-md-2 only-destop">
                <img class="img-fluid" src="{{ asset('assets/images/Fashion4.png') }}" alt=""><br>
                <img class="img-fluid" src="{{ asset('assets/images/Fashion6.png') }}" alt="">
            </div>
            <div class="image-block col-md-2 only-destop">
                <img class="img-fluid" src="{{ asset('assets/images/Fashion1.png') }}" alt="">
            </div>
            <div class="image-block col-md-4 col-sm-8 col-8">
                <img class="img-fluid" src="{{ asset('assets/images/Fashion2.png') }}" alt="">
            </div>
            <div class="image-block col-md-2 col-sm-4 col-4">
                <img class="img-fluid" src="{{ asset('assets/images/Fashion5.png') }}" alt=""><br>
                <img class="img-fluid" src="{{ asset('assets/images/Fashion7.png') }}" alt="">
            </div>
            <div class="image-block last-bl col-md-2 only-destop">
                <img class="img-fluid" src="{{ asset('assets/images/Fashion3.png') }}" alt="">
            </div>

        </div>

        <div class="wrapper-texting-area">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 texting-block-model">
                            <img src="{{ asset('assets/images/tick.svg') }}" alt="">
                            <h4>Amazon, eBay & Shopify compatible</h4>
                            <p>We generate images by the guidelines of the biggest marketplaces and ecommerce sites. </p>
                        </div>
                        <div class="col-md-4 texting-block-model">
                            <img src="{{ asset('assets/images/tick.svg') }}" alt="">
                            <h4>GDPR compliant</h4>
                            <p>We make sure your data is processed correctly, according to the new European data protection regulations. </p>
                        </div>
                        <div class="col-md-4 texting-block-model">
                            <img src="{{ asset('assets/images/tick.svg') }}" alt="">
                            <h4>Model Customization</h4>
                            <p>Choose from different models, skin tones and poses to generate a diverse set of product-on-model images. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="details">
    <div class="container">
        <div class="row">
            <div class="col-md-5 algo-block">
                <h4>AI algorithms that generate on-model fashion imagery at <span>1/10th of the cost traditional photography</span></h4>
                <p>No more product photoshoots, booking models, photographers, re-shoots, month long product digitization cycles and hundreds of hours spent on a single look!</p>
            </div>
            <div class="col-md-7">
                <img class="img-fluid" src="{{ asset('assets/images/Algorithm.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="marketing">
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-sm-3 market-upload">
                <p>YOU UPLOAD</p>
                <img class="img-fluid" src="{{ asset('assets/images/black-dress.png') }}" alt="">
                <img class="img-fluid" src="{{ asset('assets/images/Jeans.png') }}" alt="">
            </div>
            <div class="col-md-5 col-sm-9">
                <div class="container">
                    <div class="generated-photo">
                        <h5>GENERATED</h5>
                        <div class="row">
                            <div class="col-md-12">
                                <img class="img-fluid" src="{{ asset('assets/images/Dress1.png') }}" alt="">
                                <img class="img-fluid" src="{{ asset('assets/images/Dress2.png') }}" alt="">
                                <img class="img-fluid" src="{{ asset('assets/images/Dress3.png') }}" alt="">
                                <img class="img-fluid" src="{{ asset('assets/images/Dress4.png') }}" alt="">
                                <img class="img-fluid" src="{{ asset('assets/images/Jeans1.png') }}" alt="">
                                <img class="img-fluid" src="{{ asset('assets/images/Jeans2.png') }}" alt="">
                                <img class="img-fluid" src="{{ asset('assets/images/Jeans3.png') }}" alt="">
                                <img class="img-fluid" src="{{ asset('assets/images/Jeans4.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="text-block">
                    <h4>Faster Time-to-Market</h4>
                    <p>Go to market faster than ever before with automated generation of high quality and consistent product catalog images. We are 1000 times faster than the speed of traditional photography.</p>
                </div>
                <div class="text-block">
                    <h4>Increase Engagement & Conversions</h4>
                    <p>Help your customers visualize your products better with high quality, consistent and diverse imagery.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="price" class="pricing-section">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h2 class="display-4">Choose Your Plan</h2>
    </div>
    <div class="container">
        <div class="row">
            <?php $i = 0; ?>
            @foreach($planData as $data)
            <div class="col-md-4 col-sm-10 card-txt-position">
                <div class="card mb-4 box-shadow <?php echo $i == 1 ? 'card-basic' : 'card-common'; ?>">
                    <div class="card-header <?php echo $i ==1 ? 'basic' : 'common'; ?>">
                        <h4 class="my-0 font-weight-normal">{{ $data->title }}</h4>
                    </div>
                    <div class="card-body">
                        <?php
                            $feature_h = explode('|', $data->feature_list);
                        ?>
                        <p class="head-price">{{ $feature_h[0] }}</p>
                        <h1 class="card-title pricing-card-title">${{ $data->price }}<small class="mo">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4 offer">
                            <li>{{ $feature_h[1] }}</li>
                        </ul>
                        <a href="{{ url('register?plan='.$data->title) }}">
                            <button type="button" class="btn btn-primary <?php echo $i == 1 ? 'price-btn-basic' : 'price-btn-common'; ?>">Sign Up</button>
                        </a>
                        <div class="pricing-bottom">
                            <p>  • {{ $feature_h[2] }} </p>
                            <p>  • {{ $feature_h[3] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; ?>
            @endforeach
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('assets/images/Webapp@3x.png') }}" alt="">
            </div>
            <div class="col-md-6 desc-section">
                <h2>What is DeepFashion?</h2>
                <p>DeepFashion is a photo model image generation service and API. It is the perfect tool when you need models wearing high-quality images.</p>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>We’d love to hear from you.</h2>
                <p>Whether you have a general question, feedback or an offer request - we are there to help! We will get back to you ASAP - promised!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-sizing">
                @include('web.partials.feedbackForm')
            </div>
        </div>
    </div>
</section>

<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ url('/') }}"><img class="mb-2" src="{{ asset('assets/images/logo.svg') }}" alt=""></a>
                <small class="d-block mb-3">© {{ date("Y") }} All Rights Reserved.</small>
            </div>
            <div class="col-md-4">
                <h5>PRODUCT</h5>
                <ul class="list-unstyled text-small">
                    <li><a href="#feature">Features</a></li>
                    <li><a href="#price">Pricing</a></li>
                    <li><a href="{{ url('register?plan=free') }}">Registration</a></li>
                    <li><a href="#">Documentation</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>COMPANY</h5>
                <ul class="list-unstyled text-small">
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

@endsection

@push('scripts')
    <script>
        $(document).ready(function(){

            $("a").on('click', function(event) {

                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1000, function(){
                        window.location.hash = hash;
                    });
                }

            });

            // $('.button-area button').on('click', function (event) {
            //     $.ajaxSetup({
            //         headers: {
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         }
            //     });
            //     $.ajax({
            //         type: 'POST',
            //         url: '/feedback/save',
            //         dataType: 'JSON',
            //
            //         success: function(data) {
            //             console.log(data);
            //         },
            //         error: function(data) {
            //             console.log('Error:', data);
            //         }
            //     });
            // });

        });
    </script>
@endpush

