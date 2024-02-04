# Визначаємо образ базового контейнера
FROM php:7.4-fpm

# Встановлюємо залежності
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    unzip \
    curl \
    git \
    libzip-dev

# Очищаємо кеш
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Встановлюємо розширення PHP
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# Встановлюємо Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Встановлюємо робочий каталог для Laravel
WORKDIR /var/www

# Копіюємо вміст директорії проекту Laravel в контейнер
COPY . /var/www

# Надаємо права на вміст папки
RUN chown -R www-data:www-data /var/www

# Вказуємо порт, на якому буде працювати сервер
EXPOSE 9000

# Запускаємо PHP-FPM
CMD ["php-fpm"]
