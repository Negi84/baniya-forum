@extends('layouts/blankLayout')

@section('title', 'Forgot Password Basic - Pages')

@section('page-style')
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}">
@endsection

@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">

                <!-- Forgot Password -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="{{ url('/') }}" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">@include('_partials.macros', ['width' => 25, 'withbg' => '#696cff'])</span>
                                <span
                                    class="app-brand-text demo text-body fw-bolder">{{ config('variables.templateName') }}</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">Reset Password? 🔒</h4>
                        <form id="formAuthentication" class="mb-3 form" action="{{ route('password.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="mb-3">
                                <label for="email"
                                    class="form-label {{ $errors->has('email') ? ' has-danger' : '' }}">Email</label>
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                            </div>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                            <div class="mb-3">
                                <label for="password"
                                    class="form-label {{ $errors->has('password') ? ' has-danger' : '' }}">Password</label>
                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" type="password" name="password" value="{{ $email ?? old('password') }}" required autofocus>
                            </div>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                            <div class="mb-3">
                                <label for="password_confirmation"
                                    class="form-label">Password Confirmation</label>
                                <input class="form-control" placeholder="{{ __('Password Confirmation') }}" type="password" name="password_confirmation" value="{{ old('password_confirmation')}}" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-warning btn-round mb-3">{{ __('Reset Password') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Forgot Password -->
            </div>
        </div>
    </div>
@endsection
