FROM php:8.2-apache

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    libpq-dev \
    postgresql-client \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libcurl4-openssl-dev \
    libzip-dev \
    libxml2-dev \
    libonig-dev \
    libxslt-dev \
    libicu-dev \
    libwebp-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install -j$(nproc) \
        pdo \
        pdo_mysql \
        pdo_pgsql \
        mysqli \
        gd \
        zip \
        curl \
        mbstring \
        xml \
        soap \
        intl \
        exif \
        bcmath \
        xsl \
    && docker-php-ext-enable mysqli pdo_mysql \
    && a2enmod rewrite \
    && a2enmod headers \
    && a2enmod expires \
    && rm -rf /var/lib/apt/lists/*

# Configurar Apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Verificar extensiones instaladas
RUN php -m | grep -E "(pdo|pgsql|mysqli|gd|curl|mbstring|xml|soap|intl)"

EXPOSE 80