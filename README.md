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

2. Accédez au répertoire racine du projet dans un terminal.

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

## Configuration de l'API Google Custom Search

Avant d'utiliser la fonction de recherche sur le Web par reconnaissance vocale, assurez-vous d'avoir configuré l'API Google Custom Search. Voici les étapes à suivre :

1. Accédez à [La console Google ](https://console.cloud.google.com/) et connectez-vous à votre compte Google.
2. Créez un nouveau projet en cliquant sur le bouton "Sélectionner un projet" en haut de l'écran, puis en cliquant sur "Nouveau projet". Suivez les instructions pour créer le projet et lui donner un nom significatif, par exemple "Home-GG Search".
3. Activez l'API Google Custom Search pour votre projet. Pour ce faire, accédez à la section "API et services", cliquez sur "Activer les API et les services", puis recherchez "Custom Search API" et activez-la.
4. Créez un moteur de recherche personnalisé sur [le moteur Google](https://programmablesearchengine.google.com/). Suivez les instructions pour configurer votre moteur de recherche et notez l'identifiant du moteur de recherche (cx) et votre clé API.
3. Intégrez les informations de votre API Google Custom Search (clé API et identifiant de moteur de recherche) dans les fichiers appropriés de votre application Home-GG (js/assist.js).

## Lancement du serveur

1. Une fois les dépendances installées, lancez le serveur en utilisant la commande :

```bash
php -S localhost:8000
```

2. Accédez à l'URL suivante dans votre navigateur :

[localhost:8000](http://localhost:8000/)

Vous pouvez désormais utiliser Home-GG correctement. Profitez-en!
