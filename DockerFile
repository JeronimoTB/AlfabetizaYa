FROM php:8.2-apache

# Instalar la extensión mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Establecer el directorio raíz de Apache
ENV APACHE_DOCUMENT_ROOT=/var/www/html/app

# Actualizar la configuración de Apache para reflejar el nuevo DOCUMENT_ROOT
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
