FROM php:8.1-apache
RUN apt update
ENV DEBIAN_FRONTEND noninteractive
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli