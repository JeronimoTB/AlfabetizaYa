FROM php:8.2-apache

# Instala la extensión mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Asegúrate de que Apache apunte al DocumentRoot correcto
ENV APACHE_DOCUMENT_ROOT /var/www/html

# Cambia el DocumentRoot en la configuración de Apache
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf /etc/apache2/apache2.conf
