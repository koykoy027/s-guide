@extends('adminLayout.app')
@section('title', '| Online Reporting')
@section('content')



    <div class="this">
        <div class="container my-5 shadow-lg" style="background: #fff">
            <div class="row">
                <form class="p-5" method="" action="">
                    @csrf

                    {{-- <div class="d-flex justify-content-center">
                        <img src="{{ asset('images/SG 2.png') }}" alt="S-GUIDE">
                    </div> --}}

                    <h4>Online Reporting</h4>
                    <small><em>Note: Please input all fields.</em></small>

                    <div class="row my-3">
                        <h6>School information</h6>
                        <div class="col-md">
                            <input type="text" placeholder="School code"
                                class="form-control @error('school_id') is-invalid @enderror" name="school_id"
                                value="{{ old('school_id') }}" required autocomplete="school_id" autofocus>
                            @error('school_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md">
                            <input type="text" placeholder="Student number"
                                class="form-control @error('employee_number') is-invalid @enderror" name="employee_number"
                                value="{{ old('employee_number') }}" required autocomplete="employee_number" autofocus>
                            @error('employee_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <select name="complainant" class="form-control" onchange="selectComplainant(this.value)">
                                <option value="Student">Student</option>
                                <option value="Parent / Guardian">Parent / Guardian</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3" name="others_complainant" style="display: none">
                        <div class="col-md">
                            <input type="text" class="form-control" name="guardian_name"
                                placeholder="Name Parent / Guardian">
                        </div>
                        <div class="col-md">
                            <input type="text" class="form-control" name="guardian_relationship"
                                placeholder="Relationship">
                        </div>
                    </div>

                    <hr />
                    <div class="row">
                        <h6>Personal information</h6>
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
                            <input placeholder="M.I" type="text" class="form-control @error('MI') is-invalid @enderror"
                                name="MI" value="{{ old('MI') }}" required autocomplete="MI" autofocus>
                            @error('MI')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                    <div class="row mb-3">
                        <div class="col-md">
                            <select class="form-control @error('gender') is-invalid @enderror" value="{{ old('gender') }}"
                                required autocomplete="gender" autofocus" name="gender">
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
                    <hr>
                    <div class="row mb-3">
                        <div class="col-md">
                            <h6>Report Details</h6>
                            <select class="form-control @error('type_of_complain') is-invalid @enderror"
                                value="{{ old('type_of_complain') }}" autocomplete="on" autofocus name="type_of_complain"
                                onchange="selectTypesOfComplain(this.value)">
                                <option value="Bullying">Bullying</option>
                                <option value="Sexual Harassment">Sexual Harassment</option>
                                <option value="Thievery">Thievery</option>
                                <option value="Others">Others</option>
                            </select>

                            @error('type_of_complain')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="col-md my-3">
                                <input type="text" class="form-control" name="others_type_of_complain"
                                    placeholder="Please specify" style="display: none">
                            </div>
                        </div>

                        <div class="col-md mb-3">
                            <h6>Place of Incidence</h6>
                            <input type="text" class="form-control @error('place_of_incidence') is-invalid @enderror"
                                value="{{ old('place_of_incidence') }}" autocomplete="on"
                                autofocusname="place_of_incidence" name="place_of_incidence">
                            @error('place_of_incidence')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="col-md">
                                <h6>Summary</h6>
                                <textarea class="form-control @error('summary') is-invalid @enderror" placeholder="Tell me more"
                                    value="{{ old('summary') }}" autocomplete="on" autofocusname="status" cols="30" rows="10"
                                    name="summary"></textarea>
                                @error('summary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <hr>

                        <div class="d-flex justify-content-between">
                            <a href="{{ url('online-portal') }}" class="btn btn-outline-secondary btn-sm">
                                Back
                            </a>
                            <button type="submit" class="btn btn-primary btn-sm">
                                Next
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>

@endsection
