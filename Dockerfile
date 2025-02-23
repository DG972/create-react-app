# Utiliser une image PHP officielle
FROM php:8.0-cli

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier tous les fichiers de ton projet dans le conteneur Docker
COPY . .

# Exposer le port 3000
EXPOSE 3000

# Commande pour démarrer le serveur PHP
CMD ["php", "-S", "0.0.0.0:3000", "index.php"]
