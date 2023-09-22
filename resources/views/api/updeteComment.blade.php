<style>
    .updete-comment form {
        margin-top: 20px;
    }

    .updete-comment p {
        font-size: 18px;
    }
</style>

@extends('layouts.app')

@section('content')
    @if (Auth::user())
        <div class="container">
            <div class="updete-comment">
                <div class="title">
                    <h2>Добро пожаловать {{ Auth::user()->name }}.</h2>
                    <p>Страница редактирование вашего комментария.</p>
                </div>
                <form action="{{ route('updateComment', ['id' => $comment->id]) }}" method="post" class="row g-3 needs-validation" novalidate>
                    @method('put')
                    @csrf
                    <div class="col-md-8">
                        <label for="validationTextarea" class="form-label">Содержание</label>
                        <textarea class="form-control" name="content" id="validationTextarea" rows="4" required>{{ $comment->content }}</textarea>
                        <div class="invalid-feedback">
                            Пожалуйста, введите сообщение в текстовое поле.
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    @endif
@endsection
