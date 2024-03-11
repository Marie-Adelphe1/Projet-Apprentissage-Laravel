# Site de e-commerce avec laravel

Description brève du projet de e-commerce développé avec Laravel.

## Fonctionnalités

- Gestion des utilisateurs (inscription, connexion, profil utilisateur)
- Catalogue de produits avec recherche et filtres
- Ajout de produits au panier
- etc.

## Prérequis

- PHP >= 7.4
- Composer
- Node.js(>=18.0) & npm(>=5) 
- MySQL 

## Installation

1. Clonez ce dépôt :
   git clone https://github.com/votre-utilisateur/votre-projet.git

2. Installez les dépendances PHP avec Composer :
  composer install

3. Copiez le fichier .env.example pour créer un nouveau fichier .env

4. Générez une nouvelle clé dphp artisan key:generate'application Laravel :
   

5. Configurez votre base de données dans le fichier .env :
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=votre_base_de_donnees
  DB_USERNAME=votre_nom_utilisateur
  DB_PASSWORD=votre_mot_de_passe

6. Exécutez les migrations pour créer les tables de base de données :
php artisan migrate

7. Exécutez les commandes npm pour compiler les ressources front-end :
npm install
npm run build
npm run dev

9. Lancez le serveur de développement :
php artisan serve

10. Accédez à votre application dans votre navigateur à l'adresse `http://localhost:8000`.

# Ressources complémentaires : 
  Cours : https://grafikart.fr/formations/laravel
  TP : https://cours.brosseau.ovh/cheatsheets/laravel/quick.html
