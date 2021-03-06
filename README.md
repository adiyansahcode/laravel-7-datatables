<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="250">
    </a>
</p>

# Laravel 7 Datatables
simple CRUD project created with laravel v7 with datatables

## Requirements

| no | name | version |
| ------------- | ------------- | ------------- |
| 1 | nginx | * |
| 2 | php | >= 7.2.5 |
| 3 | laravel | 7 |
| 4 | mariaDB | >= 10 |

## Installation
* clone this project
* Create .env file `cp .env.example .env`
* edit config database and mail in .env file
* Install composer package `composer install` or `composer update`
* create key and create storage
```
php artisan key:generate
php artisan storage:link
```
* for optimize server production `composer run-script optimize-prod`
* for optimize server development `composer run-script optimize-dev`
* run Migration and Seeder `php artisan migrate:fresh --seed`
* run server with php artisan
```
php artisan serve --port=8080
```
* run server with php native
```
php -S 127.0.0.1:8080 -t public
```
* done, just try run your project in browser to `http://127.0.0.1:8080`
* **nginx server is recommended**

## Function List

* [x] Book CRUD
* [x] Laravel Migrate and Seeder
* [x] Laravel Validation
* [x] Laravel Html
* [x] Template with AdminLte v3 ([jeroennoten](https://github.com/jeroennoten/Laravel-AdminLTE))
* [x] View Table with DataTables ([yajra](https://github.com/yajra/laravel-datatables))
