#!/bin/sh
set -e
cd /app

if [ ! -f .env ]; then
  cp .env.example .env
fi

mkdir -p database storage/framework/cache storage/framework/sessions storage/framework/views storage/logs
[ -f database/database.sqlite ] || touch database/database.sqlite

sed -i 's/^APP_ENV=.*/APP_ENV=production/' .env || true
sed -i 's/^APP_DEBUG=.*/APP_DEBUG=false/' .env || true
sed -i 's/^DB_CONNECTION=.*/DB_CONNECTION=sqlite/' .env || true
if grep -q '^DB_DATABASE=' .env; then
  sed -i 's#^DB_DATABASE=.*#DB_DATABASE=/app/database/database.sqlite#' .env
else
  echo 'DB_DATABASE=/app/database/database.sqlite' >> .env
fi

php artisan key:generate --force
php artisan migrate --force || true
php artisan optimize:clear || true

exec php artisan serve --host=0.0.0.0 --port=8000
