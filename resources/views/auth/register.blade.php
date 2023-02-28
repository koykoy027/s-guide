@extends('adminLayout.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg">
                        <h1 class="text-center"></h1>
                        {{-- INSET BACKROUND IMAGE HERE --}}

                    </div>
                    <form class="col-lg p-5 shadow" method="POST" action="{{ route('register') }}">
                        @csrf

                        <h4>Register Account</h4>
                        <small><em>Note: Please input all fields.</em></small>


                        {{-- <div class="row my-3">
                            <div class="col-md">
                                <input placeholder="Enter School reference ID" type="text"
                                    class="form-control @error('school_id') is-invalid @enderror" name="school_id"
                                    value="{{ old('school_id') }}" required autocomplete="school_id" autofocus>
                                @error('school_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="row my-3">
                            <div class="col-md">
                                <select name="school_id" class="form-control">
                                    @foreach ($table as $tables)
                                        <option value="{{ $tables->id }}">{{ $tables->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md mb-3">
                                <input placeholder="Enter your Fullname" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md">
                                <select class="form-control @error('gender') is-invalid @enderror"
                                    value="{{ old('gender') }}" required autocomplete="gender" autofocus" name="gender">
                                    <option selected disabled>Select gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        </div>

                        <div class="row mb-3">
                            <div class="col-md">
                                <input placeholder="Enter your Email Address" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md">
                                <input placeholder="Enter your password" id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md">
                                <input placeholder="Confirm your password" id="password-confirm" type="password"
                                    class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                        </div>


                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary btn-sm">
                                {{ __('Register') }}
                            </button>
                        </div>
                        <div class="row">
                            <small class="mt-3 text-end">
                                Already have account? <a class="text-primary" href="{{ route('login') }}">Sign in here</a>
                            </small>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
