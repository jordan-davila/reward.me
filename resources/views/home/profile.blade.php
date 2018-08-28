@extends('layouts.home.master')
@section('content')
    <div id="main">
        @include('layouts.home.header')
        <section id="content" class="container flex_c w_p_100 p_l_45 p_r_45">
            <section class="settings">
                <nav>
                    <ul>
                        <li><a href="{{ url('settings/profile') }}" class="active">user profile</a></li>
                        <li><a href="{{ url('settings/reset') }}">reset password</a></li>
                        <li><a href="{{ url('stats') }}">my stats</a></li>
                    </ul>
                </nav>
                <section class="body">
                    <h1>{{ $data['subtitle'] }}</h1>
                    <form class="login_form flex_1 d_flex flex_c flex_ja_center w_p_50"  method="POST" action="{{ route('settings.profile') }}">
                        @csrf
                        <input type="text" name="username" placeholder="username" class="m_b_20" value="{{ Auth::user()->username }}"/>
                        <input type="text" name="name" placeholder="name" class="m_b_20" value="{{ Auth::user()->name }}"/>
                        <input type="text" name="facebook" placeholder="facebook" class="m_b_20" value="{{ Auth::user()->facebook }}"/>
                        <input type="text" name="twitter" placeholder="twitter" class="m_b_20" value="{{ Auth::user()->twitter }}"/>
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
