<style>
    .like-count {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.like-count button {
    border: none;
    background-color: inherit;
}

.like-count button:hover,
.like-count button:active,
.like-count button:focus {
    outline: inherit;
}

.next-plus:hover {
    color: green;
}

.counter {
    padding: 6px 10px 0 10px;
}

.rever {
    margin-top: 2px;
    transform: rotate(180deg);
}

.rever-minus:hover {
    color: red;
}

.card-header--item {
    margin-left: 10px;
}

</style>

<form action="{{ route('counter') }}" method="post" class="like-count">
    @method('put')
    @csrf
    <button class="next" type="submit" name="next" id="next"><span class="next-plus"
            style="font-size: 20px;"><i class="far fa-thumbs-up next"></i></span></button>

    <?php if ($post->like >= 0): ?>
    <div class="counter"><span id="counter"
            style="font-weight: 400; font-size: 20px; color: green;">{{ $post->like }}</span></div>
    <?php elseif ($post->like < 0): ?>
    <div class="counter"><span id="counter"
            style="font-weight: 400; font-size: 20px; color: red;">{{ $post->like }}</span></div>
    <?php endif; ?>

    <input type="hidden" name="id" value="{{ $post->id }}">
    <input type="hidden" name="like" value={{ $post->like }}>

    <button class="rever" type="submit" name="rever" id="rever"><span class="rever-minus"
            style="font-size: 20px;"><i class="far fa-thumbs-up"></i></span></button>
</form>
