@extends('layouts.home.master')
@section('content')
    @include('layouts.home.box')
    <div id="main">
        @include('layouts.home.header')
        <section id="content" class="container flex_c w_p_100 p_l_45 p_r_45">
            <section id="tasks">
                @foreach ($data['tasks'] as $task)
                    <div class="task_container">
                        <div class="container flex_c">
                            <span>{{ $task->category->name }}</span>
                            <h2>{{ $task->name }}</h2>
                        </div>
                        <div class="container flex_j_between">
                            <div class="points"><i class="far fa-gem  m_r_10"></i>{{ $task->points }}</div>
                            @if (empty($task->isCompletedToday->first()))
                                <div class="confirm_task" data-id="{{ $task->id }}"><i class="fas fa-check"></i></div>
                            @else
                                <div class="task_completed" data-id="{{ $task->id }}"><i class="fas fa-check"></i></div>
                            @endif
                        </div>
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
