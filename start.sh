#!/bin/bash

echo "==> Setting up .env..."
if [ ! -f .env ]; then
  cp .env.example .env
fi

# Generate app key if missing
if ! grep -q "^APP_KEY=base64:" .env; then
  php artisan key:generate --force
fi

# Set APP_URL from Replit environment
if [ -n "$REPLIT_DEV_DOMAIN" ]; then
  sed -i "s|APP_URL=.*|APP_URL=https://${REPLIT_DEV_DOMAIN}|" .env
elif [ -n "$REPL_SLUG" ] && [ -n "$REPL_OWNER" ]; then
  sed -i "s|APP_URL=.*|APP_URL=https://${REPL_SLUG}.${REPL_OWNER}.repl.co|" .env
fi

sed -i "s|APP_ENV=.*|APP_ENV=production|" .env
sed -i "s|APP_DEBUG=.*|APP_DEBUG=false|" .env
sed -i "s|DB_CONNECTION=.*|DB_CONNECTION=sqlite|" .env

echo "==> Installing Composer dependencies..."
if [ ! -d vendor ]; then
  composer install --no-dev --optimize-autoloader --no-interaction
fi

echo "==> Setting up database..."
touch database/database.sqlite
php artisan migrate --force

echo "==> Fixing storage permissions..."
chmod -R 775 storage bootstrap/cache
php artisan storage:link --force 2>/dev/null || true

echo "==> Building frontend assets..."
if [ ! -d public/build ]; then
  npm install
  npm run build
fi

echo "==> Caching config..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "==> Starting server on port 8080..."
exec php artisan serve --host=0.0.0.0 --port=8080
