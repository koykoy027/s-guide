@extends('homepage.layout.master')
@section('title', 'Profile')
@section('content')

    <div class="row my-5">
        <div class="card p-4 col-md-4 mx-1">
            <center>
                <a href="data:image/png;base64,{!! base64_encode(
                    QrCode::format('png')->size(400)->generate(Auth::user()->employee_number),
                ) !!}" download="{{ Auth::user()->employee_number }}">
                    <img src="data:image/png;base64,{!! base64_encode(
                        QrCode::format('png')->size(400)->generate(Auth::user()->employee_number),
                    ) !!} ">
                </a>
                <h6>
                    Student | {{ Auth::user()->employee_number }}
                </h6>
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
            {{-- <div class="row">
                <p class="col-md-3 text-bold">
                    Contact
                </p>
                <div class="col-md">
                    {{ Auth::user()->contact }}

                </div>
            </div> --}}
        </div>
    </div>


@endsection
