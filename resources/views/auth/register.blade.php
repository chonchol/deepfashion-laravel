@extends('layouts.master')

@push('styles')
    <link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
@endpush

@section('content')

<section class="registration-form">
    <div class="container-fluid">
        <div class="row flex-column-reverse flex-lg-row">
            <form method="POST" action="{{ route('register') }}">
                @csrf
            <div class="col-lg-7">
                <div class="all-from-wrap">
                    <div class="profile-form">
                        <h2>Profile</h2>

                            <div class="form-group">
                                <label for="exampleInputName">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPass">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPass" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputRePass">Re-enter Password</label>
                                <input type="password" class="form-control" id="exampleInputRePass" name="password_confirmation" required autocomplete="new-password">
                            </div>
                    </div>

                    <div class="profile-form">
                        <h2>Payment Information</h2>
                        <button class="btn btn-paypal"><img src="{{ asset('assets/images/paypal.svg') }}" alt=""></button>
                        <p><span>OR</span></p>
                        <h3>Billing Information</h3>

                            <div class="form-group">
                                <label for="inputCardName">Name on Card</label>
                                <input type="text" class="form-control" id="inputCardName">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="inputCardNo">Card Number</label>
                                    <input type="text" class="form-control" id="inputCardNo" placeholder="0000 0000 0000 0000">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="">Expiry Date (MM/YY)</label>
                                    <div class="input-group expiration-date">
                                        <input type="text" class="form-control" placeholder="MM" aria-label="MM" aria-describedby="basic-addon1">
                                        <span class="date-separator"></span>
                                        <input type="text" class="form-control" placeholder="YY" aria-label="YY" aria-describedby="basic-addon1">
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputCvv">CVC / CVV</label>
                                    <input type="text" class="form-control" id="inputCvv" placeholder="3 or 4 digits">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputAdd1">Address</label>
                                <input type="text" class="form-control" id="inputAdd1">
                            </div>

                            <div class="form-group">
                                <label for="inputAdd2">Address Line 2</label>
                                <input type="text" class="form-control" id="inputAdd2">
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <label for="inputCountry">Country</label>
                                    <select id="inputCountry" class="form-control">
                                        <option selected>Select Country</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="inputAdd2">City</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <label for="inputState">State</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="inputZip">Zipcode</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">I accept the <a href="#">Terms of Service</a></label>
                            </div>

                            <div class="plan-bottom">
                                <button type="submit" class="btn btn-primary btn-purchase">Purchase</button>
                            </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-5 plan-main">
                @include('web.partials.plan')
            </div>
            </form>
        </div>
    </div>
</section>

@include('web.partials.planModal')
@endsection
@push('scripts')
    <script>
        $( document ).ready(function() {
            $('#myDropdown > a').click(function(e){
                $('#myDropdown > a').removeClass('act-item');
                $(this).addClass('act-item');
            });
            $('#myDropdown .monthly').click(function(e){
                $(".plan-bottom >.for-monthly").css({"display": "block"});
                $(".plan-bottom >.for-yearly").css({"display": "none"});
                $(".dropdown span .month").css({"display": "block"});
                $(".dropdown span .year").css({"display": "none"});
            });
            $('#myDropdown .yearly').click(function(e){
                $(".plan-bottom >.for-monthly").css({"display": "none"});
                $(".plan-bottom >.for-yearly").css({"display": "block"});
                $(".dropdown span .month").css({"display": "none"});
                $(".dropdown span .year").css({"display": "block"});
            });

            // let searchParams = new URLSearchParams(window.location.search);
            // if(searchParams.has('plan') == true){
            //     let param = searchParams.get('plan');
            //     if(param='medium'){
            //         $('.card-header').addClass('basic');
            //     }
            // }

        });
    </script>
@endpush
