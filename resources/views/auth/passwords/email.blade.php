@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="callout">
            {{ session('status') }}
        </div>
    @endif

    <form role="form" method="POST" action="{{ route('password.email') }}" novalidate>
        {{ csrf_field() }}

        <div class="small-10 medium-6 large-4 callout center-callout float-center">
            <div class="row align-center">
                <h5>
                    Reset Password
                </h5>
                <div class="medium-10 small-12">
                    <label>Email
                        <input id="email" type="email" name="email" value="{{ old('email') }}" aria-describedby="email-text" required autofocus>
                    </label>
                    @if ($errors->has('email'))
                        <p class="help-text" id="email-text">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="medium-10 small-12">
                    <button type="submit" class="button expanded"><i class="fi-mail"></i> Send Password Reset Link</button>
                </div>
            </div>
        </div>
    </form>
@endsection
