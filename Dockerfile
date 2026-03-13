FROM composer:2 AS vendor
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-interaction --no-progress --optimize-autoloader

FROM node:22-alpine AS frontend
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci
COPY resources ./resources
COPY public ./public
COPY vite.config.js postcss.config.js tailwind.config.js ./
RUN npm run build

FROM php:8.3-cli-alpine
WORKDIR /app
RUN apk add --no-cache git unzip sqlite sqlite-dev libzip-dev oniguruma-dev icu-dev bash \
    && docker-php-ext-install pdo pdo_sqlite intl
COPY --from=vendor /app/vendor ./vendor
COPY --from=frontend /app/public/build ./public/build
COPY . .
COPY docker/start.sh /usr/local/bin/start-folios
RUN chmod +x /usr/local/bin/start-folios
EXPOSE 8000
CMD ["start-folios"]
