@extends('layouts.home.master')
@section('content')
<div id="main" class="container p_a_45">
    @include('layouts.home.nav')
</div>
@endsection
{{-- <a class="dropdown-item" href="{{ route('logout') }}"
   onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form> --}}

{{-- Use this when resetting password --}}
 {{-- @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif --}}
