@extends('layouts.home.master')
@section('content')
    @include('layouts.home.box')
    <div id="main">
        @include('layouts.home.header')
        <section id="content" class="container flex_c w_p_100 p_l_45 p_r_45">
            <section class="top_three">
                <div class="user btlr bblr">
                <div class="user_avatar">{{ $data['second']->user->usernameInitials() }}</div>
                    <h1>Second Place</h1>
                    <div class="points_container d_flex flex_r">
                        <div class="total_points">
                            <i class="far fa-gem"></i>
                            Total: {{ $data['second']->total }}
                        </div>
                    </div>
                    <h2>{{ $data['second']->user->username }}</h2>
                </div>
                <div class="user best br">
                        <div class="user_avatar">{{ $data['first']->user->usernameInitials() }}</div>
                        <h1>Overall Best</h1>
                        <div class="points_container d_flex flex_r">
                            <div class="total_points">
                                <i class="far fa-gem"></i>
                                Total: {{ $data['first']->total }}
                            </div>
                        </div>
                        <h2>{{ $data['first']->user->username }}</h2>
                </div>
                <div class="user btrr bbrr">
                        <div class="user_avatar">{{ $data['third']->user->usernameInitials() }}</div>
                        <h1>Third Place</h1>
                        <div class="points_container d_flex flex_r">
                            <div class="total_points">
                                <i class="far fa-gem"></i>
                                Total: {{ $data['third']->total }}
                            </div>
                        </div>
                        <h2>{{ $data['third']->user->username }}</h2>
                </div>
            </section>
            <h1 class="subtitle">Next in Line</h1>
            <section class="top_ten">
                @foreach ($data['topTen'] as $place => $topUser)
                    <div class="user btlr bblr">
                    <div class="user_avatar">{{ $topUser->user->usernameInitials() }}</div>
                        <h1>{{ $place+4 }}th Place</h1>
                        <div class="points_container d_flex flex_r">
                            <div class="total_points">
                                <i class="far fa-gem"></i>
                                Total: {{ $topUser->total }}
                            </div>
                        </div>
                        <h2>{{ $topUser->user->username }}</h2>
                    </div>
                @endforeach
            </section>
        </section>
    </div>
@endsection

{{-- Use this when resetting password --}}
 {{-- @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif --}}
