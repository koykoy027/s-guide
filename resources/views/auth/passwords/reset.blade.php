@extends('counselor.layout.app')
@section('title', '- RESET PASSWORD')
@section('content')
    {{-- alert message --}}
    @if (session()->has('status'))
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
                title: '{{ session('status') }}'
            })
        </script>
    @endif

    <div class="d-flex justify-content-center my-5">
        <div class="col-md-6">
            <div class="card p-4">
                <div class="d-flex justify-content-center">
                    {{-- <img src="{{ asset('images/SG 2.png') }}" alt="S-GUIDE" width="50"> --}}
                </div>
                {{-- @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif --}}
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">
                    <h6>Email Address</h6>
                    <div class="row m-2">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
                            readonly style="background: whitesmoke">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <h6>New password</h6>
                    <div class="row m-2">

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <h6>Confirm password</h6>
                    <div class="row m-2">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>

                    <div class="row m-2">
                        <button type="submit" class="btn btn-primary rounded-pill mb-3">
                            Reset password
                        </button>
                        <a href="{{ url('login') }}" class="text-black text-decoration-none">Go back to Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
