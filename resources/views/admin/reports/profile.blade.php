@extends('adminLayout.master')
@section('title', 'REPORTS - PROFILE ')
@section('content')

    <div class="card shadow-lg mb-3">
        <div class="card-header">
            <span>STUDENT PROFILE</span>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md">
                    <div class="row">
                        <div class="col-md">
                            <p>Name</p>
                        </div>
                        <div class="col-md">
                            <p class="text-bold">{{ $profile->lastname }}, {{ $profile->firstname }}
                                {{ $profile->middlename }}</p>
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
                            <p class="text-bold">{{ $profile->school }}</p>
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
                    <p class="text-bold">Reporter</p>
                    <p>{{ $profile->usersReport->lastname }}, {{ $profile->usersReport->firstname }}
                        {{ $profile->usersReport->middlename }}</p>


                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <p class="text-bold">Type of complain</p>
                    <p>{{ $profile->type_of_complain }}</p>
                </div>
                <div class="col-md">
                    <p class="text-bold">Status</p>
                    <p>{{ $profile->status }}</p>
                </div>
            </div>
            <hr />
            <p class="text-bold">Place of incidence</p>
            <p class="text-justify">{{ $profile->place_of_incidence }}</p>

            <p class="text-bold">Summary</p>
            <p class="text-justify">{{ $profile->summary }}</p>
        </div>


    </div>









@endsection
