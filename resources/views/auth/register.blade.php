@extends('layouts.app')

@section('content')
    <form role="form" method="POST" action="{{ route('register') }}" novalidate>
        {{ csrf_field() }}

        <div class="small-10 medium-6 large-4 callout center-callout float-center">
            <div class="row align-center">
                <h5>
                    Register to get Your Goodies!
                </h5>
                <div class="medium-10 small-12">
                    <label>Name
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                    </label>
                    @if ($errors->has('name'))
                        <p class="help-text" id="email-text">{{ $errors->first('name') }}</p>
                    @endif
                </div>

                <div class="medium-10 small-12">
                    <label>Email
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
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
                    <label>Confirm Password
                        <input id="password-confirm" type="password" name="password_confirmation" required>
                    </label>
                </div>

                <div class="medium-10 small-12">
                    <button type="submit" class="button expanded"><i class="fi-unlock"></i> Register</button>
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
