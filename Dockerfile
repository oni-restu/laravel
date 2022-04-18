FROM agung3wi/php7.4-apache

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
    libicu-dev \
    zip \
    unzip \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /app
COPY . /app
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
RUN composer install
RUN chown www-data:www-data -R /app
