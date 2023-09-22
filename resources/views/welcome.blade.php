<style>
    .header-page1 {
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    .logo {
        text-align: center;
        position: relative;
        top: 20rem;
    }

    .logo h1 {
        font-family: "Christopher";
        font-size: 68px;
        color: #666;
    }

    .start {
        padding-bottom: 120px;
        background-color: #e6eaed;
    }

    .start .active {
        opacity: 1;
    }

    .posts-carousel {
        padding-top: 60px;
    }

    .carousel {
        margin-top: 30px;
    }

    .carousel img {
        width: auto;
        max-height: 680px;
    }

    .carousel-caption {
        padding-bottom: 2rem !important;
    }

    .start-authors {
        padding-top: 60px;
    }

    .start-authors .row {
        margin-top: 20px;
    }
</style>


@extends('layouts.layout')

@section('title')
    {{ env('APP_NAME', 'Laravel-admin') }}
@stop
@section('meta_keywords', 'kostya blog laravel')
@section('meta_description', 'blog, kostya')

@section('content')
    <div class="header-page1" style="background-image: url('img/headr-fon.png')">
        <div class="logo">
            <h1>Af-on-Blog</h1>
        </div>
    </div>
    <div class="start">

        <div class="posts-carousel">
            <div class="container">
                <div class="title">
                    <h2>Публикации</h2>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="storage/posts/post1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="/addPost/{{ $postOn[0]->id }}">
                                    <h5 style="color: #fff;">{{ $postOn[0]->title }}</h5>
                                </a>
                            </div>
                        </div>
                        @foreach ($posts as $post)
                            <div class="carousel-item">
                                <img src="storage/{{ $post->image }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <a href="/addPost/{{ $post->id }}">
                                        <h5 style="color: #fff;">{{ $post->title }}</h5>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="start-authors">
            <div class="container">
                <div class="title">
                    <h2>Наши авторы</h2>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($pages as $page)
                        <div class="col">
                            <div class="card" style="max-width: 18rem;">
                                <a href="{{ route('page', ['page' => $page->slug]) }}">
                                    <img src="storage/{{ $page->image }}" class="card-img-top" alt="автор">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
