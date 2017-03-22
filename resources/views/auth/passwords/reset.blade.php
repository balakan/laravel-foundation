@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="callout">
            {{ session('status') }}
        </div>
    @endif

    <form role="form" method="POST" action="{{ route('password.request') }}" novalidate>
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="small-10 medium-6 large-4 callout center-callout float-center">
            <div class="row align-center">
                <h5>
                    Reset Password!
                </h5>

                <div class="medium-10 small-12">
                    <label>Email
                        <input id="email" type="email" name="email" value="{{ $email or old('email') }}" required>
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
                    @if ($errors->has('password_confirmation'))
                        <p class="help-text" id="password-text">{{ $errors->first('password_confirmation') }}</p>
                    @endif
                </div>

                <div class="medium-10 small-12">
                    <button type="submit" class="button expanded"><i class="fi-unlock"></i> Reset Password</button>
                </div>
            </div>
        </div>

    </form>
@endsection
