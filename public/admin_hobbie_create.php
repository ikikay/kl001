<!DOCTYPE html>
<html lang="fr">

    <?php include('../views/admin_head.php'); ?>

    <?php include('../views/check_connexion.php'); ?>

    <body class="hold-transition skin-blue sidebar-mini">

        <?php include('../views/admin_navbar.php'); ?>

        <?php include('../views/admin_begin_content.php'); ?>

        <form action="#" method="post">
            <div class="form-group">
                <label>Titre du Hobbie : </label>
                <input class="form-control" placeholder="Un Hobbie" name="titreHobbie">
            </div>

            <button type="submit" class="btn btn-success">Créer ce hobbie</button>
            <button type="reset" class="btn btn-danger">Effacer le formulaire</button>
        </form>

        <?php
        require '../pdo/pdo_admin_hobbie.php';

        if (isset($_POST["titreHobbie"])) {
            if(createHobbie($_POST["titreHobbie"])) {
                $_SESSION['success'] = 'Le Hobbie à bien été Ajouté !';
            } 
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin_hobbie_index.php">'; //Redirection, car header est utilisé par le menu
        }
        ?>

        <?php include('../views/admin_end_content.php'); ?>

        <?php include('../views/admin_footer.php'); ?>

        <?php include('../views/admin_scripts.php'); ?>
    </div>
</body>

</html>
