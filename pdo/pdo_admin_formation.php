<?php

function createFormation($titreFormation) {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('INSERT INTO formation (titre_formation) VALUES (:titreFormation)');
        $requete->bindValue(':titreFormation', $titreFormation, PDO::PARAM_STR);
        $requete->execute();

        $connection = null;
        return true;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}

function readAllFormation() {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('SELECT * FROM formation WHERE 1');
        $requete->execute();
        $resultat = $requete->fetchAll();

        $connection = null;
        return $resultat;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}

function readOneFormation($idFormation) {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('SELECT titre_formation FROM formation WHERE id_formation = :idFormation');
        $requete->bindValue(':idFormation', $idFormation, PDO::PARAM_STR);
        $requete->execute();

        $resultat = $requete->fetch();

        $connection = null;
        return $resultat;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}

function updateFormation($idFormation, $newName) {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('UPDATE formation SET titre_formation = :newName WHERE id_formation = :idFormation');
        $requete->bindValue(':idFormation', $idFormation, PDO::PARAM_STR);
        $requete->bindValue(':newName', $newName, PDO::PARAM_STR);
        $requete->execute();

        $connection = null;
        return true;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}

function deleteFormation($titreFormation) {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('DELETE FROM formation WHERE titre_formation = :titreFormation');
        $requete->bindValue(':titreFormation', $titreFormation, PDO::PARAM_STR);
        $requete->execute();

        $connection = null;
        return true;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}
