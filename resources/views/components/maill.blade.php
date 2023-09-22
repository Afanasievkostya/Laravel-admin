<style>
    .maill-default {
        margin-top: 40px;
    }

    .maill form {
        margin-top: 20px;
    }

    #sendmessage,
    #senderror {
        display: none;
    }
</style>

<section id="content">
    <div class="maill">
        <div class="title">
            <h3>По всем вопросам можете связаться с нами и мы вам постараемся ответить.</h3>
        </div>
        <div id="sendmessage" class="alert alert-info" role="alert">
            <p style="margin: 0;">Ваше сообщение отправлено!</p><a href="<?php echo $_SERVER['REQUEST_URI']; ?>">x</a>
        </div>

        <div id="senderror" class="alert alert-info" role="alert">
            <p style="margin: 0;">При отправке сообщения произошла ошибка. Продублируйте его, пожалуйста, на почту
                администратора <strong>afonas48@yandex.ru</strong></p><a href="<?php echo $_SERVER['REQUEST_URI']; ?>">x</a>
        </div>

        <form class="row g-3" method="POST" id="contactform">
            @csrf
            <div class="col-md-4">
                <label for="validationCustom01" class="col-form-label text-md-end">Ваше имя:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="validationCustom01"
                    name="name" placeholder="* Введите ваше имя" required autocomplete="name" autofocus />
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="col-form-label text-md-end">Ваш Email:</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror"
                    id="validationCustomUsername" name="email" placeholder="* Введите ваш email" required
                    autocomplete="email" />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="col-form-label text-md-end">Тема сообщения:</label>
                <input type="text" class="form-control @error('subject') is-invalid @enderror"
                    id="validationCustom02" name="subject" placeholder="* Введите тему сообщения" required
                    autocomplete="subject" />
                @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="validationTextarea" class="col-form-label text-md-end">Сообщение:</label>
                <textarea rows="8" name="message" class="form-control @error('message') is-invalid @enderror"
                    placeholder="* Ваше сообщение..." required autocomplete="message"></textarea>
                @error('message')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Отправить</button>
            </div>
        </form>
    </div>
</section>
