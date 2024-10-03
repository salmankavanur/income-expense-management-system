<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

![screencapture-127-0-0-1-8000-dashboard-2024-10-03-16_34_08](https://github.com/user-attachments/assets/17ab54c2-4af9-4482-8c17-01dae87bd9bd)
![screencapture-127-0-0-1-8000-categories-2024-10-03-16_36_42](https://github.com/user-attachments/assets/5cc1b324-73a9-4c75-bb84-f7123660668c)
![screencapture-127-0-0-1-8000-transactions-create-2024-10-03-16_37_10](https://github.com/user-attachments/assets/801e340d-af14-4b7b-9659-110b35e95226)

# Income Expense Management System

## Project Overview
**Income Expense Management** is a web-based application designed to help users efficiently manage their financial transactions. With features for tracking income and expenses across multiple categories, this project provides clear and concise overviews of financial data, empowering users to make informed financial decisions. The application is built using modern web technologies including **Laravel**, **Tailwind CSS**, and **Alpine.js**, with a focus on simplicity, performance, and ease of use.

## Key Features
- **User Roles & Permissions**: Different roles such as Super Admin, Admin, and Accountant with varying levels of access control, powered by the **Spatie Laravel Permissions** package.
- **Income & Expense Tracking**: Categorize and log financial transactions, helping users easily track their income and expenses.
- **Category-wise Analytics**: Visualize income and expenses by category with **charts and graphs** powered by **Chart.js**, providing detailed insights into spending and earnings.
- **Dark Mode Support**: The application supports dark mode, enhancing the user experience in low-light environments.
- **Responsive Design**: Built with a responsive design, the application works seamlessly across desktop, tablet, and mobile devices.
- **Transaction CRUD**: Full **Create, Read, Update, Delete** (CRUD) capabilities for transactions, allowing users to easily manage and review their financial data.
- **User Management**: Super Admins can create, update, or delete users with assigned roles.

## Technologies Used
- **Laravel** (PHP framework) for back-end development
- **Tailwind CSS** for responsive and modern styling
- **Alpine.js** for interactive front-end functionality
- **Chart.js** for generating charts and data visualizations
- **MySQL** for data storage
- **Spatie Laravel Permissions** for role and permission management

## Installation & Setup Guide

### Step 1: Clone the repository
```bash
git clone https://github.com/salmankavanur/income-expense-management-system.git
cd income-expense-management-system
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm run build
php artisan serve
```
## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
