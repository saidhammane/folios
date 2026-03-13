#!/bin/sh
set -e
cd /app

if [ ! -f .env ]; then
  cp .env.example .env
fi

mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views storage/logs bootstrap/cache

set_env() {
  key="$1"
  value="$2"
  if grep -q "^${key}=" .env; then
    sed -i "s#^${key}=.*#${key}=${value}#" .env
  else
    echo "${key}=${value}" >> .env
  fi
}

set_env APP_ENV production
set_env APP_DEBUG false
set_env APP_URL http://localhost:8000
set_env DB_CONNECTION mysql
set_env DB_HOST "${DB_HOST:-mysql}"
set_env DB_PORT "${DB_PORT:-3306}"
set_env DB_DATABASE "${DB_DATABASE:-folio}"
set_env DB_USERNAME "${DB_USERNAME:-root}"
set_env DB_PASSWORD "${DB_PASSWORD:-root}"

php artisan key:generate --force

until php artisan migrate --force; do
  echo 'Waiting for MySQL...'
  sleep 5
done

php artisan optimize:clear || true

exec php artisan serve --host=0.0.0.0 --port=8000
