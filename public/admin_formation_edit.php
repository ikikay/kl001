<!DOCTYPE html>
<html lang="fr">

    <?php include('../views/admin_head.php'); ?>

    <?php include('../views/check_connexion.php'); ?>

    <body class="hold-transition skin-blue sidebar-mini">

        <?php include('../views/admin_navbar.php'); ?>

        <?php include('../views/admin_begin_content.php'); ?>

        <?php
        require '../pdo/pdo_admin_formation.php';
        if (isset($_GET["id_formation"])){$leFormation = readOneFormation($_GET["id_formation"]);}
        ?>
        
        <form action="#" method="post">
            <div class="form-group">
                <label>Titre Actuel : </label>
                <input class="form-control" value="<?php echo $leFormation['titre_formation']; ?>" name="titreFormation" readonly>
            </div>

            <div class="form-group">
                <label>Nouveau titre du Formation : </label>
                <input class="form-control" placeholder="Un Formation" name="newTitreFormation">
            </div>

            <button type="submit" class="btn btn-success">Modifier ce formation</button>
            <button type="reset" class="btn btn-danger">Effacer le formulaire</button>
        </form>

        <?php
        if ( (isset($_POST["newTitreFormation"])) && (isset($_POST["titreFormation"])) ) {
            if (updateFormation($_GET["id_formation"], $_POST["newTitreFormation"])) {
                $_SESSION['success'] = 'Le Formation à bien été Modifié !';
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin_formation_index.php">'; //Redirection, car header est utilisé par le menu
            }
        }
        ?>

        <?php include('../views/admin_end_content.php'); ?>

        <?php include('../views/admin_footer.php'); ?>

        <?php include('../views/admin_scripts.php'); ?>
    </div>
</body>

</html>
