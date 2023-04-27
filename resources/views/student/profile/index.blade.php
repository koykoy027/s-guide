@extends('student.layout.master')
@section('title', 'Profile')
@section('content')

    <div class="row">
        <div class="card p-4 col-md-4 mx-1">
            <center>

                <img src="https://placeholder.pics/svg/150" class="rounded-circle" width="150" height="150">
                <br><br>
                <h5>
                    {{ Auth::user()->firstname }}
                    {{ Auth::user()->middlename }}
                    {{ Auth::user()->lastname }}
                </h5>


            </center>

        </div>
        <div class="card p-4 col-md mx-1">
            <h5>Personal Information</h5>
            <div class="row">
                <p class="col-md-3 text-bold">
                    Fullname
                </p>
                <div class="col-md">
                    {{ Auth::user()->lastname }} ,{{ Auth::user()->firstname }} {{ Auth::user()->middlename }}
                </div>
            </div>

            <hr>
            <div class="row">
                <p class="col-md-3 text-bold">
                    Student number
                </p>
                <div class="col-md">
                    {{ Auth::user()->employee_number }}

                </div>
            </div>
            <hr>
            <div class="row">
                <p class="col-md-3 text-bold">
                    Gender
                </p>
                <div class="col-md">
                    {{ Auth::user()->gender }}

                </div>
            </div>
            <hr>
            <div class="row">
                <p class="col-md-3 text-bold">
                    Email
                </p>
                <div class="col-md">
                    {{ Auth::user()->email }}

                </div>
            </div>
            <hr>
            <div class="row">
                <p class="col-md-3 text-bold">
                    Contact
                </p>
                <div class="col-md">
                    {{ Auth::user()->contact }}

                </div>
            </div>
        </div>
    </div>


@endsection
