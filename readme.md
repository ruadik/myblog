## About myblog

Ready myblog for used. Created with use Laravel 6. <br>
Deploy on: <br> **<http://my-blog-laravel-6.herokuapp.com>**
___

## О блоге

Готовый блог сделанные на  Laravel 6. <br>
Выложен на: <br> **<http://my-blog-laravel-6.herokuapp.com>**
___

## Функционал блога

### Функционал фронтальной части блога
Регистрация<br>
Подписка<br>
Зарегистрированные пользователи могут<br>
оставлять комментарии под постами,<br>
редактировать свои данные<br>
В правой панели отображаются посты по популярности(кол просмотров),<br>
рекомендуемые администратором, последние добавленные и по категориям


### Функционал административной части блога
Манипуляции (блокировка, бан, удаление) с пользователями, подписчиками, постами, комментариями и тд..<br>
Абсолютный доступ ко всем ресурсам блога<br>
___

## Install (Установка)

git clone **<https://github.com/ruadik/myblog>**

composer install<br>
yarn or npm install<br>
cp .env.example .env   - Генерация .ENV (В нем необходимо прописать имя созданной DB, логин и пароль) <br>
php artisan key:generate<br>
php artisan migrate<br>
php artisan db:seed<br>


В табличке users в поле **is_admin** установите значение **1**, что означает **администратор**. <br>
Далее входите под этим пользователем и в конце URL пишите **"/admin"**: <br>
**<http://my-blog-laravel-6.herokuapp.com/admin>** <br>
Попадете в админ панель. <br>
Пароль у всех пользователей по умолчанию: **password**
___


