<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel Sanctum API Project

This repository contains a Laravel API project that leverages **Laravel Sanctum** for user authentication and token management. The application provides the following features:

## Features

### User Authentication

- **Register**: Users can register and automatically receive an authentication token.
- **Login**: Users can log in to receive a new authentication token.
- **Logout**: Users can log out, which destroys their active authentication token.

### Posts Management

Authenticated users can perform the following actions on posts:

- **Create**: Only logged-in users can create posts.
- **Update**: Users can update their own posts.
- **Show**: All users, authenticated or not, can view individual posts or a list of all posts.
- **Delete**: Users can delete their own posts.

## Prerequisites

- PHP >= 8.1
- Composer
- Laravel 11
- SQLite

## Installation

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd <repository-folder>
   ```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
