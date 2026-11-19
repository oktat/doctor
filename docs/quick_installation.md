# Quick installation

## Install dependencies

```bash
composer install
```

## Creat .env file

Windows:

```bash
copy .env.example .env
```

Linux:

```bash
cp .env.example .env
```

## Generate application key

```bash
php artisan key:generate
```

## Generate database

```bash
php artisan migrate
```

## Seeding data

```bash
php artisan db:seed
```

## Start application

```bash
php artisan serve
```
