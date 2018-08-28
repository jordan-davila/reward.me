@extends('layouts.index.master') 
@section('content')
<div id="main" class="container">
    <section class="d_flex flex_1 flex_c flex_a_center p_a_45 h_v_100 bg_white">
        @include('layouts.index.nav')
        
        <form class="login_form flex_1 d_flex flex_c flex_ja_center w_p_30" method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <h1 class="title_3">Reset Password</h1>
            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder="Email Address" required autofocus>
            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="New Password"required>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
            <button type="submit" class="btn_confirm">Reset Password</button>
            @if ($errors->any())
                <div class="error_box">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <a href="{{ route('login') }}" class="registerBtn">Remembered your password? <br> <i>Sign In</i></a>
        </form>
        <div class="copyright">&copy; 2018 {{ config('app.name') }}</div>
    </section>
</div>
@endsection