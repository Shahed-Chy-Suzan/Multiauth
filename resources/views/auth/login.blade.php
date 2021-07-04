@extends('layouts.app')

@section('content')

<!--------------- Log-in & Register Form --------------->

<!--------------- Log-in Form --------------->
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_styles.css')}}">

<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1" style="border: 1px solid grey; padding: 20px;">
                <div class="contact_form_container">
                    <div class="contact_form_title text-center">Sign In</div>

                    <form action="{{ route('login') }}" id="contact_form" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="Email1">Email Or Phone</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" aria-describedby="emailHelp" id="Email1"
                                placeholder="Email Or Phone" required="">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" required="" id="pass" aria-describedby="emailHelp"
                                placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="contact_form_button">
                            <button type="submit" class="btn btn-success">Login</button>
                        </div>
                    </form><br>
                    <a href="{{ route('password.request') }}">I Forgot My Password.</a>
                    <br><br>
                    {{-------Socialite-----------}}
                    <button type="submit" class="btn btn-primary btn-block"><i class="fab fa-facebook-square"></i> Login
                        With Facebook</button>
                    <a href="{{ url('/auth/redirect/google') }}" class="btn btn-danger btn-block"><i
                            class="fab fa-google-plus-square"></i> Login With Google</a>

                </div>
            </div>


            <!--------------- Register Form --------------->
            <div class="col-lg-5 offset-lg-1" style="border: 1px solid grey; padding: 20px;">
                <div class="contact_form_container">
                    <div class="contact_form_title text-center">Sign Up</div>

                    <form action="{{ route('register') }}" id="contact_form" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="fullname">Full Name </label>
                            <input type="text" class="form-control" aria-describedby="emailHelp"
                                placeholder="Full Name " name="name" id="fullname" required="">
                        </div>
                        <div class="form-group">
                            <label for="phone1">Phone </label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                value="{{ old('phone') }}" aria-describedby="emailHelp" id="phone1" placeholder="Phone "
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="regEmail">Email </label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Email "
                                id="regEmail" required="">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="regPass">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                aria-describedby="emailHelp" placeholder="Password" name="password" id="regPass"
                                required="">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="regPassConfirm">Confirm Password</label>
                            <input type="password" class="form-control" aria-describedby="emailHelp"
                                placeholder="Re-type Password" name="password_confirmation" id="regPassConfirm"
                                required="">
                        </div>
                        <div class="contact_form_button">
                            <button type="submit" class="btn btn-info">SignUp</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="panel"></div>
</div>

@endsection
