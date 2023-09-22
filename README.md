<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Проект laravel-admin с добавлением с bootstrap и админкой Voyager.

1. Создаём проект.
2. Настраиваем аутентификацию и bootstrap
  a) composer require laravel/ui
  б) php artisan ui bootstrap --auth
  в) npm install bootstrap@latest bootstrap-icons @popperjs/core --save-dev
  г) в миграции user добавляем поле role, image и model User
  Д) php artisan migrate
  е) npm install && run dev
  ж) npm run build
  з) Теперь вставляем   <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js']) в head где надо.
3. Делаем регистрацию для admin и остальных пользователей.
  а) Для admin оставляем основную регистрацию лишь добавляем role = 1 в RegisterController.
  б) Для Client создаём RegisterClientController и Route в api а также registerClient.bade.php и route в web.
  в) Также вносим изменения в app.blade.php и navbar.blade.php
4. Вносим изменения в Kernel.php
 
Voyager очень прост в установке. После создания нового приложения Laravel вы можете включить пакет Voyager следующей командой:

composer require tcg/voyager

Далее убедитесь, что вы создали новую базу данных и добавили учетные данные вашей базы данных в .env файл, а также добавьте URL вашего приложения в переменную
 
APP_URL:
APP_URL=http://localhost
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

Наконец, мы можем установить Voyager. Вы можете выбрать установку Voyager с фиктивными данными или без них. В состав данных будет входить 1 аккаунт администратора (если нет уже существующих пользователей), 1 демо-страница, 4 демо-записи, 2 категории и 7 настроек.
Чтобы установить Voyager без фиктивных данных просто запустите

php artisan voyager:install

Если вы предпочитаете установить его с фиктивными данными, выполните следующую команду:

php artisan voyager:install --with-dummy

Ошибка Specified key was too long Если вы видите это сообщение об ошибке у вас устаревшая версия MySQL, воспользуйтесь следующим решением: https://laravel-news.com/laravel-5-4-key-too-long-error
И всё готово!

Запустите локальный сервер разработки командой php artisan serve и откройте URL http://localhost:8000/admin в вашем браузере.
Если вы установили фальшивые данные, то для вас был создан пользователь со следующими учетными записями:

email: admin@admin.com password: password

Краткая справка Пользователь создается только, если в вашей базе данных нет текущих пользователей.
Если фиктивный пользователь не был создан, вы можете назначить права администратора существующему пользователю. Это можно легко сделать, выполнив следующую команду:

php artisan voyager:admin your@email.com

Если вы хотите создать нового пользователя с правами администратора, вы можете передать флаг --create, как показано ниже.:
php artisan voyager:admin your@email.com --create

Вам будет предложено ввести имя пользователя и пароль.

