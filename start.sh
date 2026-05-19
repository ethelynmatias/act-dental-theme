#!/bin/bash
set -e

# Copy .env if not present
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

# Force production-safe settings
sed -i "s|APP_ENV=.*|APP_ENV=production|" .env
sed -i "s|APP_DEBUG=.*|APP_DEBUG=false|" .env
sed -i "s|DB_CONNECTION=.*|DB_CONNECTION=sqlite|" .env

# Create SQLite database
touch database/database.sqlite

# Run migrations
php artisan migrate --force

# Install npm deps and build assets if not already built
if [ ! -d public/build ]; then
  npm ci --prefer-offline 2>/dev/null || npm install
  npm run build
fi

# Clear and cache config for performance
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start server
exec php artisan serve --host=0.0.0.0 --port=8080
