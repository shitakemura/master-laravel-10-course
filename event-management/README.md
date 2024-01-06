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
- php artisan serve
- php artisan make:resource EventResource
- php artisan make:resource UserResource
- php artisan make:resource AttendeeResource
- php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
- php artisan make:controller Api/AuthController
- php artisan make:policy EventPolicy --model=Event
- php artisan make:policy AttendeePolicy --model=Attendee
