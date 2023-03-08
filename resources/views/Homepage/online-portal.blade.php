@extends('adminLayout.app')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="transparent">
            <h1>S-GUIDE SYSTEM</h1>
            <div class="d-flex justify-content-center mb-3">
                <img src="{{ asset('images/SG 2.png') }}" alt="S-GUIDE">
            </div>
            <hr />
            <a class="btn btn-primary w-100 mb-3" href="{{ url('/') }}">
                Go to Website
            </a>
            <hr />
            <a class="btn btn-primary w-100 mb-3">
                For Student / Guardian / Parents
            </a>
            <a class="btn btn-primary w-100 mb-3" href="{{ route('login') }}">
                For Faculty
            </a>
        </div>
    </div>
@endsection
