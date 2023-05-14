@extends('student.layout.master')
@section('title', 'REPORTS - CREATE')
@section('content')
    {{-- alert message --}}
    @if (session()->has('message'))
        <script>
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
        </script>
    @endif

    <form action="{{ url('counselor/reports/store') }}" method="POST">
        @csrf
        <input readonly type="hidden" class="form-control" name="school_code" value="{{ Auth::user()->school_code }}">
        <input readonly type="hidden" class="form-control" name="report_id" value="{{ Auth::user()->id }}">
        <input readonly type="hidden" class="form-control" name="student_numbere"
            value="{{ Auth::user()->employee_number }}">
        <input readonly type="hidden" class="form-control" name="lastname" value="{{ Auth::user()->lastname }}">
        <input readonly type="hidden" class="form-control" name="firstname" value="{{ Auth::user()->firstname }}">
        <input readonly type="hidden" class="form-control" name="middlename" value="{{ Auth::user()->middlename }}">
        <input readonly type="hidden" class="form-control" name="gender" value="{{ Auth::user()->gender }}">
        <input readonly type="hidden" class="form-control" name="email" value="{{ Auth::user()->email }}">

        <div class="card mb-3 shadow-lg">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <span>OFFENDERS DETAILS</span>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md mb-3">
                        <p class="text-bold">Name</p>
                        <input class="form-control @error('offender_name') is-invalid @enderror"
                            value="{{ old('offender_name') }}" autocomplete="on" autofocus name="offender_name" />

                        @error('offender_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md mb-3">
                        <p class="text-bold">Program</p>
                        <select class="form-control @error('program') is-invalid @enderror" value="{{ old('program') }}"
                            autocomplete="on" autofocus id="program" name="program">
                            <option value="Bachelor of Science in Entertainment and Multimedia Computing">Bachelor
                                of
                                Science in Entertainment and Multimedia Computing</option>
                            <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer
                                Science</option>
                            <option value="Bachelor of Science in Information Techonology">Bachelor of Science in
                                Information Techonology</option>
                            <option value="Bachelor of Science in Information System">Bachelor of Science in
                                Information
                                System</option>
                        </select>

                        @error('offender_program')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md mb-3">
                        <p class="text-bold">Year</p>
                        <select class="form-control @error('offender_year') is-invalid @enderror" name="offender_year">
                            <option value="1st year College">1st year College</option>
                            <option value="2nd year College">2nd year College</option>
                            <option value="3rd year College">3rd year College</option>
                            <option value="4th year College">4th year College</option>
                        </select>

                        @error('offender_year')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md mb-3">
                        <p class="text-bold">Section</p>
                        <input class="form-control @error('offender_section') is-invalid @enderror"
                            value="{{ old('offender_section') }}" autocomplete="on" autofocus name="offender_section" />

                        @error('offender_section')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <button class="btn btn-primary btn-block btn-sm" type="submit">Submit</button>
            </div>

        </div>

        <div class="card mb-3 shadow-lg">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <span>REPORT DETAILS</span>
                    {{-- <small>{{ $profile->created_at }}</small> --}}
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md mb-3">
                        <p class="text-bold">Type of complain</p>
                        <select class="form-control @error('type_of_complain') is-invalid @enderror"
                            value="{{ old('type_of_complain') }}" autocomplete="on" autofocus name="type_of_complain">
                            <option value="Sexual Harassment">Sexual Harassment</option>
                            <option value="Smoking inside campus">Arriving Late</option>
                            <option value="Smoking inside campus">Smoking inside campus</option>
                            <option value="Gambling">Gambling</option>
                            <option value="Bullying">Bullying</option>
                            <option value="Failure to wear prescribed uniform">Failure to wear prescribed uniform</option>
                            <option value="Use or Posses drugs">Use or Posses drugs</option>

                            {{-- <option value="Others">Others</option> --}}
                        </select>
                        @error('type_of_complain')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        {{-- <input type="text" class="form-control" placeholder="Please specify" style="display: none"> --}}

                    </div>
                    <input type="hidden" class="form-control" name="status" value="Minor offense">
                    {{-- <div class="col-md mb-3">
                        <p class="text-bold">Status</p>
                        <select class="form-control @error('status') is-invalid @enderror" value="{{ old('status') }}"
                            autocomplete="on" autofocusname="status" name="status">
                            <option value="Minor offense">Minor offense</option>
                            <option value="Major Offense">Major Offense</option>
                        </select>
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> --}}
                </div>
                <p class="text-bold mt-3">Place of Incidence</p>
                <input type="text" class="form-control @error('place_of_incidence') is-invalid @enderror"
                    value="{{ old('place_of_incidence') }}" autocomplete="on" autofocusname="place_of_incidence"
                    name="place_of_incidence">
                @error('place_of_incidence')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="">
                    <p class="text-bold mt-3">Summary</p>
                    <button type="button" id="speak" class="btn btn-primary btn-sm">
                        Click to Speak
                    </button>
                </div>
                <textarea class="form-control @error('summary') is-invalid @enderror" autocomplete="on" autofocusname="status"
                    cols="30" rows="10" name="summary" id="textarea">{{ old('summary') }}</textarea>
                @error('summary')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button class="btn btn-primary btn-block btn-sm" type="submit">Submit</button>
            </div>

        </div>
    </form>

@endsection
