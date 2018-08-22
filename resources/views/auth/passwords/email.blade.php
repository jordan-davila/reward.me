@extends('layouts.index.master') 
@section('content')
<div id="main" class="container">
    <section class="d_flex flex_1 flex_c flex_a_center p_a_45 h_v_100 bg_white">
        @include('layouts.index.nav')
        
        <form class="login_form flex_1 d_flex flex_c flex_ja_center w_p_30" method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
            @csrf
            <h1 class="title_3">Reset Password</h1>
           <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email Address" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <button type="submit" class="btn_confirm">Send Password Reset Link</button>
            <a href="{{ route('login') }}" class="registerBtn">Remembered your password? <br> <i>Sign In</i></a>
        </form>
        <div class="copyright">&copy; 2018 {{ config('app.name') }}</div>
    </section>
</div>
@endsection