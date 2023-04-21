@extends('counselor.layout.master')
@section('title', 'REPORTS - PROFILE ')
@section('content')

    <div class="card shadow-lg mb-3">
        <div class="card-header">
            <span>VICTIM DETAILS</span>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md">
                    <div class="row">
                        <div class="col-md">
                            <p>Name</p>
                        </div>
                        <div class="col-md">
                            <p class="text-bold">
                                {{ $profile->lastname }}, {{ $profile->firstname }} {{ $profile->middlename }}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>Student number</p>
                        </div>
                        <div class="col-md">
                            <p class="text-bold">{{ $profile->student_number }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>Gender</p>
                        </div>
                        <div class="col-md">
                            <p class="text-bold">{{ $profile->gender }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>Birthday</p>
                        </div>
                        <div class="col-md">
                            <p class="text-bold">{{ $profile->birthday }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>Contact number</p>
                        </div>
                        <div class="col-md">
                            <p class="text-bold">{{ $profile->contact_number }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="row">
                        <div class="col-md">
                            <p>School</p>
                        </div>
                        <div class="col-md">
                            <p class="text-bold">{{ $profile->school_code }} </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>Program</p>
                        </div>
                        <div class="col-md">
                            <p class="text-bold">{{ $profile->program }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>Year</p>
                        </div>
                        <div class="col-md">
                            <p class="text-bold">{{ $profile->year }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>Section</p>
                        </div>
                        <div class="col-md">
                            <p class="text-bold">{{ $profile->section }}</p>
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
                <small>{{ $profile->created_at }}</small>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md">
                    <p class="text-bold">Complainant</p>
                    <div class="row">
                        <div class="col-md">
                            <p class="text-bold">Name</p>
                            <p>{{ $profile->name_of_complainant }}</p>
                        </div>
                        <div class="col-md">
                            <p class="text-bold">Relationship</p>
                            <p>{{ $profile->complainant }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p class="text-bold">Email address</p>
                            <p>{{ $profile->email }}</p>
                        </div>
                        <div class="col-md">
                            <p class="text-bold">Contact number</p>
                            <p>{{ $profile->contact_number }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <p class="text-bold">Offender details</p>
            <div class="row">
                <div class="col-md">
                    <p class="text-bold">Name</p>
                    <p>{{ $profile->offender_lastname }} {{ $profile->offender_firstname }}</p>
                </div>
                <div class="col-md">
                    <p class="text-bold">Program</p>
                    <p>{{ $profile->offender_program }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <p class="text-bold">Year</p>
                    <p>{{ $profile->offender_year }}</p>
                </div>
                <div class="col-md">
                    <p class="text-bold">Section</p>
                    <p>{{ $profile->offender_section }}</p>
                </div>
            </div>
            <hr />

            <div class="row">
                <div class="col-md">
                    <p class="text-bold">Type of complain</p>
                    <p>{{ $profile->type_of_complain }}</p>
                </div>
                {{-- <div class="col-md">
                    <p class="text-bold">Status</p>
                    <p>{{ $profile->status }}</p>
                </div> --}}
            </div>
            <hr />
            <p class="text-bold">Place of incidence</p>
            <p class="text-justify">{{ $profile->place_of_incidence }}</p>

            <p class="text-bold">Summary</p>
            <p class="text-justify">{{ $profile->summary }}</p>
        </div>

    </div>

@endsection
