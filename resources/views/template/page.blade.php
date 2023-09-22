<style>
    .author {
        padding-top: 60px;
        padding-bottom: 80px;
    }

    .author .card {
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        margin-top: 40px;
        padding-top: 20px;
        padding-left: 20px;
        padding-bottom: 20px;
    }

    .author-img {
        /* margin: 0 auto; */
        max-width: 320px;
        height: auto;
    }

    .card-text--excerpt {
        font-size: 18px;
        font-weight: bold;
        color: #666;
    }
</style>

@extends('layouts.layout')

@section('title', $page->title)
@section('meta_keywords', $page->meta_keywords)
@section('meta_description', $page->meta_description)

@section('content')
    <section class="author">
        <div class="container">
            <div class="title">
                <h2>Автор: {{ $page->title }}</h2>
            </div>
            <div class="card">
                <div class="author-img">
                    <img src="{{ Voyager::image($page->image) }}" />
                </div>
                <div class="card-body">
                    <blockquote class="card-text card-text--excerpt">{{ nl2br(strip_tags($page->excerpt)) }}</blockquote>
                    <p class="card-text">{{ nl2br(strip_tags($page->body)) }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
