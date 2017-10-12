<!-- Main Header -->
<header class="main-header">
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
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="" class="user-image" alt="User Image"> <!-- TODO url('img/profil-default.png') -->
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">TODO</span> <!-- Auth::user()->nom!!}&nbsp {!!Auth::user()->prenom -->
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="" class="img-circle" alt="User Image"> <!-- TODO url('img/profil-default.png') -->

                            <p>
                                TODO <!-- Auth::user()->nom et Auth::user()->prenom --> 
                            </p>
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
                <img src="" class="img-circle" alt="User Image"> <!-- TODO url('img/profil-default.png') -->
            </div>
            <div class="pull-left info">
                <p>TODO</p> <!-- Auth::user()->nom et Auth::user()->prenom -->
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
                    <li><a href="#">Ajouter</a></li> <!-- TODO route("article.create") -->
                    <li><a href="#">Administrer</a></li> <!-- TODO route("article.index") -->
                </ul>	

            </li>

        </ul>
        <!-- /.sidebar-menu -->

    </section>
    <!-- /.sidebar -->
</aside>