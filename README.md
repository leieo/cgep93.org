# Projet client - Cercle généalogique de l'Est Parisien

[Site actuel](http://www.cgep93.org/)

+ [Infos utiles](#infos)
+ [Historique](#historique)
+ [Trello](https://trello.com/)
+ [Slide](http://slides.com/thomasfroger/projet-client#/)

## <a name="infos"></a> Infos utiles

### Bonnes Pratiques + Definition of Done

+ On ne push pas directement son travail dans develop ou Master !
+ Chacun créé sa propre branche pour une feature (convention de nommage: nomDeLaFeature/nomDeLaPersonne)
+ Pour la création d'une branche : 
    + git checkout -b nomBranche
    + git push --set-upstream origin nomBranche
    
+ Merge de sa branche dans une autre :
    + Se placer sur la branche que l'on veut merge et la remettre à niveau : git pull
    + Se placer sur la branche où on veut appliquer le merge et la remettre à niveau : git pull
    + Sur cette dernière branche : git merge --no-ff nomBranche (où nomBranche = la branche que l'on veut merge)
    + git push
    
+ Suppression de sa branche en local et en distant :
    + git branch -d nomBranche (ou -D à la place du -d si problème merge) -> suppression branche locale
    + git push origin --delete nomBranch -> suppression branche distante
    + Pour chacun des autres utilisateurs du groupe : git fetch --all --prune (permet de remettre à niveau toutes les branches)

### Pour que le CSS s'affiche correctement :

Ouvrir le terminal dans le dossier du projet, puis :

`$ sudo npm install`

`$ npm run dev`

`$ npm run watch`

### Info utilisation GOOGLE API

Il faut rajouter les evenements sur le calendrier du site depuis votre compte gmail  (avec cgep93web@gmail.com)
Pour les information sur les visiteur du site veuillez vous rendre  sur https://analytics.google.com puis sur CGEP93 pour avoir le suivis des visites

Faut pas oublier de changer le .ENV local pour l'envois des mail !

---

## <a name="historique"></a> Historique (à mettre à jour régulièrement)

#### Jeudi 8 Mars

##### Envoi d'un mail au client avec quelques questions 
Mail envoyé à tous.

##### Création d'équipes de travail 
Visibles dans le trello ...
+ use case diagram & user stories
+ class diagram & bdd gitlab
+ gitlab / github
+ team logo
+ benchmark sites

##### Validation d'un premier Use Case Diagram
*penser à pusher les docs sur gitlab dans un dossier "documentation"*


##### Gitlab
+ Création d'un compte pour le client (avec cgep93web@gmail.com)
+ Création d'un groupe Projet Client cgep93
+ Chacun a créé un compte et été ajouté au groupe
*penser à ajouter les absents*

---

#### Mercredi 7 Mars

##### Mise en place du Trello 
Penser à utiliser ...
+ colonne "questions à poser au client"
+ colonne "rôles" à changer pour chaque sprint (PO & Scrum Master)
+ colonne ressources

##### Démarrage d'une slide de présentation

##### Définition des lots fonctionnels & rédaction des user stories

---
