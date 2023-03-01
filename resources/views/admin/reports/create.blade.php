@extends('adminLayout.master')
@section('title', 'Reports / Create')
@section('content')

    <form action="{{ url('reports/store') }}" method="POST">
        @csrf

        <div class="card shadow-lg mb-3">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <span>STUDENT PROFILE</span>
                    <a class="btn btn-primary btn-sm" href="{{ url('reports/list') }}">Back</a>

                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Name</p>
                            </div>
                            <div class="col-md">
                                <input type="text" class="form-control @error('fullname') is-invalid @enderror"
                                    value="{{ old('fullname') }}" autocomplete="on" autofocus name="fullname">
                                @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Student number</p>
                            </div>
                            <div class="col-md">
                                <input type="text" class="form-control @error('student_number') is-invalid @enderror"
                                    value="{{ old('student_number') }}" autocomplete="on" autofocus name="student_number">
                                @error('student_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Gender</p>
                            </div>
                            <div class="col-md">
                                <select class="form-control @error('gender') is-invalid @enderror"
                                    value="{{ old('gender') }}" autocomplete="on" autofocus name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Prefer not to say">Prefer not to say</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Birthday</p>
                            </div>
                            <div class="col-md">
                                <input type="date" class="form-control @error('birthday') is-invalid @enderror"
                                    value="{{ old('birthday') }}" autocomplete="on" autofocus name="birthday">
                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Contact number</p>
                            </div>
                            <div class="col-md">
                                <input type="tel" class="form-control @error('contact_number') is-invalid @enderror"
                                    value="{{ old('contact_number') }}" autocomplete="on" autofocus name="contact_number">
                                @error('contact_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <p>School</p>
                            </div>
                            <div class="col-md">
                                <select name="school" class="form-control">
                                    @foreach ($table as $tables)
                                        <option value="{{ $tables->name }}">{{ $tables->name }} </option>
                                    @endforeach
                                </select>



                                <input type="hidden" class="form-control" value="{{ Auth::user()->id }}" name="report_id">



                                {{-- <select class="form-control @error('school') is-invalid @enderror"
                                    value="{{ old('school') }}" autocomplete="on" autofocus id="school" name="school">
                                    <option value="University of Caloocan City - Main Campus">University of Caloocan City -
                                        Main
                                        Campus</option>
                                    <option value="University of Caloocan City - Congressional Campus">University of
                                        Caloocan
                                        City - Congressional Campus</option>
                                    <option value="University of Caloocan City - Camarin Campus">University of Caloocan City
                                        -
                                        Camarin Campus</option>
                                </select>
                                @error('school')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <p>Program</p>
                            </div>
                            <div class="col-md">
                                <select class="form-control @error('program') is-invalid @enderror"
                                    value="{{ old('program') }}" autocomplete="on" autofocus id="program" name="program">
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
                                @error('program')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <p>Year</p>
                            </div>
                            <div class="col-md">
                                <input type="number" class="form-control @error('year') is-invalid @enderror"
                                    value="{{ old('year') }}" autocomplete="on" autofocus min="1" max="4"
                                    name="year">
                                @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <p>Section</p>
                            </div>
                            <div class="col-md">
                                <input type="text" class="form-control @error('section') is-invalid @enderror"
                                    value="{{ old('section') }}" autocomplete="on" autofocus name="section">
                                @error('section')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-lg mb-3">
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

                            <option value="Others">Others</option>
                        </select>
                        @error('type_of_complain')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <p>{{ $datas->usersReport->name }}</p> --}}

                        <input type="text" class="form-control" placeholder="Please specify" style="display: none">

                    </div>
                    <div class="col-md mb-3">
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
                    </div>
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

                <p class="text-bold mt-3">Summary</p>
                <textarea class="form-control  @error('summary') is-invalid @enderror" value="{{ old('summary') }}"
                    autocomplete="on" autofocusname="status" cols="30" rows="10" name="summary"></textarea>
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
