<?php

function login($login, $pwd) {
    try {
        $key1 = '$1337@';
        $key2 = '/42*-^';
        $hash = $key1 . $pwd . $key2;

        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('SELECT COUNT(*) as nb FROM user WHERE login = :utilisateur and pwd = :motdepasse');
        $requete->bindValue(':utilisateur', $login, PDO::PARAM_STR);
        $requete->bindValue(':motdepasse', md5($hash), PDO::PARAM_STR);
        $requete->execute();
        $resultat = $requete->fetch();
        $nb = $resultat['nb'];
        $connection = null;
        return $nb;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête login : ' . $e->getMessage();
    }
}

function cookie($login) {
    try {
        if (getId($login) != NULL) {
            $id_user = getId($login);
            $cookie = md5(rand(0, 32767) . rand(0, 32767));
            $date = date("Y-m-d H:i:s", strtotime('+1 day'));

            $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $requete = $connection->prepare('INSERT INTO session (session.id_user, cookie, dte_fin) VALUES (:id_user, :cookie, :timestamp)');
            $requete->bindValue(':id_user', $id_user, PDO::PARAM_INT);
            $requete->bindValue(':cookie', $cookie, PDO::PARAM_STR);
            $requete->bindValue(':timestamp', $date, PDO::PARAM_STR);
            echo "</br>" . $id_user . "</br>" .$cookie . "</br>" . $date . "</br>";
            var_dump($requete);
            $requete->execute();
            $connection = null;
        }
    } catch (PDOException $e) {
        echo 'Echec lors de la requête d\intégration de cookie : ' . $e->getMessage();
    }
}

function getId($username) {
    try {
        $connection = new PDO("mysql:host=localhost;dbname=kl001;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('SELECT id_user	FROM user WHERE login = :utilisateur');
        $requete->bindValue(':utilisateur', $username, PDO::PARAM_STR);
        $requete->execute();
        $resultat = $requete->fetch();
        $id = $resultat['id_user'];
        $connection = null;
        return $id;
    } catch (PDOException $e) {
        echo 'Echec lors de la requête de récupération de l\'ID : ' . $e->getMessage();
    }
}