FROM php:8.1-fpm

# Installer les extensions nécessaires
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    git

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer les extensions PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Copier les fichiers de l'application
WORKDIR /var/www/html
COPY . .

# Donner les permissions correctes
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Exposer le port
EXPOSE 80

# Lancer le serveur
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
