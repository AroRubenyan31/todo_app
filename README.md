# Laravel TODO Application

A simple and elegant TODO application built with Laravel.

## Prerequisites

Before running this project locally, ensure you have the following installed:

- PHP >= 8.2
- Composer
- Node.js & npm
- SQLite database
- Git (optional)

## Step-by-Step Instructions to Run Locally

### 1. Clone or Download the Project

If using Git:
```bash
git clone https://github.com/AroRubenyan31/todo_app.git
cd todo-app
```

Or download and extract the ZIP file, then navigate to the project directory.

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install JavaScript Dependencies

```bash
npm install
```

### 4. Set Up Environment Configuration

Copy the example environment file:
```bash
cp .env.example .env
```

For Windows Command Prompt:
```cmd
copy .env.example .env
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Configure Database

Open the `.env` file and update the database credentials:

```env
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo_app
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Create the database in SQLite:
```sql
CREATE DATABASE todo_app;
```

### 7. Run Database Migrations

```bash
php artisan migrate
```

If you want to seed the database with sample data:
```bash
php artisan migrate --seed
```

### 8. Build Frontend Assets

For development:
```bash
npm run dev
```

For production:
```bash
npm run build
```

### 9. Start the Development Server

```bash
php artisan serve
```

The application will be available at: `http://localhost:8000`

### 10. Access the Application

Open your web browser and navigate to:
```
http://localhost:8000
```

## Additional Commands

### Clear Cache
```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### Run Tests
```bash
php artisan test
```

### Storage Link (for file uploads)
```bash
php artisan storage:link
```

## Troubleshooting

### Permission Issues (Linux/Mac)
```bash
chmod -R 775 storage bootstrap/cache
```

### Port Already in Use
If port 8000 is already in use, specify a different port:
```bash
php artisan serve --port=8001
```

## Project Structure

```
todo-app/
├── app/                # Application core files
├── bootstrap/          # Framework bootstrap files
├── config/            # Configuration files
├── database/          # Migrations and seeders
├── public/            # Public assets
├── resources/         # Views, CSS, JS
├── routes/            # Application routes
├── storage/           # Logs and cache
├── tests/             # Test files
└── vendor/            # Composer dependencies
```

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. Learn more at [laravel.com](https://laravel.com).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
