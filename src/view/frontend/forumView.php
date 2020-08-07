<?php $title = 'Forum'; ?>
<?php  ob_start (); ?>

        <div class="container mt-6">
          <div class="row">
            <div class="col-12 col-md-3 col-xl-2 mt-3">
              <a href="index.php?action=newTopicForm" class="for-create-topic" title="créer un topic">Créer un topic</a>
            </div>
            
            <div class="col-12 col-md-9 col-xl-10 mt-3">
              <form action="" method="post">
                <div class="for--search">
                  <input type="text" name="search" placeholder="Rechercher un topic...">
                  <button class="search-btn" title="cliquez pour la recherche">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        
        <h2 class="h3 font-weight-light text-center mt-3">Tous les forums</h2>
        <div class="container white my-4 py-4 shadow-lg shadow-border ">
          <div class="card mt-3 mb-3">

            <?php while ($c = $categories->fetch())  { 
              $subCategories->execute(array($c['id']));
              $souscat = '';
              while($sc = $subCategories->fetch()) {
                $souscat .= '<a class="nav-c" href="">'.$sc['name'].'</a> | ';
              }
              $souscat = substr($souscat, 0, -3);
            ?>
              
            <?php switch ($c['id']) {
                case 1:
                  echo '<h5 class="card-header orange darken-3 text-uppercase text-white pt-3 shadow-title-1">
                        <i class="fab fa-gripfire fa-lg"></i>réchauffement climatique</h5>';
                  break;
                case 2:
                  echo '<h5 class="card-header brown darken-2 text-uppercase text-white pt-3 shadow-title-2">
                        <i class="fas fa-radiation-alt"></i>activité humaine</h5>';
                  break;
                case 3:
                  echo '<h5 class="card-header green darken-3 text-uppercase text-white pt-3 shadow-title-2">
                        <i class="fas fa-ankh"></i>spiritualité / astrologie</h5>';
                  break;
                case 4:
                  echo '<h5 class="card-header cyan accent-3 text-uppercase text-white pt-3 shadow-title-2">
                        <i class="fas fa-globe"></i>autres sujets</h5>';
                  break;
                default:
                  echo '<h5 class="card-header white accent-3 text-uppercase text-white pt-3 shadow-title-2">
                        <i class="fas fa-question"></i>&nbsp;hors cat&eacutegorie</h5>';
              }
            ?>

              <div class="card-body pt-1 pb-1">
                <h5 class="text-dark mt-3">
            <?php switch ($c['id']) {
                    case 1:
                      echo 'Impact &eacute;cologique';
                      break;
                    case 2:
                      echo 'Sant&eacute; publique';
                      break;
                    case 3:
                      echo 'Bien &ecirc;tre';
                      break;
                    case 4:
                      echo 'Divers';
                      break;
                    default:
                      echo 'hors cat&eacute;gorie';
                    }
            ?>
                </h5>
                <div class="dropdown-divider"></div>
                <p class="text-dark mt-3">
                  <?= $souscat ?>
                </p>
              </div>

            <?php
            }
            $categories->closeCursor();
            ?>
          </div>
        </div>

<?php  $content = ob_get_clean (); ?>
<?php require('src/public/template/template_forum.php'); ?>
