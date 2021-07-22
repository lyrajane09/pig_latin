# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

# README
Steps

1. Make sure to have phpmyadmin, xampp & mysql. Clone this repository and put it on htdocs folder C:\xampp\htdocs\.
2. Make sure to install composer on your computer [https://getcomposer.org/](https://getcomposer.org/) 
3. After cloning the project and installing the composer, go to the root folder of the project (pig_latin) and run this command
```
composer install
````
4. Create a pig_latin database.
5. After creating a pig_latin database, start your xampp.
6. Open the .env file on your IDE/Code editor and edit the code below, add your database name, database username and database password.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pig_latin
DB_USERNAME=root
DB_PASSWORD=
```
7. Go to your root folder of the project and run this command
```
php artisan migrate
```
```
php artisan db:seed --class=PigLatinSeeder
```
```
php artisan serve --port 2000
```
8. Open your favorite browser and go to this link [http://localhost:2000/](http://localhost:2000/)
9. To test the sample pig latin words go to [http://localhost:2000/](http://localhost:2000/)
10. To test/create a new pig latin word go to your postman and go to the post request and
go to this url [http://localhost:2000/create](http://localhost:2000/create). Make sure
to add the `word` request input on the body and hit the send button.
![alt text](https://github.com/lyrajane09/pig_latin/blob/master/public/images/Capture.PNG?raw=true)




