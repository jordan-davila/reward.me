@extends('layouts.index.master') 
@section('content')
<div id="main" class="container">
    <section class="d_flex flex_1 flex_c flex_a_center p_a_45 h_v_100 bg_white">
        @include('layouts.index.nav')
        <form class="login_form flex_1 d_flex flex_c flex_ja_center w_p_50"  method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
            @csrf
            <h1 class="title_3">Create Account</h1>
            <input type="text" name="username" placeholder="username" required autofocus>
            <input type="mail" name="email" placeholder="email" required autofocus>
            <input type="password" name="password" placeholder="password" required autofocus>
            <input type="password" name="password_confirmation" placeholder="confirm password" required>
            <button type="submit">Register</button>
            @if ($errors->any())
                <div class="error_box">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>&#9658; {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <a href="{{ route('index') }}">Already have an account? <br> <i>Sign In</i></a>
        </form>
        <div class="copyright">&copy; 2018 {{ config('app.name') }}</div>
    </section>
    <section class="d_flex flex_1 flex_c bg_img bg_food h_v_100 flex_j_center p_a_75 pos_r">
        <div class="bg_cover_purple"></div>
        <h1 class="title_1 z_1 font_white">join <span class="font_purple">reward.me</span></h1>
        <p class="z_1 font_white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi numquam praesentium neque ipsa explicabo laborum voluptatibus molestias unde veritatis at nihil, expedita tempore alias ipsum quam a quos, minima dicta.</p>
    </section>
</div>
@endsection
