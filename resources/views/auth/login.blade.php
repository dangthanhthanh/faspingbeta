@extends("auth.layouts.auth")
@section("form_title","LOGIN")
@section("form-authentication")
    <form class="login" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="social-account">
            <h6 class="title-social">Login with social account</h6>
            <a href="#" class="mxh-item facebook">
                <i class="icon fa fa-facebook-square" aria-hidden="true"></i>
                <span class="text">FACEBOOK</span>
            </a>
            <a href="#" class="mxh-item twitter">
                <i class="icon fa fa-google" aria-hidden="true"></i>
                <span class="text">GOOGLE</span>
            </a>
        </div>
        <p class="form-row form-row-wide">
            <label class="text">Email</label><span class="text-danger">{{ $errors->first('Email')}}</span><br>
            <input title="Email" type="email" class="input-text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </p>
        <p class="form-row form-row-wide">
            <label class="text">Password</label><span class="text-danger">{{ $errors->first('password')}}</span><br>
            <input title="Password" type="password" class="input-text" name="password" required autocomplete="current-password">
        </p>
        <p class="lost_password">
            <span class="inline">
                <input type="checkbox" id="cb1" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="cb1" class="label-text">Remember Me</label>
            </span>
            @if (Route::has('password.request'))
                <a class="forgot-pw" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            @endif
        </p>
        <p class="form-row">
            <input type="submit" class="button-submit" value="Login">
        </p>
    </form>
@endsection
    