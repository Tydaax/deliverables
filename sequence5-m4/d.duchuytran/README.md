## CMS Wordpress

## Build the container in detached mode
```
docker-compose up -d
```

## Removes the containers and default network
```
docker-compose down
```

## Instructions
1. Créer un blog à l'aide du CMS Wordpress. Installer, sécuriser, internationaliser et structurer votre site.

2. Réaliser un thème sur mesure à partir des instructions suivantes.
  * Créer un nouveau dossier reflétant la structure suivante.
```
- my-project
 - docker-compose.yml
 - wp-content
  - themes
   - my-theme
    - index.php
    - style.css
```
  * Copier le fichier docker-compose.yml et ajouter le code suivant à l'application "wordpress".
```
volumes:
  - ./wp-content:/var/www/html/wp-content
```


**Note:** Le code doit être correctement indenté à l'aide de plugins. Le code doit être uniquement écrit en anglais.
