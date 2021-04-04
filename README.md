
# Echo Of Myanmar Backend Project

[![Laravel](https://github.com/mmcyberyouth/EchoOfMyanmarBackend/actions/workflows/laravel.yml/badge.svg)](https://github.com/mmcyberyouth/EchoOfMyanmarBackend/actions/workflows/laravel.yml)

# Installation

```bash
git clone https://github.com/mmcyberyouth/EchoOfMyanmarBackend
composer install
php artisan key:generate
cp .env.example .env # add database to .env
php artisan migrate
php artisan db:seed # seed for first user
```
