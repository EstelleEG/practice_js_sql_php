# En considérant les tables SQL décrites dans le fichier tables.md
# Écrire les requêtes SQL pour :

# TODO Afficher toutes les lignes de la table user.
SELECT * FROM user;

# TODO Afficher toutes les lignes de la table user (classé par ordre alphabétique sur le nom).
SELECT * FROM user
ORDER BY nom ASC;

# TODO Afficher seulement le nom, le prénom de toutes les lignes de la table user.
SELECT nom, prenom FROM user;

# TODO Mettre à jour le prenom à la ligne où le nom est égale à "random"
UPDATE user
SET prenom="bruno"
WHERE nom="random";

# TODO Supprimer la ligne à l'id 3 de la table adresse
DELETE FROM adresse WHERE id=3;

# TODO Insérer une ligne dans la table adresse
INSERT INTO adresse (...)
VALUES (...);


# TODO Afficher toutes les lignes de la table user et de la table adresse (JOIN)
SELECT * 
FROM adresse
INNER JOIN user ON adresse.id=user.adresse_id;

REPONSE : Faire la jointure entre deux tables, afin d’afficher des infos  : 
jointure entre la table ‘user’ et la table ‘adresse’, 
grâce à la foreign key(FK)/ clé étrangère (adresse_id de la table ‘user’), qui permet de faire ce lien (avec l’id de la table ‘adresse’ (PK= Primary Key) et l’adresse_id’ (FK) de la table ‘user’.) 
La FK est une contrainte qui lie 2 tables.

