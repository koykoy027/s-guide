@extends('student.layout.master')
@section('title', 'Generate QR')
@section('content')

    <center>

        <a href="data:image/png;base64,{!! base64_encode(
            QrCode::format('png')->size(400)->generate(Auth::user()->employee_number),
        ) !!}" download="{{ Auth::user()->employee_number }}">
            <img src="data:image/png;base64,{!! base64_encode(
                QrCode::format('png')->size(400)->generate(Auth::user()->employee_number),
            ) !!} ">
        </a>
        <h6>
            {{ Auth::user()->employee_number }} | {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
        </h6>
    </center>

@endsection
