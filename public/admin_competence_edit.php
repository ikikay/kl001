<!DOCTYPE html>
<html lang="fr">

    <?php include('../views/admin_head.php'); ?>

    <?php include('../views/check_connexion.php'); ?>

    <body class="hold-transition skin-blue sidebar-mini">

        <?php include('../views/admin_navbar.php'); ?>

        <?php include('../views/admin_begin_content.php'); ?>

        <?php
        require '../pdo/pdo_admin_competence.php';
        if (isset($_GET["id_competence"])){$leCompetence = readOneCompetence($_GET["id_competence"]);}
        ?>
        
        <form action="#" method="post">
            <div class="form-group">
                <label>Titre Actuel : </label>
                <input class="form-control" value="<?php echo $leCompetence['titre_competence']; ?>" name="titreCompetence" readonly>
            </div>

            <div class="form-group">
                <label>Nouveau titre du Competence : </label>
                <input class="form-control" placeholder="Un Competence" name="newTitreCompetence">
            </div>

            <button type="submit" class="btn btn-success">Modifier ce competence</button>
            <button type="reset" class="btn btn-danger">Effacer le formulaire</button>
        </form>

        <?php
        if ( (isset($_POST["newTitreCompetence"])) && (isset($_POST["titreCompetence"])) ) {
            if (updateCompetence($_GET["id_competence"], $_POST["newTitreCompetence"])) {
                $_SESSION['success'] = 'Le Competence à bien été Modifié !';
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin_competence_index.php">'; //Redirection, car header est utilisé par le menu
            }
        }
        ?>

        <?php include('../views/admin_end_content.php'); ?>

        <?php include('../views/admin_footer.php'); ?>

        <?php include('../views/admin_scripts.php'); ?>
    </div>
</body>

</html>
