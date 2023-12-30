# Project #1 - Laravel 10 Task List

#### Commands

- Run MySQL
    - docker compose up
    - `http://localhost:8080/?server=mysql`

- Prepare Database and Run migrations
    - php artisan migrate

- Make Model and Migration file
    - php artisan make:model `ModelClassName` -m

- Run Migration
    - php artisan migrate

- Rollback Migration
    - php artisan migrate:rollback

- Apply Seed data to Database
    - php artisan db:seed
    - php artisan db:seed --class `SeederClassName`

    - Refresh database and apply seed data
        - php artisan migrate:refresh --seed

- Make Factory file
    - php artisan make:factory `FactoryClassName` --model=`ModelClassName`

- Run Query Builder by Laravel Tinker
    - php artisan tinker
        - \App\Models\Task::select('id', 'title')->where('completed', true)->get();

- Show Routes
    - php artisan route:list

- Make Request file
    - php artisan make:request `RequestClassName`
