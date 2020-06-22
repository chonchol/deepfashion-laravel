@extends('layouts.master')

@push('styles')
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
@endpush

@section('content')

    <section class="login">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Login</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-sizing">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPass">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="exampleInputPass">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                            <small id="passHelp" class="form-text">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        Forgot Password?
                                    </a>
                                @endif
                            </small>
                        </div>

                        <div class="button-area">
                            <button type="submit" class="btn btn-primary btn-login">Login</button>
                        </div>
                        <a href="{{ url('register?plan=free') }}"><p>Register here</p></a>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
