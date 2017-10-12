<!DOCTYPE html>
<html lang="fr">

    <?php include('../views/admin_head.php'); ?>
    
    <?php include('../views/check_connexion.php'); ?>

    <body class="hold-transition skin-blue sidebar-mini">

        <?php include('../views/admin_navbar.php'); ?>

        <?php include('../views/admin_begin_content.php'); ?>
        
            <!-- if(Session has('error'))
            <div class="row">
                <div class="alert alert-danger">
                    <center><strong>Erreur : </strong> Session::get('error')</center>
                </div>
            </div> 
            @endif-->
            <!-- if(Session::has('success'))
            <div class="row">
                <div class="alert alert-success">
                    <center><strong>Succès : </strong> Session::get('success')</center>
                </div>
            </div>
            @endif -->

            Faite votre choix dans le menu

        <?php include('../views/admin_end_content.php'); ?>

        <?php include('../views/admin_footer.php'); ?>

        <?php include('../views/admin_scripts.php'); ?>
    </div>
</body>

</html>
