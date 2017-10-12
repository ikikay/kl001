<?php

function createHobbie($titreHobbie) {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('INSERT INTO hobbie (titre_hobbie) VALUES (:titreHobbie)');
        $requete->bindValue(':titreHobbie', $titreHobbie, PDO::PARAM_STR);
        $requete->execute();

        $connection = null;
        return true;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}

function readAllHobbie() {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('SELECT * FROM hobbie WHERE 1');
        $requete->execute();
        $resultat = $requete->fetchAll();

        $connection = null;
        return $resultat;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}

function readOneHobbie($idHobbie) {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('SELECT titre_hobbie FROM hobbie WHERE id_hobbie = :idHobbie');
        $requete->bindValue(':idHobbie', $idHobbie, PDO::PARAM_STR);
        $requete->execute();

        $resultat = $requete->fetch();

        $connection = null;
        return $resultat;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}

function updateHobbie($idHobbie, $newName) {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('UPDATE hobbie SET titre_hobbie = :newName WHERE id_hobbie = :idHobbie');
        $requete->bindValue(':idHobbie', $idHobbie, PDO::PARAM_STR);
        $requete->bindValue(':newName', $newName, PDO::PARAM_STR);
        $requete->execute();

        $connection = null;
        return true;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}

function deleteHobbie($idHobbie) {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('DELETE FROM hobbie WHERE id_hobbie = :idHobbie');
        $requete->bindValue(':idHobbie', $idHobbie, PDO::PARAM_STR);
        $requete->execute();

        $connection = null;
        return true;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de création : ' . $e->getMessage();
    }
}
