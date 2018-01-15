FROM php:7.1-fpm

RUN apt-get update && docker-php-ext-install pdo_mysql

EXPOSE 9000

CMD ["php-fpm", "--nodaemonize"]