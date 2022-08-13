
# About Laravel-PGsQl
## Dependencies
- PHP 8.0 or higher.
- Postgresql Database
- Redis server for storing the cache
## I have used the following
- Laravel 9.19 (Framework)
- Redis for cache
- Postgresql Database 
- Laravel Debuger
# How to Setup / Install
1. Pull the repository form 
https://github.com/ahsan-ullah/laravel-postgras.git
- or Run the following command 
> git clone https://github.com/ahsan-ullah/laravel-postgras.git

## Run the following (quote) commands

> cp .env.example .env

> php artisan key:generate

- Create a database in Postgresql name laravel_redis
- Update the .env file as following
    - DB_CONNECTION=pgsql
    - DB_PORT=5432
    - DB_DATABASE=laravel_redis
> composer update

> php artisan migrate
- To insert the 100000 data then run following command
> php artisan db:seed

> php artisan serve

- If you want to see query execution time then change .env by 
    - APP_DEBUG=true
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
