<?php

function createExperience($titreExperience) {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('INSERT INTO experience (titre_experience) VALUES (:titreExperience)');
        $requete->bindValue(':titreExperience', $titreExperience, PDO::PARAM_STR);
        $requete->execute();

        $connection = null;
        return true;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}

function readAllExperience() {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('SELECT * FROM experience WHERE 1');
        $requete->execute();
        $resultat = $requete->fetchAll();

        $connection = null;
        return $resultat;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}

function readOneExperience($idExperience) {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('SELECT titre_experience FROM experience WHERE id_experience = :idExperience');
        $requete->bindValue(':idExperience', $idExperience, PDO::PARAM_STR);
        $requete->execute();

        $resultat = $requete->fetch();

        $connection = null;
        return $resultat;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}

function updateExperience($idExperience, $newName) {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('UPDATE experience SET titre_experience = :newName WHERE id_experience = :idExperience');
        $requete->bindValue(':idExperience', $idExperience, PDO::PARAM_STR);
        $requete->bindValue(':newName', $newName, PDO::PARAM_STR);
        $requete->execute();

        $connection = null;
        return true;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}

function deleteExperience($titreExperience) {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('DELETE FROM experience WHERE titre_experience = :titreExperience');
        $requete->bindValue(':titreExperience', $titreExperience, PDO::PARAM_STR);
        $requete->execute();

        $connection = null;
        return true;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}
