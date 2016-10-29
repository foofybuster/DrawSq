@extends('layout.main')
@section('content')
    <section id="signin">
        <div class="row">
            <form role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="small-12 medium-6 columns">
                    <div class="login-box">
                        <h2>Login</h2>
                        <label>Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}"
                               required autofocus placeholder="Your E-mail">
                        @if ($errors->has('email'))
                            <strong>{{ $errors->first('email') }}</strong>
                        @endif
                        <label>Password</label>
                        <input id="password" type="password" name="password" required
                               placeholder="Password">
                        @if ($errors->has('password'))
                            <strong>{{ $errors->first('password') }}</strong>
                        @endif
                        <button type="submit" class="button expanded rounded login">LOGIN</button>
                    </div>
                </div>
            </form>
            <form role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <div class="small-12 medium-6 columns">
                    <div class="login-box login-regis">
                        <h2>Register</h2>
                        <label>E-mail</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}"
                               required placeholder="Your E-mail">
                        @if ($errors->has('email'))
                            <strong>{{ $errors->first('email') }}</strong>
                        @endif
                        <label>Username</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}"
                               required autofocus placeholder="Username">
                        @if ($errors->has('name'))
                            <strong>{{ $errors->first('name') }}</strong>
                        @endif
                        <label>Password</label>
                        <input id="password" type="password" name="password" required
                               placeholder="Password">
                        @if ($errors->has('password'))
                            <strong>{{ $errors->first('password') }}</strong>
                        @endif
                        <label>Password Confirm</label>
                        <input id="password-confirm" type="password" name="password_confirmation" required
                               placeholder="Password Confirm">
                        <input id="condition" type="checkbox" required>
                        <label for="condition">I accept <a>terms and conditions</a></label>
                        <button type="submit" class="button expanded rounded">REGISTER NOW!</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
