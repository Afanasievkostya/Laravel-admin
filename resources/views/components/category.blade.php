<style>
    .list-group {
        margin-top: 10px;
    }

    .list-group-item {
        padding: 0 0 0 10px;
        border: none;
    }

    .list-group-item a {
        font-size: 16px;
        font-weight: 700;
        color: #666;
    }

    .list-group-item a:hover,
    .list-group-item a:focus {
        opacity: 0.5;
    }

    .category .card {
        padding-left: 10px;
        border: none;
    }

    .category .card ul {
        margin-top: 5px;
    }

    .chapter-title {
        margin: 0;
        margin-top: 10px;
        padding-left: 10px;
    }

    .chapter {
        font-size: 18px;
        font-weight: bold;
        color: #666;
    }

    .chapter:hover,
    .chapter:focus {
        color: #666;
        opacity: 0.5;
    }

</style>
<p class="chapter-title">
    <a class="chapter" href="/addPosts">Все</a>
</p>
@foreach ($chapters as $chapter)
    <p class="chapter-title">
        <a class="chapter dropdown-toggle" data-bs-toggle="collapse" href="#collapseExample{{ $chapter->id }}"
            aria-expanded="false" aria-controls="collapseExample">
            {{ $chapter->name }}
        </a>
    </p>
    <div class="collapse category" id="collapseExample{{ $chapter->id }}">
        @foreach ($categories as $category)
            @if ($chapter->id === $category->parent_id)
                <div class="card">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="/addCategory/{{ $category->id }}">- {{ $category->name }}</a>
                        </li>
                    </ul>
                </div>
            @endif
        @endforeach
    </div>
@endforeach
