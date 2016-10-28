@extends('layout.main')
@section('content')
    <section id="signin">
        <div class="row">
            <form>
                <div class="small-12 medium-6 columns">
                    <div class="login-box">
                        <h2>Login</h2>
                        <label>username</label>
                        <input type="text" placeholder="Username">
                        <label>password</label>
                        <input type="password" placeholder="Password">
                        <button type="button" class="button expanded rounded login">LOGIN</button>
                    </div>
                </div>
            </form>
            <form>
                <div class="small-12 medium-6 columns">
                    <div class="login-box login-regis">
                        <h2>Register</h2>
                        <label>email</label>
                        <input type="email" placeholder="Your email">
                        <label>username</label>
                        <input type="text" placeholder="Username">
                        <label>password</label>
                        <input type="password" placeholder="Password">
                        <input id="condition" type="checkbox"><label for="condition">I accept <a>terms and
                                conditions</a></label>
                        <button type="button" class="button expanded rounded">REGISTER NOW!</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
