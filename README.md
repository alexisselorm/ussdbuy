# USSDBuy

## Usage

# PORTAL

### Installation

This app uses Laravel 9.32. The authentication is handled by Laravel Breeze. Start by installing Laravel dependencies

```
composer install
```

And npm dependencies

```
npm install
```

The latest version of Laravel uses Vite for building assets(JS and TailwindCSS), therefore you should run

```
npm run dev
```

### Database Setup

This app uses MySQL. To use something different, open up config/Database.php and change the default driver.

To use MySQL, make sure you install it, setup a database and then add your db credentials(database, username and password) to the .env.example file and rename it to .env

### Migrations

To create all the nessesary tables and columns, run the following

```
php artisan migrate
```

### Seeding The Database

To add the dummy phone numbers for testing, run the following

```
php artisan db:seed
```

### Running Then App

```
php artisan serve
```

# API

###

Import the attached BLUESPACE.postman_collection.json file into a client and test the api routes.

```

```
