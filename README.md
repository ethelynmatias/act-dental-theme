# ACT Dental Theme

A Laravel-based web application for ACT Dental.

## Requirements

- PHP >= 8.2
- Composer
- Node.js & NPM

## Installation

```bash
# Clone the repository
git clone <repository-url>
cd act-dental-theme

# Install PHP dependencies
composer install

# Install Node dependencies
npm install

# Copy environment file and configure your variables
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Build assets
npm run build
```

## Development

```bash
# Start the development server
php artisan serve

# Watch assets for changes
npm run dev
```

## Built With

- [Laravel 13](https://laravel.com) - PHP Framework
- [Vite](https://vitejs.dev) - Asset Bundler
