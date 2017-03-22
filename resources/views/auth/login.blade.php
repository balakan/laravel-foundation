@extends('layouts.app')

@section('content')

    <form role="form" method="POST" action="{{ url('/login') }}" novalidate>
        {{ csrf_field() }}

        <div class="small-10 medium-6 large-4 callout center-callout float-center">
            <div class="row align-center">
                <h5>
                    Log in to your account!
                </h5>
                <div class="medium-10 small-12">
                    <label>Email
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    </label>
                    @if ($errors->has('email'))
                        <p class="help-text" id="email-text">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="medium-10 small-12">
                    <label>Password
                        <input id="password" type="password" name="password" required>
                    </label>
                    @if ($errors->has('password'))
                        <p class="help-text" id="password-text">{{ $errors->first('password') }}</p>
                    @endif
                </div>

                <div class="medium-10 small-12">
                    <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}><label for="remember">Remember Me</label>
                </div>

                <div class="medium-10 small-12">
                    <button type="submit" class="button expanded"><i class="fi-unlock"></i> Log In</button>
                </div>

                <div class="medium-10 small-12">
                    <div class="column float-left">
                        <a type="submit" href="{{ url('/password/reset') }}" class="row align-middle">Forgot your password?</a>
                    </div>
                    <div class="column float-right">
                        <a type="submit" href="{{ url('/register') }}" class="row align-middle">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
