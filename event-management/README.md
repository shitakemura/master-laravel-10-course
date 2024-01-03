# Project #3 - Event Management (REST API)

#### Commands
- composer create-project --prefer dist laravel/laravel event-management
- php artisan migrate
- php artisan make:model Event -m
- php artisan make:model Attendee -m
- php artisan make:controller Api/AttendeeController --api
- php artisan make:controller Api/EventController --api
- php artisan route:list
- php artisan make:factory EventFactory --model=Event
- php artisan make:seeder EventSeeder
- php artisan make:seeder AttendeeSeeder
- php artisan migrate:refresh --seed
