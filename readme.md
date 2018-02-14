## Laravel based PHP Ecommerce-cms System

Ecommerce-cms is simple starting project to create ecommerce sites.

## Basic Features

- Laravel framework 5.5 LTS
- Bootstrap
- Thin Controllers
- Easy migration and auto generated seed
- Repository Patterns and Services
- Translation
- Currency change
- SEO friendly Routes
- Ajax and non ajax search
- Autocomplete and normal search
- Ajax and non ajax Pagination
- Products filters
- Product Iframe with fancySelect.js
- User roles and Permission
- Change user roles and permission
- Change Parent and subcategories
- Test Demo users
- CRUD for products, orders in backend
- Backend admin and user panel
- Login
- Registration and Email Verification with Activation Code
- Simple taxes and countries vats
- Test demo orders
- Complete Shopping Cart
- Simple discounts
- PayPal checkout Express demo payments
- Social Authentication with Socialite

##  Todo:
Laravel based PHP Ecommerce-cms it's not complete ecommerce platform,
project is starting point for simple ecommerce sites.

- Need more strong and complete validation.
- Complete support and managment for vat, taxes and shippings.
- Complete support for Paypal payments, orders, transactions
  including Credit Card support etc.
- Shopping cart improvements.
- Ecommerce-cms use https://github.com/zofe/rapyd-laravel for CRUD so 
if you need CRUD for more tables add appropriate methods and routes.

## Notice:

- The project is free to use but I can't offer support for it because I am very busy,
so pull request are welcome. I will provide only minor updates.
- Database will be reset every month.
- For local development like PayPal test payments and social login you need to set your own 
apps with proper user  data in config files and services.



## Official Documentation

Complete documentation for the this project it's not ready yet.
If you want to test repository you must:
* Clone the repo
* Database
  * `create database with name cms`
* Create .env file and set
  * `DB_DATABASE=cms`
  * `DB_USERNAME=root`
  * `leave password blank`
* Run by performing on the repo's folder to install all dependencies:
  * `$ composer update`
* Now
  * `$ php artisan migrate`
* Fill the database
  * `$ php artisan db:seed`
* then run
  * `$ php artisan serve`  
* And access
  * `http://127.0.0.1:8000/cms`
  
use admin username:
* `admin@admin.com pass adminadmin` for admin acount.
You are not be able to make test order with admin acount.

use demo username:
* `demo@demo.com pass demodemo` for demo user to make test order.
create or register new user if you want.

## Demo Page

Demo page for testing site navigation and functionality 
http://shop.tihoblajev.com

You can test registration or use: 
Username:demo@demo.com
password:demodemo

If you need full admin permission for backend use: 
Username:admin@admin.com
password:adminadmin

## Contributing

Thank you for considering contributing to this project!

### License

The Ecommerce-cms is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
