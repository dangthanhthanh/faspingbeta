@extends("client.layouts.authentication")
@section("form_title","Reset Password")
@section("form-authentication")
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form class="login" method="POST" action="{{ route('password.email') }}">
        @csrf
        <p class="form-row form-row-wide">
            <label class="text">Email</label><span class="text-danger">{{ $errors->first('Email')}}</span><br>
            <input title="Email" type="email" class="input-text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </p>
        <p class="form-row">
            <input type="submit" class="button-submit" value="Send Password Reset Link">
        </p>
    </form>
@endsection
    