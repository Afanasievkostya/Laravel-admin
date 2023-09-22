<style>
    .table-comments {
        margin-top: 40px;
    }

    table {
        margin-top: 20px;
    }

    .table-comments svg {
        margin-bottom: 4px;
    }

    .comment-action {
        margin: 0 auto;
        max-width: 250px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .comment-action button {
        width: 120px;
        margin-top: 2px;
        margin-bottom: 2px;
    }

    .comment-action a {
        width: 120px;
        margin-top: 2px;
        margin-bottom: 2px;
    }
</style>

<div class="table-comments">

    @if (Auth::user() === null)
        <div class="alert alert-primary" role="alert">
            Чтобы войти зарегистрируйтесь!
        </div>
    @elseif (Auth::user()->role_id === 3)
        <div class="title-page">
            <h3>Все ваши комментарии</h3>
        </div>
        <div class="table-responsive">
            <table class="table align-middle table-hover">
                <thead>
                    <tr>
                        <th scope="col">Название поста</th>
                        <th scope="col">Содержание комментария</th>
                        <th scope="col">Дата создания</th>
                        <th scope="col" style="text-align: center;">Доступные действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)
                        @if ($comment->user_id == Auth::user()->id)
                            <tr>
                                <td>
                                    @foreach ($posts as $post)
                                        @if ($post->id == $comment->post_id)
                                            {{ $post->title }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{ $comment->content }}</td>
                                {{-- <td>{{ $comment->created_at->format(' j F Y ') }}</td> --}}
                                <td>{{ date('j F Y', strtotime($comment->created_at)) }}</td>
                                <td>
                                    <div class="comment-action">
                                        <a href="/addUpdeteComment/{{ $comment->id }}" class="btn btn-primary"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                            </svg> Изменить
                                        </a>
                                        <form method="post"
                                            action="{{ route('deleteComment', ['id' => $comment->id]) }}">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" type="button" class="btn btn-danger"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                </svg> Удалить
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

</div>
