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
- php artisan make:component RadioGroup
- php artisan make:component Button --view
- npm install alpinejs
- php artisan make:model Employer -mf
- php artisan db:wipe && php artisan migrate
- php artisan migrate:refresh --seed
- php artisan make:controller AuthController --resource
- php artisan migrate:refresh --seed
- php artisan make:model JobApplication -mf
- php artisan migrate:refresh --seed
- php artisan make:controller JobApplicationController --resource
- php artisan make:policy JobPolicy --model=Job
- php artisan make:controller MyJobApplicationController --resource
- php artisan make:migration AddCvPathToJobApplicationsTable
- php artisan migrate
- php artisan make:component Label
- php artisan make:controller EmployerController --resource
- php artisan make:policy EmployerPolicy --model=Employer
- php artisan make:controller MyJobController --resource
- php artisan make:middleware Employer
- php artisan make:request JobRequest
- php artisan make:migration AddSoftDeletesToJobsTable
- php artisan migrate
