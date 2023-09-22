<style>
    .nav-item a {
        font-weight: bold;
    }

    .nav-item a:hover {
        opacity: 0.5;
    }

    .navbar-brand {
        font-size: 24px;
        font-weight: bold;
        color: #666;
    }

    .navbar-brand:hover {
        opacity: 0.5;
    }

    .title-brend {
        font-family: "Christopher";
        font-size: 28px;
        font-weight: 400;
        color: rgb(58, 101, 218);
    }

    .title-brend:hover {
        color: rgb(58, 101, 218);
        opacity: 1;
    }
</style>

<nav class="navbar navbar-expand-md navbar-light shadow-sm">
    <div class="container-fluid container">
        <span class="navbar-brand title-brend">
            Laravel
        </span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto my-2 my-lg-0">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="/">Главная</a>
                </li>
                <li class="nav-item {{ Request::is('addPosts') ? 'active' : '' }}">
                    <a class="nav-link" href="/addPosts">Публикации</a>
                </li>
                <li class="nav-item {{ Request::is('addAuthors') ? 'active' : '' }}">
                    <a class="nav-link" href="/addAuthors">Авторы</a>
                </li>
                <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="/contact">Контакты</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link"><img src="{{ asset('icons/user.png') }}"
                                    alt="home"></a>
                        </li>
                    @else
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link " data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;">
                                    Личный кабинет
                                </a>
                                <ul class="dropdown-menu" style="padding-left: 10px;">
                                    <li class="nav-item"><a href="{{ route('login') }}"
                                            class="nav-link dropdown-item" style="color: red;">Вход</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item"><a href="{{ route('register') }}"
                                                class="nav-link dropdown-item" style="color: red;">Регистрация авторов</a></li>
                                    @endif
                                </ul>
                            </div>
                        </li>
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
