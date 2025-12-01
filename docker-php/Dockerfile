FROM php:8.2-fpm

# ติดตั้ง dependencies เดิม
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
    zip \
    curl \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    libxml2-dev \
    libonig-dev \
    libicu-dev \
    libxslt1-dev \
    rsync \
    libpq-dev \
    openssh-client \
    && docker-php-ext-install pdo pdo_pgsql

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Copy uploads.ini สำหรับเพิ่ม limit upload
COPY docker-php/uploads.ini /usr/local/etc/php/conf.d/uploads.ini

# ติดตั้ง composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

CMD ["php-fpm", "-F"]
