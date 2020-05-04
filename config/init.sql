CREATE DATABASE ecuriescamille;

DROP TABLE ecuriescamille.chevaux;
CREATE TABLE ecuriescamille.chevaux(
    id      INT PRIMARY KEY AUTO_INCREMENT,
    nom     VARCHAR NOT NULL,
    race    VARCHAR,
    sexe    INT,
    poids   FLOAT,
    taille  FLOAT,
    photo   VARCHAR,
);

DROP TABLE ecuriescamille.cavaliers;
CREATE TABLE ecuriescamille.cavaliers(
    id      INT PRIMARY KEY AUTO_INCREMENT,
    nom     VARCHAR,
    prenom  VARCHAR NOT NULL,
    sexe    INT,
    niveau  INT,
);

