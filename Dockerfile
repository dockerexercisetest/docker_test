FROM php:7.4-apache

RUN docker-php-ext-install mysqli

ADD index.php /var/www/html

CMD ["apache2-foreground"]