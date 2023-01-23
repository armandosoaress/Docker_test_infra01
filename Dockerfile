FROM php:8-apache

WORKDIR /var/www/html/

COPY . .

EXPOSE 80

CMD chown -R www-data:www-data /var/www