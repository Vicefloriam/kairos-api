# KAIROS API

Professional REST API developed with Laravel for managing authentication, users, products, categories, orders and business operations.

---

## Technologies

- Laravel 12
- PHP 8
- MySQL
- Laravel Sanctum
- REST API
- Eloquent ORM

---

## Features

- Authentication with tokens
- Products CRUD
- Categories CRUD
- Orders management
- Users and roles
- Protected routes
- JSON responses
- API validation

---

## Project Structure

```txt
app/
├── Models
├── Http
│   ├── Controllers
│   └── Requests
database/
├── migrations
├── seeders
routes/
└── api.php
```

---

## Installation

Clone repository:

```bash
git clone https://github.com/Vicefloriam/kairos-api.git
```

Enter project folder:

```bash
cd kairos-api
```

Install dependencies:

```bash
composer install
```

Create environment file:

```bash
copy .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Configure database inside `.env`

Run migrations:

```bash
php artisan migrate
```

Start development server:

```bash
php artisan serve
```

---

## API Endpoints

### Authentication

| Method | Endpoint |
|---|---|
| POST | /api/register |
| POST | /api/login |
| POST | /api/logout |

### Categories

| Method | Endpoint |
|---|---|
| GET | /api/categories |
| POST | /api/categories |
| PUT | /api/categories/{id} |
| DELETE | /api/categories/{id} |

---

## Future Features

- Swagger Documentation
- Role & Permission System
- Unit Testing
- Docker Support
- Advanced Reports
- Dashboard Integration

---

## Author

Vicente Javier Florian Herrera

Systems Engineering Student  
Backend Developer focused on Laravel and REST APIs

---

## License

This project is open-source and available under the MIT license.