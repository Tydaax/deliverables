# CMS Wordpress
```
WIP : [projet] OPEN NC
```
## Choix du Template
```
Au niveau du Template mon choix c'est porter sur Medzone qui possède un large panel d'option qui mon permis de réalisée mes travaux sur l'Open NC et de me rapprocher le plus possible du cahier des charges donné. Grâce à se Template, j'ai pu intégrer la plus part des informations demander sur l'actualité ( Présent sur la Homepage )
```
## Choix des plugins
```
Au niveau des plugins, le template propose des recommandations qui sont :
  - contact-form-7
  - kiwi-social-share
  - modula-best-grid-gallery
  - simple-author-box
```
## Présentation du site Open NC réalisée sous le CMS Wordpress:
```
L'objectif de se site internet serait de permettre d'avoir :

  - Un suivi de l'actualité du cluster

  - Un outils de présentation dynamique, de ses adhérents, de ses activités et de son actualités
  
  - Un support de comunnication moderne, véhiculant le savoir-faire calédonien dans le numérique
 
  - Un reflet de la nouvelle charte graphique

Il sera le portail vers les outils en cours de création et les duturs services qui seront mis en ligne.
```
## Arborescence du site Open NC
```
L'arborescence des contenus est proposé et illustré si dessous.
```
### Page d'accueil
Dans la page d'accueil vous retrouverez plusieurs éléments comme:
```
Un visuel avec des éléments clés du cluster qui renvoie vers les rubliques du site mais aussi une description des origine du cluster
```
![homepage](./screenshots/1-homepage.jpg)
```
Une barre de navigation qui sera composé d'un menu déroulant avec :

  - Homepage
    - Nous contacter
    - Nous rejoindre

  - Qui sommes nous ?
    - Présentation

  - Outils Extérieurs
    - Inscription Newsletter
    - Espace adhérents
    - Offres d'emplois
  
  - "Icon de recherche"
```
![screenshots](./screenshots/1.1-homepage-menu.jpg)
```
Une présentation du cluster, de leur vision des choses mais aussi leur objectif et leurs missions.
Vous aurez aussi la possibilité de lire en détails leur histoire grâce au button présent "More" 
```
![screenshots](./screenshots/2-presentation.jpg)
![screenshots](./screenshots/3-presentation-details.jpg)
```
Un agenda des prochains événements numériques du territoire ou des événements d'Open NC
L'agenda affichera les événements les plus proches par rapport à la date de consultation du site mais il pourra également permettre à l'utilisateur de pouvoir consulter des événements qui se dérouleront plus tard dans l'année
```
![screenshots](./screenshots/4-info-date-evenement.jpg)
```
Un espace ou vous pourrez trouver nos membres du bureau et leur contact (accès réseaux sociaux)
```
![screenshots](./screenshots/5-membres.jpg)
```
Et aussi là possibilité de voir en détail leur information ( photo, entreprise, autres)
```
![screenshots](./screenshots/6-membres-details.jpg)
```
Un slider qui pourra être composé des entreprises adhérentes accompagné d'une image et d'une description mais pourra aussi également représenté l'actualité d'événement sous la forme d'un arcticle ou dernier poste
```
![screenshots](./screenshots/7-slider.jpg)
```
Un formulaire de contacte qui permettra au personne le souhaiton d'échanger avec les membres d'Open NC sous tout type de demande ( information, adhésion, autres)
```
![screenshots](./screenshots/8-contact-us.jpg)
```
Un footer qui indiquera les informations sur Open NC ( contacts, localisation du bureaux; autres)
Et présence du menu de départ.
```
![screenshots](./screenshots/9-footer.jpg)
```
"Exemple possible d'une page"
```
![screenshots](./screenshots/10-last-post.jpg)

## Détail supplémentaire :
```
Chaque page propose un "back-to-top" qui est un button permettant ( au clique ) de remonter directement en haut de la page.
```

# Instruction

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
