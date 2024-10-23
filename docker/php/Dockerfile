# базовый образ
FROM php:7.4-fpm-alpine

# устанавливаем необходимые зависимости
RUN docker-php-ext-install pdo pdo_mysql

# создаем рабочую директорию
WORKDIR /var/www/html
