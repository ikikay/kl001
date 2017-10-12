<!DOCTYPE html>
<html lang="fr">

    <?php include('../views/admin_head.php'); ?>

    <?php include('../views/check_connexion.php'); ?>

    <body class="hold-transition skin-blue sidebar-mini">

        <?php include('../views/admin_navbar.php'); ?>

        <?php include('../views/admin_begin_content.php'); ?>

        <?php
        if (isset($_SESSION['success']) && ($_SESSION['success'] != NULL)) {
            $_SESSION = NULL;
            echo '<div class = "row"><div class = "alert alert-success"><center><strong>Succès : </strong>' . $_SESSION['success'] . '</center></div></div>';
        }
        ?>

        <?php
        require '../pdo/pdo_admin_experience.php';
        $lesExperiences = readAllExperience();
        ?>

        <!-- Main content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <form action="admin_experience_create.php" method="get">
                            <button type="submit" class="btn btn-success btn-lg btn-block">Ajouter</button>
                        </form>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <!--                             search form (Optional) 
                                                        <form action="#" method="get">
                                                            <div class="input-group margin">
                                                                <input type="text" name="q" class="form-control" placeholder="Rechercher . . .">
                                                                <span class="input-group-btn">
                                                                    <button type="submit" name="search" id="search-btn" class="btn btn-info btn-flat"><i class="fa fa-search"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </form>
                            TODO je dois surement avoir un JS qui faisais ça, il faut rechercher ... -->

                            <table class="table table-bordered">
                                <thead class="thead-inverse">
                                    <tr> 
                                        <th class="col-md-2">Nom du Experience</th>
                                        <th class="col-md-10" >action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($lesExperiences as $unExperience) {

                                        echo <<<END
                                    <tr>  
                                        <td id="td{$unExperience["id_experience"]}">
                                        {$unExperience["titre_experience"]}
                                        </td>

                                        <td> <!-- TODO : ICI la class fait de la merde, à voir plus tard ! ... -->
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <form action="admin_experience_edit.php" method="get">
                                                        <input type="hidden" value="{$unExperience["id_experience"]}" name="id_experience">
                                                        <button type="submit" class="btn btn-primary btn-circle"><i class="fa fa-pencil"></i></button>
                                                    </form>
                                                </div>
                                                <br><br>
                                                <div class="col-md-1">
                                                    <form action="admin_experience_edit.php" method="get">
                                                        <input type="hidden" value="{$unExperience["id_experience"]}" name="destroy"/> <!-- TODO : faire la fonction delete -->
                                                        <button type="submit" class="btn btn-danger btn-circle jsDeleteButton"><i class="fa fa-times"></i></button>
                                                    </form>
                                                </div>

                                            </div>
                                        </td>
                                    </tr>
END;
                                    }
                                    ?>
                                </tbody> 
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('../views/admin_end_content.php'); ?>

        <?php include('../views/admin_footer.php'); ?>

        <?php include('../views/admin_scripts.php'); ?>
    </div>
</body>

</html>
