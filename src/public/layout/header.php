<header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="/index">
                  <img class="logo-content" src="./src/public/images/logo.png" alt="logo BlueGem" /><span class="colored-logo">BlueGem</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/index">Accueil<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="index.php?action=listNews">Le blog</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actualité
                            </a>
                            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-3">
                                <a class="dropdown-item" href="index.php?action=signIn">Réchauffement climatique</a>
                                <a class="dropdown-item" href="index.php?action=signIn">Santé</a>
                                <a class="dropdown-item" href="index.php?action=signIn">Activité humaine</a>
                                <a class="dropdown-item" href="index.php?action=signIn">Spiritualité/Astrologie</a>
                                <a class="dropdown-item" href="index.php?action=listNews">Toute l'actu</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-33" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Forum
                            </a>
                            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-33">
                                <a class="dropdown-item" href="index.php?action=signIn">Réchauffement climatique</a>
                                <a class="dropdown-item" href="index.php?action=signIn">Santé</a>
                                <a class="dropdown-item" href="index.php?action=signIn">Activité humaine</a>
                                <a class="dropdown-item" href="index.php?action=signIn">Spiritualité/Astrologie</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php?action=forum">Tous les forums</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                    <?php if(isset($_SESSION) && empty($_SESSION)): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-user"></i> Compte
                            </a>

                            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                                <a class="dropdown-item" href="index.php?action=signIn"><i class="fas fa-sign-in-alt"></i>&nbsp;Se connecter</a>
                                <a class="dropdown-item" href="index.php?action=signUp"><i class="fas fa-user-plus"></i>&nbsp;S'enregistrer</a>
                            
                            </div>
                        </li>
                      
                    <?php endif ?>

                <?php if(isset($_SESSION) && !empty($_SESSION) && ($_SESSION['role'] == '1')) : ?>

                                <li class="nav-item avatar dropdown">
                                   <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <img src="src/public/avatars/default.png" class="rounded-circle z-depth-0" alt="avatar image">
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-55">
                                <a class="dropdown-item"><?= $_SESSION['pseudo'] ?></a>
                                <a class="dropdown-item" href="index.php?action=admin" title="Section administration"><i class="fas fa-unlock-alt">&nbsp;</i>Admin</a>
                                <a class="dropdown-item" href="index.php?action=updateProfile"><i class="fas fa-user-edit"></i>&nbsp;mon profil</a>
                                <a class="dropdown-item" href="index.php?action=logout" title="Déconnection"><i class="fas fa-sign-out-alt"></i>&nbsp;D&eacute;connexion</a>
                                   </div>
                                </li>
                            
                <?php endif ?>

                <?php if(isset($_SESSION) && !empty($_SESSION) && ($_SESSION['role'] == '0')) : ?>
                          <li class="nav-item avatar dropdown">
                          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                           <img src="src/public/avatars/default.png" class="rounded-circle z-depth-0" alt="avatar image">
                          </a>
                          <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-55">    
                                <a class="dropdown-item"><?= $_SESSION['pseudo'] ?></a>
                                <a class="dropdown-item" href="index.php?action=admin" title="Section administration"><i class="fas fa-lock"></i>&nbsp;&nbsp;Admin</a>
                                <a class="dropdown-item" href="index.php?action=profile"><i class="fas fa-user-edit"></i>&nbsp;mon profil</a>
                                <a class="dropdown-item" href="index.php?action=logout">D&eacute;connexion</a>
                          </div>
                          </li>  

                <?php endif ?>

                    </ul>
                </div>
            </div>
        </nav>
 
  <!--Carousel Wrapper-->
<div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
    <li data-target="#video-carousel-example2" data-slide-to="1"></li>
    <li data-target="#video-carousel-example2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!-- First slide -->
    <div class="carousel-item active">
      <!--Mask color-->
      <div class="view">
        <!--Video source-->
        <video class="video-fluid" autoplay loop muted>
        <source src="src/public/uploads/World - 5114.mp4" type="video/mp4" />
        </video>
        <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
            <div class="container px-md-3 px-sm-0">
              <div class="row wow fadeIn">
              <div class="col-md-12 mb-4 white-text text-center wow fadeIn">
                <h1 class="display-3 font-weight-bold white-text mb-0 pt-md-5 pt-5"><span class="welcome">Bienvenue s<span class="intro-color">ur</span></span>&nbsp;<span class="welcome-mark">BlueGem</span></h1>
                <hr class="hr-light my-4 w-75">
                <h5 class="subtext-header mt-2 mr-6 mb-4">
                Site d'informations et forums autour de l'évolution de la biodiversité sur notre&nbsp;<strong class="mvt"> Belle Bleue</strong>
                </h5>
              </div>
            </div>
        </div>
      </div>
      </div>
    </div>
    <!-- /.First slide -->

    <!-- Second slide -->
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <!--Video source-->
        <video class="video-fluid" autoplay loop muted>
          <source src="src/public/uploads/Sunset - 10467.mp4" type="video/mp4" /> 
        </video>
        <div class="full-bg-img flex-center mask rgba-black-light white-text">
            <ul class="animated fadeInUp col-md-12 list-unstyled list-inline">
                  <li>
                  <h1 class="font-weight-bold text-uppercase">- Eden -</h1>
                  </li>
                  <li>
                  <p class="font-weight-bold py-4"><i class="fas fa-quote-left">&nbsp;</i>&nbsp;L'Homme et la nature ne font qu'un.<br /> Protéger la nature c'est préserver l'avenir de l'Homme.&nbsp;</p>      
                  </li>
            </ul>
        </div>   
      </div>
    </div>
    <!-- /.Second slide -->

    <!-- Third slide -->
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <!--Video source-->
        <video class="video-fluid" autoplay loop muted>
          <source src="src/public/uploads/Swan - 1646.mp4" type="video/mp4" />
        </video>
        <div class="full-bg-img flex-center mask rgba-black-light white-text">
            <ul class="animated fadeInRight col-md-12 list-unstyled list-inline">
                  <li>
                  <h1 class="font-weight-bold text-uppercase">- Blaise Pascal -</h1>
                  </li>
                  <li>
                  <p class="font-weight-bold text-uppercase py-4"><i class="fas fa-quote-left">&nbsp;</i>&nbsp;L'homme n'est qu'un roseau, le plus faible de la nature;<br /> mais c'est un roseau pensant.&nbsp;</p>      
                  </li>
            </ul>
        </div>
      </div>   
    </div>
    <!-- /.Third slide -->
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
</div>
<!--Carousel Wrapper-->
</header>