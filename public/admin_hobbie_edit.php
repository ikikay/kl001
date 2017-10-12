<!DOCTYPE html>
<html lang="fr">

    <?php include('../views/admin_head.php'); ?>

    <?php include('../views/check_connexion.php'); ?>

    <body class="hold-transition skin-blue sidebar-mini">

        <?php include('../views/admin_navbar.php'); ?>

        <?php include('../views/admin_begin_content.php'); ?>

        <?php
        require '../pdo/pdo_admin_hobbie.php';
        if (isset($_GET["id_hobbie"])){$leHobbie = readOneHobbie($_GET["id_hobbie"]);}
        ?>
        
        <form action="#" method="post">
            <div class="form-group">
                <label>Titre Actuel : </label>
                <input class="form-control" value="<?php echo $leHobbie['titre_hobbie']; ?>" name="titreHobbie" readonly>
            </div>

            <div class="form-group">
                <label>Nouveau titre du Hobbie : </label>
                <input class="form-control" placeholder="Un Hobbie" name="newTitreHobbie">
            </div>

            <button type="submit" class="btn btn-success">Modifier ce hobbie</button>
            <button type="reset" class="btn btn-danger">Effacer le formulaire</button>
        </form>

        <?php
        if ( (isset($_POST["newTitreHobbie"])) && (isset($_POST["titreHobbie"])) ) {
            if (updateHobbie($_GET["id_hobbie"], $_POST["newTitreHobbie"])) {
                $_SESSION['success'] = 'Le Hobbie à bien été Modifié !';
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin_hobbie_index.php">'; //Redirection, car header est utilisé par le menu
            }
        }
        ?>

        <?php include('../views/admin_end_content.php'); ?>

        <?php include('../views/admin_footer.php'); ?>

        <?php include('../views/admin_scripts.php'); ?>
    </div>
</body>

</html>
