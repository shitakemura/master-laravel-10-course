# Project #2 - Book Review

#### Commands
- composer create-project --prefer dist laravel/laravel book-review
- php artisan make:model Book -m
- php artisan make:model Review -m
- php artisan migrate
- php artisan migrate:refresh
- php artisan make:factory BookFactory --model=Book
- php artisan make:factory ReviewFactory --model=Review
- php artisan migrate:refresh --seed