<?php

function createCompetence($titreCompetence) {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('INSERT INTO competence (titre_competence) VALUES (:titreCompetence)');
        $requete->bindValue(':titreCompetence', $titreCompetence, PDO::PARAM_STR);
        $requete->execute();

        $connection = null;
        return true;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}

function readAllCompetence() {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('SELECT * FROM competence WHERE 1');
        $requete->execute();
        $resultat = $requete->fetchAll();

        $connection = null;
        return $resultat;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}

function readOneCompetence($idCompetence) {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('SELECT titre_competence FROM competence WHERE id_competence = :idCompetence');
        $requete->bindValue(':idCompetence', $idCompetence, PDO::PARAM_STR);
        $requete->execute();

        $resultat = $requete->fetch();

        $connection = null;
        return $resultat;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}

function updateCompetence($idCompetence, $newName) {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('UPDATE competence SET titre_competence = :newName WHERE id_competence = :idCompetence');
        $requete->bindValue(':idCompetence', $idCompetence, PDO::PARAM_STR);
        $requete->bindValue(':newName', $newName, PDO::PARAM_STR);
        $requete->execute();

        $connection = null;
        return true;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}

function deleteCompetence($titreCompetence) {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('DELETE FROM competence WHERE titre_competence = :titreCompetence');
        $requete->bindValue(':titreCompetence', $titreCompetence, PDO::PARAM_STR);
        $requete->execute();

        $connection = null;
        return true;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}
