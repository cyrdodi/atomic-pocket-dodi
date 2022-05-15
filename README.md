# Atomic Pocket Dodi

Laravel Test dari Atomic Indonesia

## About

Dibuat dengan Laravel 8 dan PHP versi 7.4.
Menggunakan Framework CSS Tailwind CSS.

## Installation

1. Clone repository

```bash
git clone https://github.com/cyrdodi/atomic-pocket-dodi.git
```

2. Copy .env file

```bash
cp .env.example .env
```

3. Update Composer

```bash
composer update
```

4. Generate Key

```bash
php artisan key:generate
```

5. Lakukan migrasi database dan seed

```bash
php artisan migrate:fresh --seed
```

6. Atau export sql file
