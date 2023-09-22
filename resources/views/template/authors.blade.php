<style>
    .authors {
        padding-top: 60px;
        padding-bottom: 80px;
    }

    .authors .card {
        height: 100%;
        margin-top: 40px;
    }

    .authors a {
        margin-top: 20px;
    }
</style>



@extends('layouts.layout')

@section('title')
{{ env('APP_NAME', 'Laravel-admin') }}
@stop

@section('content')
    <div class="authors">
        <div class="container">
            <div class="title">
                <h2>Все наши авторы.</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($authors as $author)
                    <div class="col">
                        <div class="card" style="max-width: 18rem;">
                            <img src="storage/{{ $author->image }}" class="card-img-top" alt="foto">
                            <div class="card-body">
                                <h5 class="card-title">{{ $author->title }}</h5>
                                <div class="card-text">
                                    <p class="card-text">{{ mb_strimwidth($author->excerpt, 0, 56, "...") }}</p>
                                </div>
                                <a href="{{ route('page', ['page' => $author->slug]) }}" class="btn btn-primary">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
