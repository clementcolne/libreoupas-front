# libreoupas

## Description
libreoupas est un site Internet permettant aux étudiant de la Faculté des Sciences et Technologies de Vandoeuvre-Lès-Nancy d'avoir accès aux disponibilités 
des salles informatiques du bâtiment Henri Poincaré.

## Fonctionnalités
- Affichage des salles par disponibilité (libre uniquement/libre+occupées)
- Affichage des salles par OS (Linus/Windows/Linux+Windows)
- Code couleur (vert = libre, rouge = occupé, orange = bientôt libre)
- Compteur de visiteurs (journalier + total)

## Organisation du projet
Ce dépôt contient le code front de libreoupas. Il ne permet que l'affichage de données et l'application de filtres.
Le code du backend est accessible dans le dépôt [clementcolne/libreoupas-engine](https://github.com/clementcolne/libreoupas-engine)

## Déploiement
Ce projet utilise le déploiement automatique [Github Workflow](https://docs.github.com/en/actions/learn-github-actions/workflow-syntax-for-github-actions).
Le déploiement est effectué automatiquement lors de pushs sur les branches du projet directeur sur le serveur via le protocole FTP, à l'adresse [https://clementcolne.com/libreoupas/](https://clementcolne.com/libreoupas/).

## Captures
![](https://github.com/clementcolne/libreoupas-front/blob/master/libreoupas.png)
