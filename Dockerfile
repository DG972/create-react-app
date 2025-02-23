# Utiliser une image PHP officielle
FROM php:8.0-cli

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier tous les fichiers de ton projet dans le conteneur Docker
COPY . .

# Exposer le port 80 (le port par défaut pour le HTTP)
EXPOSE 80

# Commande pour démarrer le serveur PHP
CMD ["php", "-S", "0.0.0.0:80", "index.php"]
