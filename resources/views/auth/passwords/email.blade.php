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
                    <img src="{{ asset('images/SG 2.png') }}" alt="S-GUIDE" width="50">
                </div>
                {{-- @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif --}}

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <h6>Reset Password</h6>
                    <div class="row mb-3 mx-2">
                        {{-- <label>Enter your Email</label> --}}
                        <input type="text" class="form-control @error('email') is-invalid @enderror mb-3" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Enter your Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <button type="submit" class="btn btn-primary rounded-pill mb-3">
                            Send password reset link
                        </button>
                        <a href="{{ url('login') }}" class="text-black text-decoration-none">Go back to Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
