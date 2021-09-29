@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 mx-auto p-0">
            <div class="card">
                <div class="login-box"  >
                    <div class="login-snip"> <label for="tab-1" class="tab">Login</label>
                        <div class="login-space">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                            <div class="login">
                                <div class="group">
                                    <label for="user" class="label">Email</label>
                                    <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your username">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div>
                                <div class="group"> <input type="submit" class="button" value="Sign In"> </div>
                                <div class="hr"></div>
                                <div class="foot"> <a href="#">Forgot Password?</a> <a href="{{ route('customer.register') }}">Register?</a></div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
