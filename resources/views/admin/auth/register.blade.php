@extends('layouts.admin_layout.auth_layout')

@section('content')

    <div class="form-title">
        <h1>Register Form</h1>
    </div>
    <!-- Login Form-->
    <div class="login-form text-center">
        <div class="form formRegister">
            <h2>Create an account</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- FULLNAME STARTS HERE -->
                @error('name')
                    <span class="text-danger float-left" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" type="text" placeholder="Fullname" />

                <!-- FULLNAME ENDS HERE -->

                <!-- EMAIL STARTS HERE -->
                @error('email')
                    <span class="text-danger float-left" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" type="email" placeholder="Email Address" />

                <!-- EMAIL ENDS HERE -->

                <!-- USERNAME STARTS HERE -->
                @error('username')
                    <span class="text-danger float-left" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" type="text" placeholder="Username" />

                <!-- USERNAME ENDS HERE -->

                <!-- PHONE NUMBER STARTS HERE -->

                @error('phone')
                    <span class="text-danger float-left" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" type="tel" placeholder="Phone Number" />

                <!-- PHONE NUMBER ENDS HERE -->

                <!-- PASSWORD STARTS HERE -->
                
                @error('password')
                    <span class="text-danger float-left" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="Password" />

                <!-- PASSWORD ENDS HERE -->

                <input id="password_confirmation" type="text" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" type="password" placeholder="Confirm Password" />
                <button>Register</button>
            </form>
        </div>
    </div>

@endsection