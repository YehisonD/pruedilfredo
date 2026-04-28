# Usamos una versión estable de PHP con Apache
FROM php:8.2-apache

# INSTALACIÓN DEL DRIVER (Esto es lo que falta)
# Actualizamos el sistema e instalamos la extensión pdo_mysql
RUN docker-php-ext-install pdo pdo_mysql

# Copiamos todos tus archivos (.php, .html, etc) al servidor
COPY . /var/www/html/

# Damos permisos para que el servidor pueda leer los archivos
RUN chown -R www-data:www-data /var/www/html

# Exponemos el puerto 80 (estándar web)
EXPOSE 80