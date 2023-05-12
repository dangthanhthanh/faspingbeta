@extends("auth.layouts.auth")
@section("form-authentication")
<form class="register" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <div class="d-flex flex-column flex-md-row">
            <p class="col form-row-wide">
                <label class="text">First Name </label><span class="text-danger">{{$errors->first('first_name')}}</span><br>
                <input value="{{old('first_name')}}" title="First Name" type="text" class="input-text" placeholder="vui long dien thong tin" name="first_name">
            </p>
            <p class="col form-row-wide">
                <label class="text">Last Name </label><span class="text-danger">{{ $errors->first('last_name')}}</span><br>
                <input value="{{old('last_name')}}" title="Last Name" type="text" class="input-text" placeholder="vui long dien thong tin" name="last_name">
            </p>
        </div>
        <div class="d-flex flex-column flex-md-row">
            <p class="col form-row-wide">
                <label class="text">User Name</label><span class="text-danger">{{ $errors->first('user_name')}}</span><br>
                <input value="{{old('user_name')}}" title="User Name" type="text" class="input-text"placeholder="vui long dien thong tin" name="user_name" required autocomplete="email" autofocus>
            </p>
            <p class="col form-row-wide">
                <label class="text">Your Email</label><span class="text-danger">{{ $errors->first('email')}}</span><br>
                <input value="{{old('email')}}" title="Your email" type="email" class="input-text" placeholder="vui long dien thong tin" name="email">
            </p>
        </div>
        <p class="col form-row-wide">
            <label class="text">Avatar</label><span class="text-danger">{{ $errors->first('avatar_url')}}</span><br>
            <input title="Avatar" type="file" class="input-text" name="avatar_url">
        </p>
        <p class="col form-row-wide">
            <label class="text">Phone</label><span class="text-danger">{{ $errors->first('phone')}}</span><br>
            <input value="{{old('phone')}}" title="Phone" type="number" class="input-text" placeholder="vui long dien thong tin" name="phone">
        </p>
        <p class="col form-row-wide">
            <label class="text">Address</label><span class="text-danger">{{ $errors->first('address')}}</span><br>
            <input value="{{old('address')}}" title="Address" type="text" class="input-text" placeholder="vui long dien thong tin" name="address">
        </p>
        <div class="d-flex flex-column flex-md-row">
            <p class="col form-row-wide">
                <label class="text">Birthday</label><span class="text-danger">{{ $errors->first('birthday')}}</span><br>
                <input value="{{old('birthday')}}" title="Birthday" type="date" class="input-text" name="birthday">
            </p>
            <p class="col form-row-wide">
                <label class="text">Gender</label><span class="text-danger">{{ $errors->first('gender')}}</span><br>
                <select class="input-text" aria-label="Default select example" name="gender">
                    <option selected disabled>Select Gender</option>
                    <option {{old('gender')=="male"?"selected":""}} value="male">Male</option>
                    <option {{old('gender')=="female"?"selected":""}} value="female">Female</option>
                    <option {{old('gender')=="other"?"selected":""}} value="other">Other</option>
                </select>
            </p>
        </div>
        <div class="d-flex flex-column flex-md-row">
            <p class="col form-row-wide">
                <label class="text">Password</label><span class="text-danger">{{ $errors->first('password')}}</span><br>
                <input value="{{old('password')}}" title="Password" type="password" class="input-text" placeholder="vui long dien thong tin" name="password">
            </p>
            <p class="col form-row-wide">
                <label class="text">Comfirm Password</label><span class="text-danger">{{ $errors->first('password_confirmation')}}</span><br>
                <input value="{{old('password_confirmation')}}" title="Comfirm Password" type="password" class="input-text" placeholder="vui long dien thong tin" name="password_confirmation">
            </p>
        </div>
        <p class="form-row">
            <span class="inline">
                <input {{old('rules')=="on"?"checked":""}} type="checkbox" id="cb2" name="rules">
                <label for="cb2" class="label-text">I agree to <span><a href="#thiue trang nay nha">Terms & Conditions</a></span></label><br><span class="text-danger">{{$errors->first('rules')}}</span>
            </span>
        </p>
        <p class="">
            <input type="submit" class="button-submit" value="Register">
        </p>
    </form>
@endsection
