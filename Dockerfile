FROM php:8.2-apache

# Instala la extensión mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Configura el DocumentRoot para apuntar a /var/www/html/app
RUN sed -i "s|/var/www/html|/var/www/html/app|g" /etc/apache2/sites-available/000-default.conf

# Habilita módulos necesarios de Apache
RUN a2enmod rewrite

# Copiar el código fuente al contenedor
COPY ./app /var/www/html

# Exponer el puerto 80
EXPOSE 80
