<?php

function login($login, $pwd) {
    try 
    {
        $key1 = '$1337@';
        $key2 = '/42*-^';
        $mdp = $key1 . $pwd . $key2;
        $connection = new PDO("mysql:host=localhost;dbname=20171005_ran;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('SELECT COUNT(*) as nb FROM user WHERE login = :utilisateur and pwd = :motdepasse');
        $requete->bindValue(':utilisateur', $login, PDO::PARAM_STR);
        $requete->bindValue(':motdepasse', md5($mdp), PDO::PARAM_STR);
        $requete->execute();
        $resultat = $requete->fetch();
        $nb = $resultat['nb'];
        $connection = null;
        return $nb;
    } 
    catch (PDOException $e) {
        echo 'Echec lors de la requête login : ' . $e->getMessage();
    }
}
