## Prerequisites

Before you begin, ensure you have the following installed on your system:
- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL or another supported database

## Installation

1. Clone the repository (or create a new Laravel project):
```bash
git clone https://github.com/farkmu45/imago-laravel-test-1.git
cd imago-laravel-test-1
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install NPM packages:
```bash
npm install
```

4. Copy the environment file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Configure your database in the `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

7. Run database migrations:
```bash
php artisan migrate
```

## Running the Application

1. Start the Laravel development server:
```bash
php artisan serve
```

2. In a separate terminal, compile and watch for asset changes:
```bash
npm run dev
```

3. Access the application in your browser:
```
http://localhost:8000
```

## Available Routes

- Registration: `http://localhost:8000/register`
- Login: `http://localhost:8000/login`
- Logout: Available via POST request to `/logout`

## Troubleshooting

1. If you encounter database issues:
```bash
php artisan config:clear
php artisan cache:clear
```

2. If the styles are not loading:
```bash
npm run dev
```
or for production:
```bash
npm run build
```

3. To reset the database and migrations:
```bash
php artisan migrate:fresh
```
