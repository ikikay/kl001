<!DOCTYPE html>
<html lang="fr">

    <?php include('../views/head.php'); ?>

    <?php include('../views/navbar.php'); ?>
    
    <?php include('../views/check_connexion.php'); ?>

    <?php include('../pdo/pdo.php'); ?>

    <!-- presentation -->
    <section id="presentation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">LAMBERT Ludovic</h2>
                    <h3 class="section-subheading text-muted">Petite introduction de ma personne</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-user-circle fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"> </h4>
                    <p class="text-muted">LAMBERT Ludovic, j'ai 25 ans, je suis fan d'informatique depuis mon adolescence, c'est pourquoi, je souhaite maintenant, en faire mon métier.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"> </h4>
                    <p class="text-muted">Mon parcours scolaire fût difficile, j'ai mis du temps à pouvoir intégrer une fillière informatique, et je me suis battus, pour pouvoir réaliser mon rêve, ce qui est chose faite, je suis maintenant, en licence informatique.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-gamepad fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"> </h4>
                    <p class="text-muted">Je suis passioné des nouvelles technologies, mais aussi, de tout ce qui touche l'univers geek, jeux vidéos, jeux de rôles, comics, cinéma et lecture de romans fantastique !</p>
                </div>
            </div>
        </div>
    </section>

    <!-- entreprise -->
    <section class="bg-light" id="entreprise">

    </section>

    <!-- cv -->
    <section id="cv">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Mon parcours</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <!--        ?php 
                                   $req = $bdd->prepare('SELECT * FROM cv WHERE id_users = :utilisateur');
                                   $req->execute(array('utilisateur' => $_POST['utilisateur']));
                               ?
                        <!-- For each production -->
                        <li> <!-- if id paire : <li> else <li class="timeline-inverted"> -->
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>A suivre </br>...</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php include('../views/footer.php'); ?>

    <?php include('../views/scripts.php'); ?>

</body>

</html>
