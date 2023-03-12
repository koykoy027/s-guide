@extends('Homepage.layout.master')

@section('title', '| Online Reporting')
@section('content')


    <section>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <h2 id="heading">Online Report</h2>
                        <p>Fill all form field to go to next step</p>

                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>School</strong></li>
                                <li id="personal"><strong>Complainant</strong></li>
                                <li id="payment"><strong>Victim</strong></li>
                                <li id="report"><strong>Report</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul>
                            {{-- <div class="progress">
                    	<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                	</div> --}}
                            <br>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">School information</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <label class="fieldlabels">School code</label>
                                            <input type="num" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Complainant Information</h2>
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label class="fieldlabels">Complainant relationship</label>
                                            <select class="form-control">
                                                <option value="Self report">Self report</option>
                                                <option value="Friend">Friend</option>
                                                <option value="Classmate">Classmate</option>
                                                <option value="Teacher / Professor">Teacher / Professor</option>
                                                <option value="Parent / Guardian">Parent / Guardian</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label class="fieldlabels">Name of complainant</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label class="fieldlabels">Email address</label>
                                            <input type="email" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label class="fieldlabels">Contact number</label>
                                            <input type="tel" class="form-control" />
                                        </div>
                                    </div>

                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" />
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Victim details</h2>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md mb-3">
                                            <label class="fieldlabels">Firstname</label>
                                            <input type="text" class="form-control" />
                                        </div>

                                        <div class="col-md mb-3">
                                            <label class="fieldlabels">Middlename</label>
                                            <input type="text" class="form-control" />
                                        </div>

                                        <div class="col-md mb-3">
                                            <label class="fieldlabels">Lastname</label>
                                            <input type="text" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label class="fieldlabels">Student number</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label class="fieldlabels">Gender</label>
                                            <select class="form-control">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md">
                                            <label class="fieldlabels">Birthday</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label class="fieldlabels">Program</label>
                                            <select class="form-control">
                                                <option value="Bachelor of Science in Computer Science">Bachelor of Science
                                                    in Computer Science</option>
                                                <option value="Bachelor of Science in Information Technology">Bachelor of
                                                    Science in Information Technology</option>
                                                <option value="Bachelor of Science in Information System">Bachelor of
                                                    Science in Information System</option>
                                                <option
                                                    value="Bachelor of Science in Entertainment and Multimedia Computing">
                                                    Bachelor of Science in Entertainment and Multimedia Computing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label class="fieldlabels">Year</label>
                                            <select class="form-control">
                                                <option value="1st year College">1st year College</option>
                                                <option value="2nd year College">2nd year College</option>
                                                <option value="3rd year College">3rd year College</option>
                                                <option value="4th year College">4th year College</option>
                                            </select>
                                        </div>
                                        <div class="col-md">
                                            <label class="fieldlabels">Section</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Submit" />
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Report details</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md mb-3">
                                            <p class="text-bold">Type of complain</p>
                                            <select class="form-control @error('type_of_complain') is-invalid @enderror"
                                                value="{{ old('type_of_complain') }}" autocomplete="on" autofocus
                                                name="type_of_complain">
                                                <option value="Sexual Harassment">Sexual Harassment</option>
                                                <option value="Smoking inside campus">Arriving Late</option>
                                                <option value="Smoking inside campus">Smoking inside campus</option>
                                                <option value="Gambling">Gambling</option>
                                                <option value="Bullying">Bullying</option>
                                                <option value="Failure to wear prescribed uniform">Failure to wear
                                                    prescribed uniform</option>
                                                <option value="Use or Posses drugs">Use or Posses drugs</option>

                                                <option value="Others">Others</option>
                                            </select>
                                            @error('type_of_complain')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            {{-- <p>{{ $datas->usersReport->name }}</p> --}}

                                            <input type="text" class="form-control" placeholder="Please specify"
                                                style="display: none">

                                        </div>
                                    </div>
                                    <p class="text-bold mt-3">Place of Incidence</p>
                                    <input type="text"
                                        class="form-control @error('place_of_incidence') is-invalid @enderror"
                                        value="{{ old('place_of_incidence') }}" autocomplete="on"
                                        autofocusname="place_of_incidence" name="place_of_incidence">
                                    @error('place_of_incidence')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <p class="text-bold mt-3">Summary</p>
                                    <textarea class="form-control  @error('summary') is-invalid @enderror" value="{{ old('summary') }}" autocomplete="on"
                                        autofocusname="status" cols="30" rows="10" name="summary"></textarea>
                                    @error('summary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" />
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Finish</h2>
                                        </div>
                                    </div>
                                    <br><br>
                                    <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2>
                                    <br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            {{-- <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> --}}
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5 class="purple-text text-center">You Have Successfully Send report</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="container mb-5">
        <form class="shadow p-4" method="" action="">
            @csrf
            <h4>Online Reporting</h4>
            <small><em>Note: Please input all fields.</em></small>
            <fieldset>
                <div class="row my-3">
                    <h6>School code</h6>
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
                </div>

                <div class="row mb-3">
                    <h6>Employee number</h6>
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
            </fieldset>


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

    </section> --}}


@endsection
