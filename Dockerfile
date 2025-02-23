# Utiliser l'image officielle PHP avec Apache
FROM php:8.1-apache

# Copier les fichiers dans le répertoire d'Apache
COPY . /var/www/html/

# Installer l'extension mysqli si nécessaire
RUN docker-php-ext-install mysqli

# Exposer le port 80 (le port par défaut pour le HTTP)
EXPOSE 80
