<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">P.A.</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Panel Admin</span>
    </a>

    <!-- Navigation-->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Menu déroulant</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button --> <!-- TODO : il doit manquer un JS, le dropdown fonctionne pas ici !! -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="../assets/img/admin/profil-default.png" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs"><?php echo $_SESSION['login'] ?></span> <!-- Auth::user()->nom!!}&nbsp {!!Auth::user()->prenom -->
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="../assets/img/admin/profil-default.png" class="img-circle" alt="User Image"> 
                            <p><?php echo $_SESSION['login'] ?></p>
                        </li>
                        <!-- Menu Body -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profil</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Se déconnecter</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../assets/img/admin/profil-default.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $_SESSION['login'] ?></p>
            </div>
        </div>

        <!--         search form (Optional) 
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Rechercher ...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                 /.search form 
        TODO-->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu principal</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="#"><i class="fa fa-list-alt"></i> <span>Les CV</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Ajouter</a></li> <!-- TODO route("article.create") -->
                    <li><a href="#">Administrer</a></li> <!-- TODO route("article.index") -->
                </ul>	

            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-list-alt"></i> <span>Expérience</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Ajouter</a></li> <!-- TODO route("article.create") -->
                    <li><a href="#">Administrer</a></li> <!-- TODO route("article.index") -->
                </ul>	

            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-list-alt"></i> <span>Formations</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Ajouter</a></li> <!-- TODO route("article.create") -->
                    <li><a href="#">Administrer</a></li> <!-- TODO route("article.index") -->
                </ul>	

            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-list-alt"></i> <span>Compétences</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Ajouter</a></li> <!-- TODO route("article.create") -->
                    <li><a href="#">Administrer</a></li> <!-- TODO route("article.index") -->
                </ul>	

            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-list-alt"></i> <span>Hobbies</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../public/admin_hobbie_create.php">Ajouter</a></li>
                    <li><a href="#">Administrer</a></li> <!-- TODO route("article.index") -->
                </ul>	

            </li>

        </ul>
        <!-- /.sidebar-menu -->

    </section>
    <!-- /.sidebar -->
</aside>