<style>
    .post .card {
        margin-top: 40px;
        padding-top: 20px;
    }

    .post-img {
        max-width: 680px;
        height: auto;
        margin: 0 auto;
    }

    .card-text--excerpt {
        font-size: 18px;
    }
</style>



@extends('layouts.layout')

@section('title', $post->title)
@section('meta_keywords', $post->meta_keywords)
@section('meta_description', $post->meta_description)


@section('content')
    <div class="post">
        <div class="container">
            <div class="title">
                <h2>{{ $post->title }}</h2>
            </div>
            <div class="card">
                <div class="post-img">
                    <img src="../storage/{{ $post->image }}" class="card-img-top" alt="foto">
                </div>
                <div class="card-body">
                    <p blockquote class="card-text card-text--excerpt">{{ nl2br(strip_tags($post->excerpt)) }}</p>
                    <p class="card-text">{{ nl2br(strip_tags($post->body)) }}</p>
                </div>

                <div class="card-footer text-muted">
                    <p class="card-header--item">{{ $post->created_at->format(' j F Y ') }}</p>
                    @include('components.like')
                </div>
            </div>
            @include('components.comment')
            @include('components.social')
        </div>
    </div>
@endsection
