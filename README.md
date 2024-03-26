# Home-GG

Home-GG est un site web proposant plusieurs fonctionnalités telles que le stockage serveur et un calculateur. Il est développé en PHP et conçu pour fonctionner sous Ubuntu/Debian.

## Prérequis

Avant de pouvoir utiliser Home-GG, assurez-vous d'avoir installé les packages suivants sur votre machine Ubuntu :

```bash
sudo apt-get install sqlite3 php-cli php-sqlite3
```

## Installation

1. Clonez ce dépôt sur votre machine.

```bash
git clone https://github.com/gaetanldx94/Home-GG.git
```

3. Accédez au répertoire racine du projet dans un terminal.

## Configuration de la base de données

1. À la racine du projet, exécutez la commande suivante pour accéder à la base de données :

```bash
sqlite3 home-gg.db
```

2. Ajoutez un nouvel utilisateur en utilisant la commande SQL suivante :

```bash
INSERT INTO user (identifiant, nom, prenom, mot_de_passe, statut) VALUES ('exemple_identifiant', 'nom', 'prénom', 'motdepasse', 'administrateur');
```

3. Quittez l'interface de SQLite :

```bash
.quit
```

## Installation des dépendances

1. Exécutez la commande suivante pour installer les dépendances du projet :

```bash
composer install
```

## Lancement du serveur

1. Une fois les dépendances installées, lancez le serveur en utilisant la commande :

```bash
php -S localhost:8000
```

2. Accédez à l'URL suivante dans votre navigateur :

[localhost:8000](http://localhost:8000/)

Vous pouvez désormais utiliser Home-GG correctement. Profitez-en!
