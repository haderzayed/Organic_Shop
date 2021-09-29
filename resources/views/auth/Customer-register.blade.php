@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 mx-auto p-0">
            <div class="card">
                <div class="login-box"  >
                    <div class="login-snip">
                        <div class="login-space">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                            <div class="sign-up-form">
                                <div class="group">
                                    <label for="user" class="label">Username</label>
                                    <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Create your Username">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Email Address</label>
                                    <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email address">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Create your password"> </div>
                                <div class="group"> <label for="pass" class="label">Repeat Password</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Repeat your password"> </div>
                                <div class="group"> <input type="submit" class="button" value="Sign Up"> </div>
                                <div class="hr"></div>
                                <div class="foot"> <a href="{{ route('login') }}">Already Member?</a> </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
