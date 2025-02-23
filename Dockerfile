# Utiliser l'image officielle PHP avec Apache
FROM php:8.1-apache

# Copier tous les fichiers et dossiers dans Apache
COPY . /var/www/html/

# Changer les permissions pour que Apache puisse lire les fichiers
RUN chmod -R 755 /var/www/html/ && chown -R www-data:www-data /var/www/html/

# Installer l'extension mysqli si nécessaire
RUN docker-php-ext-install mysqli

# Exposer le port 80
EXPOSE 80
