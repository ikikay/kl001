<!DOCTYPE html>
<html lang="fr">

    <?php include('../views/admin_head.php'); ?>

    <?php include('../views/check_connexion.php'); ?>

    <body class="hold-transition skin-blue sidebar-mini">

        <?php include('../views/admin_navbar.php'); ?>

        <?php include('../views/admin_begin_content.php'); ?>

        <?php
        require '../pdo/pdo_admin_experience.php';
        if (isset($_GET["id_experience"])){$leExperience = readOneExperience($_GET["id_experience"]);}
        ?>
        
        <form action="#" method="post">
            <div class="form-group">
                <label>Titre Actuel : </label>
                <input class="form-control" value="<?php echo $leExperience['titre_experience']; ?>" name="titreExperience" readonly>
            </div>

            <div class="form-group">
                <label>Nouveau titre du Experience : </label>
                <input class="form-control" placeholder="Un Experience" name="newTitreExperience">
            </div>

            <button type="submit" class="btn btn-success">Modifier ce experience</button>
            <button type="reset" class="btn btn-danger">Effacer le formulaire</button>
        </form>

        <?php
        if ( (isset($_POST["newTitreExperience"])) && (isset($_POST["titreExperience"])) ) {
            if (updateExperience($_GET["id_experience"], $_POST["newTitreExperience"])) {
                $_SESSION['success'] = 'Le Experience à bien été Modifié !';
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin_experience_index.php">'; //Redirection, car header est utilisé par le menu
            }
        }
        ?>

        <?php include('../views/admin_end_content.php'); ?>

        <?php include('../views/admin_footer.php'); ?>

        <?php include('../views/admin_scripts.php'); ?>
    </div>
</body>

</html>
