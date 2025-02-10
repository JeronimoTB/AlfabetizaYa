FROM php:8.2-apache

# Configura el DocumentRoot para apuntar a /var/www/html/app
RUN sed -i "s|/var/www/html|/var/www/html/app|g" /etc/apache2/sites-available/000-default.conf

# Instala la extensión mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copia los archivos de la aplicación al contenedor
COPY app/ /var/www/html/app
