@extends('admin.layouts.app')

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="card-body">
            <div class="row">
                <form class="col-lg p-5 shadow" method="POST" action="{{ route('login') }}">
                @csrf

                    <h4 class="mb-5">Login here</h4>
                
                    <div class="row mb-3">
                        <div class="col-md">
                            <input id="email" placeholder="Enter your Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md">
                            <input id="password" placeholder="Enter your password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    
                    <div class="row mb-3">
                        <div class="col-md offset-md">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="row mb-0">
                        <div class="col-md offset-md">
                            <button type="submit" class="btn btn-primary btn-block w-100">
                                {{ __('Login') }}
                            </button>
                            <br>
                            
                        </div>
                    </div>

                    {{-- <div class="row my-3 ">
                        @if (Route::has('password.request'))
                        <small class="col-md text-start">
                            <a class="text-primary" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </small>
                        @endif
                        
                        <small class="col-md text-end">
                                Don't have account yet? <a class="text-primary" href="{{ route ('register') }}">Register here</a>
                        </small>
                    </div> --}}
                </form>

                <div class="col-lg">
                    <h1 class="text-center"></h1>
                </div>
            </div>

            
            

            </div>
        </div>
    </div>
</div>
@endsection
