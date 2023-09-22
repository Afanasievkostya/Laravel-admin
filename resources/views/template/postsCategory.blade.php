@extends('layouts.layout')

@section('title')
{{ env('APP_NAME', 'Laravel-admin') }}
@stop

@section('content')
    <div class="post">
        <div class="container">
            <div class="title">
                <h2>Публикации по теме: {{ $category->name }}.</h2>
            </div>
            <div class="row post-wrapper">
                <div class="col" style="border-right: 2px solid rgba(215, 212, 212, 0.9)">
                    <div class="post-category">
                        <div class="title" style="text-align: left">
                            <h3 style="font-weight: bold">Темы:</h3>
                        </div>
                        @include('components.category')
                    </div>
                </div>
                <div class="col-10">
                    <div class="row post-card">
                        @foreach ($posts as $post)
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img src="../storage/{{ $post->image }}" class="card-img-top" alt="foto"
                                        style="width: avto; height: 180px;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <div class="card-text">
                                            <p class="card-text">{{ mb_strimwidth($post->excerpt, 0, 56, "...") }}</p>
                                        </div>
                                        <a href="/addPost/{{ $post->id }}" class="btn btn-primary">Подробнее...</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $posts->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
