# Laravel Deployment Project

## Features
- Laravel Application
- Queue System
- Background Jobs
- Docker Support
- GitHub Actions CI/CD
- Automated Build Pipeline

## Technologies
- Laravel
- PHP 8.4
- Docker
- GitHub Actions
- SQLite

## Setup

```bash
composer install
php artisan migrate
php artisan serve
```

## Docker

```bash
docker compose up --build
```

## Queue Worker

```bash
php artisan queue:work
```

## CI/CD
GitHub Actions automatically builds the Docker container on every push to the main branch.

## Author
Omar Swerih
