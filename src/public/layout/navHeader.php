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
                            <a class="nav-link" href="/index">Accueil <span class="sr-only">(current)</span></a>
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
                        <li class="nav-item">
                           <a class="nav-link" href="index.php?action=forum">Le forum</a>
                        </li>
                        
                    </ul>
                    <ul class="navbar-nav ml-auto">
                      <?php if(isset($_SESSION) && empty($_SESSION)): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-user"></i>&nbsp;Compte
                            </a>

                            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                                <a class="dropdown-item" href="index.php?action=signIn" title="connexion">Se connecter</a>
                                <a class="dropdown-item" href="index.php?action=signUp" title="adhésion gratuite">S'enregistrer</a>
                            </div>
                        </li>
                      <?php endif ?>

                      <?php if(isset($_SESSION) && !empty($_SESSION) && ($_SESSION['role'] == '1')): ?>

                                <li class="nav-item avatar dropdown">
                                   <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">          
                                    <img src="src/public/avatars/<?= $_SESSION['avatar']?>" id="avatarResize"  class="rounded-circle z-depth-0" alt="avatar image">
                                  </a>
                                   <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-55">
                                <a class="dropdown-item"><?= $_SESSION['pseudo'] ?></a>
                                <a class="dropdown-item" href="index.php?action=admin" title="Section administration"><i class="fas fa-unlock-alt"></i>&nbsp;&nbsp;Admin</a>
                                <a class="dropdown-item" href="index.php?action=updateProfile" title="Màj du profil"><i class="fas fa-user-edit"></i>&nbsp;Modifier mon profil</a>
                                <a class="dropdown-item" href="index.php?action=logout" title="Déconnection"><i class="fas fa-sign-out-alt"></i>&nbsp;D&eacute;connexion</a>
                                   </div>
                                </li>
                      <?php endif ?>

                    <?php if(isset($_SESSION) && !empty($_SESSION) && ($_SESSION['role'] == '0')): ?>
                         <li class="nav-item avatar dropdown">
                          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="src/public/avatars/<?= $_SESSION['avatar']?>" id="avatarResize"  class="rounded-circle z-depth-0" alt="avatar image">
                          </a>
                          <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-55">    
                                <a class="dropdown-item"><?= $_SESSION['pseudo'] ?></a>
                                <a class="dropdown-item" href="index.php?action=updateProfile"><i class="fas fa-user-edit"></i>&nbsp;Modifier mon profil</a>
                                <a class="dropdown-item" href="index.php?action=logout" title="Déconnection"><i class="fas fa-sign-out-alt"></i>&nbsp;D&eacute;connexion</a>
                          </div>
                          </li>  
                    <?php endif ?> 
                      
                    </ul>
                </div>
            </div>
        </nav>