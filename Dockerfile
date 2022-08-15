FROM php:8.1.3-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

ADD . /var/www
ADD ./public /var/www/html

ADD config/docker/apache.conf /etc/apache2/httpd.conf
#COPY config/docker/php.ini /usr/local/etc/php/

RUN a2enmod rewrite

RUN composer require laravel/ui
RUN composer install

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

RUN php artisan key:generate
RUN php artisan config:cache
RUN php artisan migrate

# Change current user to www
USER www