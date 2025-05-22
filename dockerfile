# Dockerfile pour héberger un site PHP sur Render
FROM php:8.1-apache

# Copier les fichiers dans le conteneur
COPY . /var/www/html/

# Activer mod_rewrite si besoin
RUN a2enmod rewrite

EXPOSE 80
