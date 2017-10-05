# WORKSHOP : Projet du Groupe 4

Membres du groupe : BAUDUIN Lucas, BARTHOLOME Pierre-Henry, DUBUS Alexis, GHERISSI Vianney et RIVET Arnaud.

La connexion à la base de données s'effectue en modifiant le fichier /Classes/Pdom.php

Connexion possible lors du login à l'aide des identifiants : lucas.bauduin

# Attention :

Le module Apache2 Rewrite est nécessaire au bon fonctionnement de l'application.
Dans le fichier index.php la ligne “ DEFINE('BASESITE', '*****'); ” permet de définir le chemin vers
l'application depuis le repertoire racine d'Apache2.

# Installation :

Il est nécessaire d'avoir un serveur WAMP/LAMP/XAMP et de créer une base de donnée "projet-gfi" en utilisant le fichier database.sql. Sur phpMyadmin, il est nécessaire d'avoir un utilisateur "root" avec le mot de passe "root". 

# Exemple de code PHP :

Création d'un besoin
$aRequirement = new Requirement(NULL, "Test", "Description", NULL, NULL, 4, 2, "1234567", "1234567", 1234.9, "Win", 1, 1, 1, 1);

Sauvegarde d'un besoin
$aRequirement->save();

Mise à jour d'un besoin
$aRequirement->update(6, "Nouveau titre", "Nouvelle description", NULL, NULL, 6, 5, "6 Rue de la Gare, 59000 Lille, FRANCE", "12345, 12345", 3000.0, "Open", 1, 1, 1, 4);


Création d'une clé
$aKey = new Key(6, NULL, "Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.");

Sauvegarde d'une clé
$aKey->save();

Mise à jour d'une clé
$aKey->update(3, 6, "test 2");
