# Utiliser l'image officielle PHP avec Apache
FROM php:8.1-apache

# Copier tous les fichiers du projet dans le dossier web d'Apache
COPY . /var/www/html/

# Installer l'extension mysqli (si besoin)
RUN docker-php-ext-install mysqli

# Exposer le port 80
EXPOSE 80
