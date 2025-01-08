
# Laravel CVMS

 Laravel Child Vaccination Management System.



## Installation

Clone the project using SSH or HTTPS.

```bash
git@github.com/Sagarhoraa/laravel-Repo-.git
```
## Run Locally

Go to the Project Directory

```bash
cd laravel-Repo
```
Create and configure the Database

```bash
sudo mysql -u <username> -p
create database laravel_cvms;
```
Install Dependencies

```bash
composer install
```

Generate Application Key

```bash
php artisan key:generate
```

Run the Database Migrations and Seeders

```bash
php artisan migrate:fresh --seed
```

Create a Symbolic Link to Storage

```bash
php artisan storage:link
```

Run the Server

```bash
php artisan serve
```


## Author

- [@Sagarhoraa](https://www.github.com/Sagarhoraa)
