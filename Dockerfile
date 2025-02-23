# Utiliser une image de base PHP
FROM php:8.0-cli

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier le contenu de ton application
COPY . .

# Exposer le port 3000
EXPOSE 3000

# Commande de démarrage
CMD ["php", "-S", "0.0.0.0:3000", "index.php"]
