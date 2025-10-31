# Utilise l'image officielle PHP avec Apache
FROM php:8.2-apache

# Copier ton projet dans le dossier web d'Apache
COPY . /var/www/html/

# Installer les extensions PHP pour MySQL si ton projet en a besoin
RUN docker-php-ext-install mysqli pdo pdo_mysql
