
# About Laravel-PGsQl
## Requirement 
- Download dataset from https://drive.google.com/file/d/1uTqJKUZMjQgHNJtXuOdDCpFM3dObjLBU/view?usp=sharing
- Using Laravel, PostgreSQL, and Redis, implement a system that allows filtering the attached dataset by person's birth year, or birth month. or both.
- Matching results must be cached in Redis for 60 seconds. Following requests for the same combination of filtering parameters (birth year, birth month) must not query database before cache expires.
- If user changes filter parameters, Redis cache for old results must be invalidated.
- Users can see all likes of a specific post.
- Design the database schema in a way that queries to PostgreSQL would not take longer than 250ms.
- Display results to the user in a paginated table, with 20 rows per page. Pagination must retrieve data from Redis cache if it is available.

- **[#1589F0](NOTE: Page number must not be a part of cache key. Instead, all rows from the database that match filtering criteria (month, year) must be stored in Redis, and pagination should retrieve only the required rows from Redis.)**
## Requirements
- Laravel 8.0 or higher.
- JWT or Laravel Sanctum.
- Posts identifiers should be UUID instead of Big Integer.
- Images should be stored in the local disk.
- Notifications should be queued.

### Bonus (Optional):
- Create 5 tests (validating successful and failed scenarios)

## I used the following
- Laravel 9.19 (Framework)
- JWT Authentication (Authentication)
- Laravel Notification (Sending New Post Notification to all users through Database chanel)
- Laravel Queue (Used for sending Notification)
- Taravel Task Scheduling (Used to delete 15 days old posts)
# How to Setup
1. Pull the repository form 
https://github.com/ahsan-ullah/Larave-Test.git
- or Run the following command 
> git clone https://github.com/ahsan-ullah/Larave-Test.git

## Run the following (quote) commands
> cp .env.example .env
- Create a database by laravel_test
- Update .env file database name to laravel_test
> composer update

> php artisan key:generate

> php artisan jwt:secret

> php artisan migrate

> php artisan serve

> php artisan storage:link

> php artisan queue:listen

> php artisan schedule:work

## Postman Collection
Postman Collection Link:
[Import Postmean Collection](https://www.getpostman.com/collections/c69ac03e69ca2dd85fcc)
https://www.getpostman.com/collections/c69ac03e69ca2dd85fcc

## Postman Collection Documentaiont
Postman Collection Documentaiont Link:
[Postmean Collection Documentaiont](https://documenter.getpostman.com/view/1952071/UzJPLv1A)
https://documenter.getpostman.com/view/1952071/UzJPLv1A
## Dependencies
- PHP 8 or hire
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
