# Stage 1: Build Assets
FROM node:14 AS asset-builder
WORKDIR /app
COPY . .
RUN npm install && npm run prod

# Stage 2: PHP Environment
FROM php:8.0-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nginx

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy existing application contents
COPY . /var/www
# Copy built assets from the previous stage
COPY --from=asset-builder /app/public /var/www/public

# Install PHP dependencies
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Copy nginx configuration
COPY docker/nginx.conf /etc/nginx/sites-available/default

# Expose port
EXPOSE 8080
ENV PORT 8080

# Start php-fpm in background and nginx in foreground
CMD php-fpm -D && nginx -g 'daemon off;'

