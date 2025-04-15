# PHP MVC Blog System

A lightweight and secure blog system built with PHP using the MVC (Model-View-Controller) architecture pattern.

## Features

- MVC Architecture
- Secure Authentication System
- Blog Post Management (Create, Read, Update, Delete)
- Clean and Responsive Design
- MySQL Database Integration
- Password Hashing Security

## Technical Requirements

- PHP 5.5 or higher
- MySQL Database
- mbstring PHP Extension

## Installation

1. Clone the repository
2. Import `db.sql` into your MySQL database
3. Configure your database credentials in `Engine/Config.php`
4. Default admin credentials:
   - Email: test@test.com
   - Password: pwd123

## Project Structure

```
├── Controller/     # Controllers handling business logic
├── Engine/        # Core framework files
├── Model/         # Database models
├── View/          # View templates
├── static/        # Static assets (CSS, JS)
└── index.php      # Application entry point
```

## Security Features

- Password Hashing using PHP 5.5's password hashing functions
- SQL Injection Prevention
- XSS Protection
- Secure Session Management

## License

This project is licensed under the Lesser General Public License (LGPL) 