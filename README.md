# Bayar-app-spp

<p align="center">
    <img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></br>
    apliksi pencatatan spp sekolah
</p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/7.x/installation)


Clone the repository

    git clone https://github.com/codevidn/Bayar-app-spp.git
    
Switch to the repo folder

    cd Bayar-app-spp

Install all the dependencies using composer

    composer install 

Create database for this app, copy the example env file and make the required database configuration changes in the .env file

    cp .env.example .env

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate --seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

# Code overview

## Folders

- `app/Models` - Contains all the Eloquent models
- `app/Http/Controllers` - Contains all the controllers
- `database/factories` - Contains the model factory for all the models
- `database/migrations` - Contains all the database migrations
- `database/seeds` - Contains the database seeder

## Environment variables

- `.env` - Environment variables can be set in this file

# Default  Admin Account

Default Username Or Email :

    admin1 or admin@mail.com 

Password : 

    password

# Documentation Aplikasi

[Link Google Drive](https://drive.google.com/open?id=1XjAh0qnPP_7RTM4s-5jmSfcgXi3wdjRV)

# Author

:rocket: [Muhammad Luthfi](https://codevidn.github.io)
