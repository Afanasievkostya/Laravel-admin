<style>
    /*      footer    */
footer {
    padding: 40px 0 40px 0;
    background-color: #2cb8e7;
}

.footer-logo {
    text-align: start;
}

footer .brand {
    margin-left: 2rem;
}

footer .info {
    text-align: center;
}

.footer-logo a {
    color: #46505a;
    font-weight: bold;
    font-size: 24px;
}

.footer-logo a:hover,
.footer-logo a:focus {
    opacity: 0.5;
}

.info a {
    color: #46505a;
    font-weight: bold;
    font-size: 18px;
}

.info a:hover,
.info a:focus {
    opacity: 0.5;
}

footer .social {
    margin: 0 auto;
    width: 100px;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
}

.social .nav-item {
    padding: 0 10px 0 10px;
}

.info-text a {
    color: #46505a;
}

</style>

<div class="row">
    <div class="footer-logo col text-center">
        <a href="{{ url('/') }}" class="logo-link">laravel</a>
    </div>
    <div class="info col text-center">
        <a href="/contact" class="info-link">Контакты</a>
    </div>
    <div class="nav-social col">
        <ul class="social">
            <li class="nav-item">
                <a class="nav-link" href="https://www.vk.com"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px"><path d="M 4 2 C 2.898438 2 2 2.898438 2 4 L 2 20 C 2 21.101563 2.898438 22 4 22 L 20 22 C 21.101563 22 22 21.101563 22 20 L 22 4 C 22 2.898438 21.101563 2 20 2 Z M 8 6 L 11.875 6 C 13.074219 6 16 6.046875 16 8.53125 C 16 10.011719 14.992188 10.652344 14.53125 10.84375 L 14.53125 10.90625 C 15.71875 10.90625 17 12.15625 17 13.53125 C 17 15.011719 16.382813 17 12.40625 17 L 8 17 Z M 11 8 L 11 10 C 11 10 11.910156 10 12.0625 10 C 12.921875 10 13 9.242188 13 9.0625 C 13 8.949219 12.984375 8 12.03125 8 Z M 11 12 L 11 15 C 11 15 12.25 14.96875 12.5 14.96875 C 13.796875 14.96875 14 13.871094 14 13.46875 C 14 12.859375 13.65625 12 12.53125 12 C 12.261719 12 11 12 11 12 Z"/></svg></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://google.com"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                    <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                  </svg></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://web.telegram.org/k/"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                  </svg></a>
            </li>
        </ul>
    </div>
</div>
