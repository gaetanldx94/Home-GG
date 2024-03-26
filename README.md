# Home-GG

Home-GG est un site web proposant plusieurs fonctionnalités telles que le stockage serveur et un calculateur. Il est développé en PHP et conçu pour fonctionner sous Ubuntu/Debian.

## Prérequis

Avant de pouvoir utiliser Home-GG, assurez-vous d'avoir installé les packages suivants sur votre machine Ubuntu :

'
sudo apt-get install php-sqlite3
sudo apt-get install php-cli
'

## Installation

1. Clonez ce dépôt sur votre machine.
2. Accédez au répertoire racine du projet.

## Configuration de la base de données

1. À la racine du projet, exécutez la commande suivante pour accéder à la base de données :

sqlite3 home-gg.db

2. Ajoutez un nouvel utilisateur en utilisant la commande SQL suivante :

INSERT INTO user (identifiant, nom, prenom, mot_de_passe, statut) VALUES ('exemple_identifiant', 'nom', 'prénom', 'motdepasse', 'administrateur');

3. Quittez l'interface de SQLite :

.quit

## Installation des dépendances

1. Exécutez la commande suivante pour installer les dépendances du projet :

composer install

## Lancement du serveur

1. Une fois les dépendances installées, lancez le serveur en utilisant la commande :

php -S localhost:8000

2. Accédez à l'URL suivante dans votre navigateur :

http://localhost:8000/

Vous pouvez désormais utiliser Home-GG correctement. Profitez-en!
