FROM php:8.2-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
WORKDIR /var/www/html
COPY app/. ./
RUN chmod -R 755 ./
