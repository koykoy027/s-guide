@extends('adminLayout.app')


@section('content')

<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <!-- nadagdag -->
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="{{ asset('images/GuidanceCounsellingsystem.png') }}" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form class="col-lg p-5 shadow" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                        <img src="{{ asset('images/SGUIDE.png') }}" alt="Logo" class="img-fluid" width="140" height="140" style="border-radius: 1rem;">
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>


                                    <!--Username/Email-->
                                    <div class="form-outline mb-4">
                                        <input id="form2Example17" placeholder="Enter Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>


                                    <!-- Password -->
                                    <div class="form-outline mb-4">
                                        <input id="password" placeholder="Enter your password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
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





                                    <!-- <a class="small text-muted" href="#!">Forgot password?</a>
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!" style="color: #393f81;">Register here</a></p>
                                    <a href="#!" class="small text-muted">Terms of use.</a>
                                    <a href="#!" class="small text-muted">Privacy policy</a> -->

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
                                        Don't have account yet? <a class="text-primary" href="{{ route ('register') }}">Register here</a>
                                    </small>
                            </div>

                            <div class="col-lg">
                                <h1 class="text-center"></h1>
                            </div>
                        </div>





                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
@endsection