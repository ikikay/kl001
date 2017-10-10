<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php?action=login" method="post">
            <label for="login">Identifiant : </label>
            <input type="text" name="login">
            <label for="pwd">Mot de passe :</label>
            <input type="password" name="pwd">
            <button type="submit">Se connecter</button>
        </form>
    </body>
    
    <?php
    require 'pdo/pdo.php';
    session_start();
    if(isset($_GET["action"]))
    {
        $action = $_GET["action"];
        switch($action)
        {
        case "login":
            $res = login($_POST['login'], $_POST['pwd']);
            if($res==1)
            {
                $_SESSION['login'] = $_POST['login'];
                header('Location: public/home.php');
            } 
            else 
            {
                echo 'Login ou mot de passe incorrect';
            }
            break;
            
        default:
            echo 'ERREUR DEFAULT !';
            break;
        }
    }
    ?>
</html>
