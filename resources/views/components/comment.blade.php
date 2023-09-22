<style>
    .comments {
        padding-top: 40px;
        padding-bottom: 20px;
    }

    .comments form {
        margin-top: 20px;
    }

    .comments button {
        margin-top: 20px;
    }

    .comments-text--registrat {
        margin-left: 10px;
    }

    .message {
        padding: 10px;
        margin-left: 4rem;
        margin-bottom: 20px;
        border: 1px solid #ccc;
    }

    .message p {
        margin: 0;
    }

    .text-weight {
        font-size: 18px;
        font-weight: bold;
    }

    .data {
        font-size: 14px;
    }

    .comments .card-header {
        padding: 0;
        margin-bottom: 0;
    }

    .card-header--left {
        margin-left: 10px;
    }



    .comments .card-body {
        padding: 0.5rem 0.5rem;
        font-size: 16px;
        color: #000;
    }

    .display-comments {
        padding-top: 40px;
    }

    .comments .wrapper {
        margin-top: 20px;
        margin-left: 4rem;
        padding: 0;
    }

    .comments .card-image {
        float: left;
    }

    .comments .card-image img {
        width: 50px;
        height: auto;
        border-radius: 50%;
    }

    .card-header--left {
        display: flex;
        flex-direction: row;
        justify-content: space-between;

    }

    .comment-item {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .comment-link {
        font-size: 18px;
        color: #666;
    }

    .alert {
        padding: 10px 15px 10px 15px;
    }
</style>


<div class="comments">
    <div class="title">
        <h2>Комментарии</h2>
    </div>
    @if (!empty(Auth::user()))
        <div style="margin-top: 20px;">
            <h4>Добро пожаловать: <span
                    style="font-size: 24px; font-weight: bold; color: red">{{ Auth::user()->name }}</span></h4>
        </div>
        <form action="{{ route('storeComment') }}" method="post" class="needs-validation" novalidate>
            @csrf
            <div class="form-row" style="margin-top: 20px;">
                <div class="col-md-6 mb-3">
                    <textarea class="form-control" id="validationCustom02" name="content" rows="2" placeholder="Ваш комментарий"
                        required></textarea>
                    <div class="valid-feedback">
                        Текст написан!
                    </div>
                    <div class="invalid-feedback">
                        Вы не написали текст.
                    </div>
                    <input type="hidden" name="userId" Value="{{ Auth::user()->id }}">
                    <input type="hidden" name="postId" value="{{ $post->id}}">
                </div>
            </div>
            <div class="form-row">
                <button type="submit" name="submit-comment" class="btn btn-success"
                    style="margin-bottom: 10px; margin-top: 0;">Отправить</button>
            </div>
        </form>
    @else
        <div style="text-align: center; margin-top: 20px;">
            <h4 style="color: red;">Чтобы комментировать, пожалуйста
                <a data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false"
                    aria-controls="collapseExample1" style="font-size: 18px">
                    зарегистрируйтесь
                </a> или <a data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
                    aria-controls="collapseExample2" style="font-size: 18px">
                    войдите
                </a>
            </h4>
        </div>
        <div class="collapse" id="collapseExample1">
            @include('auth.registerCommentator')
        </div>

        <div class="collapse" id="collapseExample2">
            @include('auth.loginCommentator')
        </div>
    @endif
    <div class="display-comments">
        <div class="alert alert-info" role="alert">
            <ul class="comment-item">
                <li class="comment-link">Комментарий: {{ $sumComments }}</li>
                <li class="comment-link">Последние 10 комментарий</li>
            </ul>
        </div>
        <!--Блок показа комментарий-->
        <div class="wrapper">
            @if (isset($comments))
                @foreach ($comments as $comment)
                    <div class="card-wrapper animated bounce">
                        @foreach ($users as $user)
                            @if ($user->id == $comment->user_id)
                                <div class="card-image">
                                    <img src="../storage/{{ $user->avatar }}" alt="avatar">
                                </div>
                            @endif
                        @endforeach
                        <div class="card message">
                            <div class="">
                                <div class="card-header text-muted">
                                    <div class="card-header--left">
                                        @foreach ($users as $user)
                                            @if ($user->id == $comment->user_id)
                                                <p class="text-weight">{{ $user->name }}</p>
                                            @endif
                                        @endforeach
                                        <p class="text-weight data" style="margin-right: 10px;">
                                            {{ $comment->created_at->format(' j F Y ') }}</p>
                                    </div>
                                </div>
                                <div class="card-body page-comment">
                                    <p>{{ nl2br(htmlspecialchars($comment->content)) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
