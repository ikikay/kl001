<!DOCTYPE html>
<html lang="fr">

    <?php include('../views/admin_head.php'); ?>

    <body class="hold-transition skin-blue sidebar-mini">

        <?php include('../views/admin_navbar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                TITRE
            </section>

            <!-- Main content -->
            <section class="content">

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

                TODO

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include('../views/admin_footer.php'); ?>
        
        <?php include('../views/admin_scripts.php'); ?>
    </div>
</body>

</html>
