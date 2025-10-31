<p align="center">
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</p>

# Laravel Shugars

## Features:
- `Dockerize` - {`sqlite`, `mysql`, `mariadb`, `postgres`}
- `PHPMyAdmin`
- `PGAdmin`
- `Env`

## Choose a Database and copy `ENV` file

- `sqlite`
- `mysql`
- `mariadb`
- `postgres`


- `sqlite` - Copy the `.env.example` to `.env` file

`OR`

- `mysql` - Copy the `.env.example.mysql` to `.env` file

`OR`

- `mariadb` - Copy the `.env.example.mariadb` to `.env` file

`OR`

- `postgres` - Copy the `.env.example.postgres` to `.env` file


## Install

#### Frontend
```
cd frontend
```

```
{bun/deno/npm} install
```

#### Api
```
cd api
```

```
composer install
```

```
php artisn key:generate
```

```
php artisan migrate
```

```
php artisan db:seed
```

## Start
```
cd frontend
```
```
{bun/deno/npm} run dev
```

#### Api
```
cp ./api/.env ./
```

+ No SQLite Database:
```
docker compose -f ./compose-{mysql|mariadb|postgres}.yaml up -d
```

## License
open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
