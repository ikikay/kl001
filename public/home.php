<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Notre parcours</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="css/login.css" rel="stylesheet">

    </head>

    <body>
        <?php include('./includes/ado_connect.php'); ?>

        <div class="container">

            <form class="form-signin" action="#" method="POST">
                <h2 class="form-signin-heading">Connectez-vous SVP</h2>
                <label for="inputPseudo" class="sr-only">Pseudonyme</label>
                <input type="pseudo" id="inputPseudo" class="form-control" name="user_name" placeholder="Pseudonyme" required autofocus>
                <label for="inputPassword" class="sr-only">Mot de passe</label>
                <input type="password" id="inputPassword" class="form-control" name="mdp" placeholder="Mot de passe" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
            </form>

        </div> <!-- /container -->

        <?php
        if (isset($_POST['user_name'])) {
            $req = $bdd->prepare('SELECT COUNT(*) as nb FROM users WHERE username = :utilisateur and password = :motdepasse');
            $req->bindValue(':utilisateur', $_POST['user_name'], PDO::PARAM_STR);
            $req->bindValue(':motdepasse', md5($_POST['mdp']), PDO::PARAM_STR);
            $req->execute();
            $user = $req->fetch();

            if ($user == 1) {
                session_start();
                $_SESSION['Login'] = true;
                $_SESSION['Username'] = $_POST['user_name'];
                header('Location: index.php');
            } else {
                echo '<br /><br />ERREUR. Identifiants incorrects. Veuillez rééssayer !';
            }
        }
        ?>

    </body>
</html>
