<style>
    .contact {
        padding-top: 60px;
        padding-bottom: 80px;
    }

    .contact-maill {
        margin-top: 20px;
    }
</style>


@extends('layouts.layout')

@section('content')
    <div class="contact">
        <div class="container">
            <div class="title">
                <h2>Контакты</h2>
            </div>
            <div class="contact-maill">
                @include('components.maill')
            </div>
        </div>
    </div>
@endsection
