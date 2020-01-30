<header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                  <img class="logo-content" src="./src/public/images/logo.png" alt="logo BlueGem" />BlueGem
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actualité
                            </a>
                            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-3">
                                <a class="dropdown-item" href="#">Revue de presse</a>
                                <a class="dropdown-item" href="#">A la une</a>
                                <a class="dropdown-item" href="#">News</a>
                                <a class="dropdown-item" href="#">Toute l'actu</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-33" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Forum
                            </a>
                            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-33">
                                <a class="dropdown-item" href="#">Climat</a>
                                <a class="dropdown-item" href="#">Flore</a>
                                <a class="dropdown-item" href="#">Activité humaine</a>
                                <a class="dropdown-item" href="#">Spiritualité/Astrologie</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Tous les forums</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-user"></i> Compte
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                                <a class="dropdown-item" href="index.php?action=signIn">Se connecter</a>
                                <a class="dropdown-item" href="index.php?action=signUp">S'enregistrer</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
 
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
          <video class="video-intro" autoplay loop muted>
            <source src="src/public/uploads/World - 5114.mp4" type="video/mp4" />
          </video>

          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="view">
          <video class="video-intro" autoplay loop muted>
              <source src="src/public/uploads/Sunset - 10467.mp4" type="video/mp4" />
          </video>

          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
          </div>

        </div>
      </div>

      <div class="carousel-item">
        <div class="view">
          <video class="video-intro" autoplay loop muted>
              <source src="src/public/uploads/Swan - 1646.mp4" type="video/mp4" />
          </video>

          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
          </div>

          </div>
        </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>