@extends('layouts.home.master')
@section('content')
    <div id="main">
        @include('layouts.home.header')
        <section id="content" class="container flex_c w_p_100 p_l_45 p_r_45">
            <section class="settings">
                <nav>
                    <ul>
                        <li><a href="{{ url('settings/profile') }}">user profile</a></li>
                        <li><a href="{{ url('settings/reset') }}" class="active">reset pasword</a></li>
                        <li><a href="{{ url('stats') }}">my stats</a></li>
                    </ul>
                </nav>
                <section class="body">
                    <h1>{{ $data['subtitle'] }}</h1>
                    <form class="login_form flex_1 d_flex flex_c flex_ja_center w_p_50"  method="POST" action="{{ route('settings.reset') }}">
                        @csrf
                        <input type="password" name="password" placeholder="New Password" class="m_b_20">
                        <input type="password" name="password_confirmation" placeholder="Confirm New Password" class="m_b_20">
                        <button type="submit">Update</button>
                        @if ($errors->any())
                            <div class="error_box">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </form>
                </section>
            </section>
        </section>
    </div>
@endsection
