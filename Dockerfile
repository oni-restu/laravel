FROM agung3wi/php7.4-apache
WORKDIR /app
COPY . /app
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
RUN composer install
RUN chown www-data:www-data -R /app
