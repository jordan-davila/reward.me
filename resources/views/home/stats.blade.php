@extends('layouts.home.master')
@section('content')
    <div id="main">
        @include('layouts.home.header')
        <section id="content" class="container flex_c w_p_100 p_l_45 p_r_45">
            <section class="settings">
                <nav>
                    <ul>
                        <li><a href="{{ url('settings/profile') }}">user profile</a></li>
                        <li><a href="{{ url('settings/reset') }}">reset pasword</a></li>
                        <li><a href="{{ url('stats') }}" class="active">my stats</a></li>
                    </ul>
                </nav>
                <section class="body">
                    <h1>{{ $data['subtitle'] }}</h1>
                </section>
            </section>
        </section>
    </div>
@endsection
