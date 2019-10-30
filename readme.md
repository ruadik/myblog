## About myblog

Ready myblog for used. Created with use Laravel 6. <br>
Deploy on: <br> **<http://my-gallery-laravel-6.herokuapp.com>**
___

## О блоге

Готовый блог сделанныей на  Laravel 6. <br>
Выложен на: <br> **<http://my-gallery-laravel-6.herokuapp.com>**
___

## Install (Установка)

git clone **<https://github.com/ruadik/myblog>**

composer install<br>
yarn or npm install<br>
cp .env.example .env   - Генерация .ENV (В нем необходимо прописать имя созданой DB, логин и пароль) <br>
php artisan key:generate<br>
php artisan migrate<br>
php artisan db:seed<br>


php artisan serve<br>

В табличке users в поле **role_id** установите значение **2**, что означает **администратор**. <br>
Далее входите под этим пользователем и в конце URL пишите **"/admin"**: <br>
**<http://my-gallery-laravel-6.herokuapp.com/admin>** <br>
Попадете в админ понель. <br>
Пароль у всех пользователей по умолчанию: **password**
___


