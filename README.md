# Projet de Gestion de Vols et Destinations

Ce projet est une application de gestion de vols et de destinations construite avec Laravel. Il permet aux utilisateurs de gérer les informations sur les vols, les compagnies aériennes et les destinations.

## Fonctionnalités

- Ajouter, modifier et supprimer des vols.
- Gérer les détails des compagnies aériennes.
- Gérer les informations sur les destinations, y compris les images, les descriptions et les prix.
- Visualiser une liste de vols avec des détails tels que la compagnie aérienne, la destination, la date de départ et le prix.
- Interface d'administration conviviale pour la gestion des données.

## Installation

1. Cloner le dépôt GitHub : `git clone <URL_DU_DÉPÔT>`
2. Installer les dépendances : `composer install`
3. Copier le fichier .env.example et le renommer en .env : `cp .env.example .env`
4. Générer une clé d'application Laravel : `php artisan key:generate`
5. Configurer les informations de base de données dans le fichier .env
6. Exécuter les migrations pour créer les tables de base de données : `php artisan migrate`
7. Exécuter le serveur de développement Laravel : `php artisan serve`
8. Accéder à l'application dans votre navigateur à l'adresse `http://localhost:8000`

## Captures d'écran

![Capture d'écran de la page d'accueil](/screenshots/home.png)
*Page d'accueil de l'application affichant une liste de vols.*

![Capture d'écran du formulaire de création de vol](/screenshots/create_flight.png)
*Formulaire de création d'un nouveau vol avec des champs pour la compagnie aérienne, la destination, la date de départ et le prix.*

## Technologies Utilisées

- Laravel
- PHP
- HTML/CSS
- JavaScript
- MySQL

## Auteur

Ce projet a été développé par [sidik slims](https://github.com/k111ra).

## Seeders
    - php artisan db:seed --class=PermissionSeeder 
    - php artisan db:seed --class=UserTableSeeder 
    - php artisan db:seed --class=RoleTableSeeder
    - php artisan db:seed --class=AirportTableSeeder
    - php artisan db:seed --class=TypeReservationTableSeeder