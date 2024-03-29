@extends('homepage.layout.master')
@section('title', ' - REGISTER')
@section('content')

    <section class="row justify-content-center align-items-center">
        <div class="col-xl-10">

            <div class="row">
                <div class="col-md">
                    <img src="{{ asset('images/banner-right-image.png') }}">
                </div>

                <div class="col-md">
                    <div class="card-body p-lg-5 text-black">

                        <form class="col-lg p-5 shadow" method="POST" action="{{ route('register') }}">
                            @csrf
                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">
                                Register account
                            </h5>
                            <small><em>Note: Please input all fields.</em></small>

                            <div class="row my-3">
                                <div class="col-md">
                                    <select class="form-control @error('role') is-invalid @enderror"
                                        value="{{ old('role') }}" required autocomplete="role" autofocus name="role">
                                        <option selected disabled>Select Role</option>
                                        <option value="student">Student</option>
                                        <option value="counselor">Counselor</option>
                                    </select>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md">
                                    <input placeholder="Enter School code" type="text"
                                        class="form-control @error('school_code') is-invalid @enderror" name="school_code"
                                        value="{{ old('school_code') }}" required autocomplete="school_code" autofocus>
                                    @error('school_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md">
                                    <input placeholder="Enter registered number" type="text"
                                        class="form-control @error('employee_number') is-invalid @enderror"
                                        name="employee_number" value="{{ old('employee_number') }}" required
                                        autocomplete="employee_number" autofocus>
                                    @error('employee_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md mb-3">
                                    <input placeholder="Last Name" type="text"
                                        class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                        value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md mb-3">
                                    <input placeholder="First Name" type="text"
                                        class="form-control @error('firstname') is-invalid @enderror" name="firstname"
                                        value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                    @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md mb-3">
                                    <input placeholder="Middlename" type="text"
                                        class="form-control @error('middlename') is-invalid @enderror" name="middlename"
                                        value="{{ old('middlename') }}" autocomplete="middlename" autofocus>
                                    @error('middlename')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col-md">
                                    <select class="form-control @error('gender') is-invalid @enderror"
                                        value="{{ old('gender') }}" required autocomplete="gender" autofocus
                                        name="gender">
                                        <option selected disabled>Select gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md">
                                    <input placeholder="Email Address" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">

                                <div class="col-md">
                                    <input placeholder="Password" id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md">
                                    <input placeholder="Confirm password" id="password-confirm" type="password"
                                        class="form-control" name="password_confirmation" required
                                        autocomplete="new-password">
                                </div>

                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Sign up
                                </button>
                            </div>
                            <div class="d-flex justify-content-end">
                                {{-- <a class="mt-3" onClick="btnRegAsCouncilor()" type="button">
                                        Register as Councilor
                                    </a> --}}

                                <span class="mt-3 text-end">
                                    Already have account? <a class="text-primary" href="{{ route('login') }}">Sign in
                                        here</a>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
