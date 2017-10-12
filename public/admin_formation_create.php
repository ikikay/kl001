<!DOCTYPE html>
<html lang="fr">

    <?php include('../views/admin_head.php'); ?>

    <?php include('../views/check_connexion.php'); ?>

    <body class="hold-transition skin-blue sidebar-mini">

        <?php include('../views/admin_navbar.php'); ?>

        <?php include('../views/admin_begin_content.php'); ?>

        <form action="#" method="post">
            <div class="form-group">
                <label>Titre du Formation : </label>
                <input class="form-control" placeholder="Un Formation" name="titreFormation">
            </div>

            <button type="submit" class="btn btn-success">Créer ce formation</button>
            <button type="reset" class="btn btn-danger">Effacer le formulaire</button>
        </form>

        <?php
        require '../pdo/pdo_admin_formation.php';

        if (isset($_POST["titreFormation"])) {
            if(createFormation($_POST["titreFormation"])) {
                $_SESSION['success'] = 'Le Formation à bien été Ajouté !';
            } 
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin_formation_index.php">'; //Redirection, car header est utilisé par le menu
        }
        ?>

        <?php include('../views/admin_end_content.php'); ?>

        <?php include('../views/admin_footer.php'); ?>

        <?php include('../views/admin_scripts.php'); ?>
    </div>
</body>

</html>
