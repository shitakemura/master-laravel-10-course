# Project #5 - Job Board

#### Commands
- composer create-project --prefer-dist laravel/laravel job-board 
- php artisan migrate
- php artisan make:model Job -mf
- php artisan make:controller JobController --resource
- php artisan migrate:refresh --seed
- composer require barryvdh/laravel-debugbar --dev
- npm install -D tailwindcss postcss autoprefixer
- npx tailwindcss init -p
- php artisan make:component Layout --view
- php artisan make:component Card --view
- php artisan make:component Tag --view
- php artisan make:component LinkButton --view
- php artisan make:component JobCard --view
- php artisan make:component Breadcrumbs
- npm install -D @tailwindcss/forms
- php artisan make:component TextInput