@extends('layouts.master')

@push('styles')
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
@endpush

@section('content')

    <section class="password-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Reset Your Password</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-sizing">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <p>We’ll email you instructions to reset your password.</p>
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="button-area">
                            <button type="submit" class="btn btn-primary btn-login">Reset Password</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
