@extends('admin.layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="card-body">
            <div class="row">
                <div class="col-lg">
                    <h1 class="text-center"></h1>
                    {{-- INSET BACKROUND IMAGE HERE --}}
                
                </div>
                <form  class="col-lg p-5 shadow" method="POST" action="{{ route('register') }}">
                    @csrf

                    <h4>Register Account</h4>
                    <small><em>Note: Please input all fields.</em></small>
                    
                    <div class="row mb-3">
                        <div class="col-md">
                            <input placeholder="Lastname" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>

                        <div class="col-md">
                            <input placeholder="Firstname" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>

                        @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="row mb-3">
                        <div class="col-md">
                            <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">

                        <div class="col-md">
                            <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                            <div class="col-md">
                            <input placeholder="Confirm Password"  id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md">
                            <small>Birthday</small>
                            <br>
                            <input class="form-control" type="date">
                        </div>

                        
                        <div class="col-md">
                            <small>Gender</small>
                            <br>
                            <select name="" id="" class="form-control">
                                <option disabled selected>Select Gender</option>
                                <option value="">Male</option>
                                <option value="">Female</option>
                                <option value="">Prefer not to sale</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <button type="submit" class="btn btn-primary float-end">
                            {{ __('Register') }}
                        </button>
                        <small class="text-end mt-3">
                                Already have account? <a class="text-primary" href="{{ route ('login') }}">Sign in here</a>
                        </small>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection
