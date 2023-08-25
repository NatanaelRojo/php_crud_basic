# Basic Blog post

## Description

This is a basic crud aplication. This aplication stores a blog post logic to create several resources such as posts, tags, categories, and comments.

## How to use

For using purposes, you must have your database enviroment variables set. In .env.example, you have an example.
To install all dependencies run the following command within the project folder:
composer install
Next, run all migrations with the following command:
php artisan migrate
Finally run this command to deploy locally the aplication:
php artisan serve