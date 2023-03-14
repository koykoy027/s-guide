@extends('Homepage.layout.master')
@section('title', ' - LOGIN')
@section('content')
    <section class="row d-flex justify-content-center align-items-center">
        <div class="col-xl-10">
            <div class="card">
                <div class="row">
                    <div class="col-md">
                        <div class="card-body p-lg-5 text-black">

                            <form class="col-lg p-5 shadow" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="d-flex justify-content-center mb-3 pb-1">
                                    {{-- <img src="{{ asset('images/SG 2.png') }}" alt="S-GUIDE"> --}}
                                </div>

                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">
                                    Sign into your account
                                </h5>


                                <!--Username/Email-->
                                <div class="form-outline mb-4">
                                    <input placeholder="Enter Email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>


                                <!-- Password -->
                                <div class="form-outline mb-4">
                                    <input id="password" placeholder="Enter your password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>


                                <!-- login button -->
                                <div class="row mb-0">
                                    <div class="col-md offset-md">
                                        <button type="submit" class="btn btn-primary btn-block w-100">
                                            {{ __('Login') }}
                                        </button>
                                        <br>

                                    </div>
                                </div>

                                <div class="row my-3 ">
                                    @if (Route::has('password.request'))
                                        <small class="col-md text-start">
                                            <a class="text-primary" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        </small>
                                    @endif


                                </div>
                                <small class="col-md text-end">
                                    Don't have account yet? <a class="text-primary" href="{{ route('register') }}">Register
                                        here</a>
                                </small>
                            </form>

                        </div>
                    </div>

                    <div class="col-md">
                        <img src="{{ asset('index/assets/images/banner-right-image.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
