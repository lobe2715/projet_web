CREATE TABLE IF NOT EXISTS PROFILS (
        nom VARCHAR(255) NOT NULL,
        prenom VARCHAR(255) NOT NULL,
        adresse VARCHAR(255) NOT NULL,
        mdp VARCHAR(255) NOT NULL,
        tel  VARCHAR(255) NOT NULL,
        classe ENUM('1','2','3','4','5','6'),
        rang ENUM('0','1','2'),
        CONSTRAINT PRIMARY KEY (adresse)
);	

CREATE TABLE IF NOT EXISTS COURT(
        id INT NOT NULL AUTO_INCREMENT,
        nom VARCHAR(255) NOT NULL,
        classe ENUM('1','2','3','4','5','6'),
        CONSTRAINT PRIMARY KEY (id)

);

CREATE TABLE IF NOT EXISTS ELEMENT(
        id INT NOT NULL AUTO_INCREMENT,
        id_court INT NOT NULL,
        type ENUM('titre','texte','image','audio'),
        contenu VARCHAR(255) NOT NULL,
        CONSTRAINT PRIMARY KEY(id)
);

