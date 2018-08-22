@extends('layouts.index.master') 
@section('content')
<div id="main" class="container">
    <section class="d_flex flex_1 flex_c flex_a_center p_a_45 h_v_100 bg_white">
        @include('layouts.index.nav')
        <form class="login_form flex_1 d_flex flex_c flex_ja_center w_p_50"  method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
            <h1 class="title_3">Account Access</h1>
            <input type="text" name="username" placeholder="username" required>
            <input type="password" name="password" placeholder="password" required>
            <button type="submit">Sign In</button>
            @if ($errors->any())
                <div class="error_box">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <a href="{{ route('register') }}">Don't have an account? <br> <i>Register Today</i></a>
            <a href="{{ route('password.request') }}" class="passwordLink">Forgot Password?</a>
        </form>
        <div class="copyright">&copy; 2018 {{ config('app.name') }}</div>
    </section>
    <section class="d_flex flex_1 flex_c bg_img bg_jog h_v_100 flex_j_center p_a_75 pos_r">
        <div class="bg_cover_purple"></div>
        <h1 class="title_1 z_1 font_white">Get <span class="font_purple">rewarded</span> for every day task</h1>
        <p class="z_1 font_white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi numquam praesentium neque ipsa explicabo laborum voluptatibus molestias unde veritatis at nihil, expedita tempore alias ipsum quam a quos, minima dicta.</p>
    </section>
</div>
@endsection
