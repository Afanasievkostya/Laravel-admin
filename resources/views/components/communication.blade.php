<style>
    .alert p {
        float: left;
        margin-top: 5px;
        margin-left: 10px;
    }

    .alert a {
        margin-left: 50px;
        font-size: 20px;
        font-weight: bold;
        color: red;
    }


    .alert a:hover {
        opacity: 0.5;
    }
</style>

<div class="communication">
    @if (session('status'))
        <div class="alert alert-success alert-status" role="alert"
            style="display: flex;flex-direction: row; justify-content: space-between;">
            <p style="margin: 0;">{{ session('status') }}</p><a href="<?php echo $_SERVER['REQUEST_URI']; ?>"
                style="color: red; font-size: 18px;">x</a>
        </div>
    @endif
</div>
