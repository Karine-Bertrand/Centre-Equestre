## création d'un TP qui regroupe les notions vues pour SQL/PHP

1. création du repository via Git
    - sous Github.com, créer le nouveau repository puis copier-coller l'adresse https
    - sous VSCode, ouvrir un terminal et se placer dans le dossier htdocs
    - ecrire "git clone " puis coller l'adresse https copiée
    - si tout est Ok, ecrire "git push -U origin master"
    Pour la création du premier commit :
        1. "git add -A"
        2. "git commit -m [nom_du_commit]"
        3. "git push", suivi de la saisie de username et password

2. Création du projet :
L’objectif est d’avoir :

    1. Une page formulaire
    Avec données obligatoires ou facultatives
    Utilisation de plusieurs types de contrôles : champ de saisie, checkbox, select.
    Avec validations (nombre de caractères pour une chaîne, champ de type nombre)
    Avec upload d’une image dont les caractéristiques seront contrôlées côté Back-end (extension, type de fichier, poids)

    2. Une page de lecture des données précédemment envoyées via le formulaire

    3. En complément s’il reste du temps :
        Mise à jour des données
        Suppression

3. Description du projet prévu :
Gestion d'un centre équestre.
Base de données "ecuriesCamille"
Tables :
    1 - cheval : id, nom, race, sexe, poids , taille, date_naissance, date_entre, photo
    2 - cavalier : id, nom, prenom, niveau, date_naissance, date_inscription, cheval_prefere, photo
    3 - staff : id, nom, prenom, fonction, page_perso, date_naissance, date_embauche, type_contrat, photo
    4 - users : id, email, pwd, role

Formulaire de connexion : 
    saise de l'email, mot de passe et role
    contrôle validité sur email et mot de passe
    autorisation d'accès selon role saisi (valeur obligatoire, par défaut pré-rempli par "visiteur") : non géré pour l'instant au niveau du TP, mais ce point sera mis en fonctionnement pour le projet final


== A PARTIR DE CE POINT ON NE TRAITE QUE LE ROLE ADMINISTRATEUR POUR CE TP POUR REPONDRE AUX DEMANDES
Page d'accueil :

Accès possible à 3 listes :
    - les chevaux
    - les jockeys
    - le personnel

Pour chaque liste : 
    - ajouter une nouvelle entrée dans la table
    - modifier une entrée affichée (avec les mêmes contrôles que pour une craétion)
    - supprimer une entrée affichée (avec demande de confirmation)

Pour la table 'cheval' :
    - valeur obligatoire : nom
    - valeurs avec controle si renseignées : poids et taille avec des mini et des maxi chacun
    - valeurs de race choisies par <select>
    - valeur de sexe choisie par <radio_bouton>

Pour la table 'cavalier' :
    - valeur obligatoire : nom (3 caractères mini)
    - valeur facultative : niveau  => texte de l'affichage variable selon le contenu

Pour la table 'staff' : 
    - valeurs obligatoires : nom et fonction.
    Le nom doit avoir au moins 3 caractères.
    La fonction est choisie par <select>
    - particularité du champ 'page_perso' (non géré pour le TP mais prévu pour le projet final): on stocke le nom de la page "page.php" qui a été définie par le staff quand un lien de présentation est prévu


