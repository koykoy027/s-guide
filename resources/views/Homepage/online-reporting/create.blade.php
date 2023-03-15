@extends('Homepage.layout.master')

@section('title', '| Online Reporting')
@section('content')
    {{-- alert message --}}
    @if (session()->has('message'))
        {{-- <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: '{{ session('message') }}'
            })
        </script> --}}
    @endif

    {{-- validation --}}
    {{-- <section class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading">Online Report</h2>
                    <p>Validate your school code first</p>
                    <hr>


                    <strong>{{ session('message') }}</strong>
                    <form method="GET" action="{{ url('getData') }}">
                        <div class="form-card">
                            <div class="row mb-3">
                                <div class="col-md">
                                    <label class="fieldlabels">School code</label>
                                    <input type="num" class="form-control @error('id') is-invalid @enderror"
                                        name="id" placeholder="6 digit school code" />
                                    @error('id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    @foreach ($data as $item)
                                        <div>{{ $item->name }}</div>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                Validate
                            </button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </section> --}}





    {{-- step bar --}}
    <section class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading">Online Report</h2>
                    <p>Fill all form field to go to next step</p>

                    <form id="msform" method="POST" action="{{ url('store') }}">
                        @csrf

                        <ul id="progressbar">
                            <li class="active" id="account"><strong>School</strong></li>
                            <li id="personal"><strong>Complainant</strong></li>
                            <li id="payment"><strong>Victim</strong></li>
                            <li id="report"><strong>Report</strong></li>

                        </ul>

                        <br>

                        <fieldset>
                            <div class="form-card">
                                <input type="hidden" class="form-control" value="1" name="report_id">
                                <input type="hidden" class="form-control" value="online" name="type">
                                <input type="hidden" class="form-control" value="online" name="school">
                                <input type="hidden" class="form-control" value="Minor offense" name="status">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">School information</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <label class="fieldlabels">School code</label>
                                        <input type="num" class="form-control @error('school_id') is-invalid @enderror"
                                            name="school_id" />
                                        @error('school_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                                        <select class="form-control @error('complainant') is-invalid @enderror"
                                            name="complainant">
                                            <option value="Self report">Self report</option>
                                            <option value="Friend">Friend</option>
                                            <option value="Classmate">Classmate</option>
                                            <option value="Teacher / Professor">Teacher / Professor</option>
                                            <option value="Parent / Guardian">Parent / Guardian</option>
                                        </select>
                                        @error('complainant')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md">
                                        <label class="fieldlabels">Name of complainant</label>
                                        <input type="text"
                                            class="form-control @error('name_of_complainant') is-invalid @enderror"
                                            name="name_of_complainant" />
                                        @error('name_of_complainant')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md">
                                        <label class="fieldlabels">Email address</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" />
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md">
                                        <label class="fieldlabels">Contact number</label>
                                        <input type="tel"
                                            class="form-control @error('contact_number') is-invalid @enderror"
                                            name="contact_number" />
                                        @error('contact_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                                        <input type="text"
                                            class="form-control @error('firstname') is-invalid @enderror"
                                            name="firstname" />
                                        @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md mb-3">
                                        <label class="fieldlabels">Middlename</label>
                                        <input type="text"
                                            class="form-control @error('middlename') is-invalid @enderror"
                                            name="middlename" />
                                        @error('middlename')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md mb-3">
                                        <label class="fieldlabels">Lastname</label>
                                        <input type="text" class="form-control @error('lastname') is-invalid @enderror"
                                            name="lastname" />
                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <div class="col-md">
                                        <label class="fieldlabels">Student number</label>
                                        <input type="text"
                                            class="form-control @error('student_number') is-invalid @enderror"
                                            name="student_number" />
                                        @error('student_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md">
                                        <label class="fieldlabels">Gender</label>
                                        <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md">
                                        <label class="fieldlabels">Birthday</label>
                                        <input type="date"
                                            class="form-control @error('birthday') is-invalid @enderror"
                                            name="birthday" />
                                        @error('birthday')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md">
                                        <label class="fieldlabels">Program</label>
                                        <select class="form-control @error('program') is-invalid @enderror"
                                            name="program">
                                            <option value="Bachelor of Science in Computer Science">Bachelor of Science
                                                in Computer Science</option>
                                            <option value="Bachelor of Science in Information Technology">Bachelor of
                                                Science in Information Technology</option>
                                            <option value="Bachelor of Science in Information System">Bachelor of
                                                Science in Information System</option>
                                            <option value="Bachelor of Science in Entertainment and Multimedia Computing">
                                                Bachelor of Science in Entertainment and Multimedia Computing</option>
                                        </select>
                                        @error('program')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md">
                                        <label class="fieldlabels">Year</label>
                                        <select class="form-control @error('year') is-invalid @enderror" name="year">
                                            <option value="1st year College">1st year College</option>
                                            <option value="2nd year College">2nd year College</option>
                                            <option value="3rd year College">3rd year College</option>
                                            <option value="4th year College">4th year College</option>
                                        </select>
                                        @error('year')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md">
                                        <label class="fieldlabels">Section</label>
                                        <input type="text" class="form-control @error('section') is-invalid @enderror"
                                            name="section" />
                                        @error('section')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                                <textarea class="form-control  @error('summary') is-invalid @enderror" value="{{ old('summary') }}"
                                    autocomplete="on" autofocusname="status" cols="30" rows="10" name="summary"></textarea>
                                @error('summary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" name="next" class="next action-button">
                                Submit
                            </button>
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
