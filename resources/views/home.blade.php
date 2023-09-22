@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel">

        @include('components.communication')

        @if(Auth::user()->role_id === 1)
        <div class="title">
            <h2>Добро пожаловать {{ Auth::user()->name }}.</h2>
            <span>Чтобы войти в панель администрирования пройдите по ссылке:</span> <a href="/admin" style="font-size: 18px;">Admin</a>
        </div>
        @elseif (Auth::user()->role_id === 2)
        <div class="title">
            <h2>Добро пожаловать {{ Auth::user()->name }}.</h2>
            <span>Чтобы войти в личный кабинет пройдите по ссылке:</span> <a href="/admin" style="font-size: 18px;">Личный кабинет</a>
        </div>
        @elseif (Auth::user()->role_id === 3)
        <div class="title">
            <h2>Добро пожаловать {{ Auth::user()->name }}.</h2>
        </div>
        <div class="panel-user">
            @include('api.comments')
        </div>
        @endif

    </div>
</div>
@endsection
