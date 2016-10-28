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
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Your E-mail">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        <label>Password</label>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        <button type="submit" class="button expanded rounded login">LOGIN</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <div class="small-12 medium-6 columns">
                    <div class="login-box login-regis">
                        <h2>Register</h2>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>E-mail</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Your E-mail">
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <label>Username</label>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Username">
                            @if ($errors->has('name'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        <label>Password</label>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                                    @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                    @endif
                                </div>
                         <label>Password Confirm</label>
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Password Confirm">
                        <input id="condition" type="checkbox"><label for="condition">I accept <a>terms and
                                conditions</a></label>
                        <button type="submit" class="button expanded rounded">REGISTER NOW!</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
