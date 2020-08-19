<?php $title = 'Fil d\'actualité - Blog'; ?>
<?php  ob_start (); ?>

      <div class="container-fluid view overlay zoom mt-75">
       <img class="img-fluid" src="src/public/uploads/<?=($newsFeed['news_image'])?>" alt="<?= htmlspecialchars($newsFeed['news_title']) ?>">
      </div>

      <div class="container white my-4 py-4 shadow-lg shadow-border">
        <section class="magazine-section dark-grey-text">
          <div class="row justify-content-around">
            <div class="col-lg-8 col-md-12 mb-4">
              <div class="single-news">
                <div class="news-data d-flex justify-content-between">
                  <h6 class="font-weight-bold"></i>
            <?php 
                    switch ($newsFeed['id_category']) {
                      case 1:
                        echo '<p class="cat-1"><i class="fas fa-thermometer-full"></i>&nbsp;R&eacute;chauffement climatique</p>';
                        break;
                      case 2:
                        echo '<p class="cat-2"><i class="fas fa-heartbeat"></i>&nbsp;Sant&eacute;</p>';
                        break;
                      case 3:
                        echo '<p class="cat-3"><i class="fas fa-fire"></i>&nbsp;activit&eacute; humaine</p>';
                        break;
                      case 4:
                        echo '<p class="cat-4"><i class="fas fa-yin-yang"></i>&nbsp;Spiritualit&eacute;/Astrologie</p>';
                        break;
                      case 5:
                        echo '<p class="cat-5"><i class="fas fa-pen"></i>&nbsp;brouillon</p>';
                      break;
                      default:
                        echo '<p class="cat-default"><i class="fas fa-question"></i>&nbsp;Hors cat&eacutegorie</p>';  
                    }
            ?>
                </h6>
                  <p class="font-weight-bold dark-grey-text"><?= $newsFeed['news_date_fr'] ?></p>
                </div>
              
                <h3 class="font-weight-bold dark-grey-text mb-3" id="fontFa"><a><?= nl2br(htmlspecialchars($newsFeed['news_title']))?></a></h3>
                <p class="dark-grey-text"><?= nl2br(htmlspecialchars($newsFeed['news_content']))?></p>
                <p class="font-weight-bold text-right"><?= nl2br(htmlspecialchars($newsFeed['pseudo']))?></p>
              </div>           
            </div>
            
            <div class="col-lg-4 col-md-12 mb-4 psp">
              <h2 class="card-header red text-white h3 font-weight-light">Les derniers fils d'actualités</h2>            
        <?php
              while ($data = $news->fetch()) { ?>
              <div class="single-news mb-3 p">
                <div class="row">
                  <div class="col-md-12">
                    <div class="view overlay z-depth-3 rounded mb-4">
                      <img class="img-fluid" src="src/public/uploads/<?=($data['news_image'])?>" alt="<?= htmlspecialchars($data['news_title']) ?>">
                      <a href="index.php?action=latestNews&amp;id=<?= $data['id_news'] ?>">
                      <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <p class="font-weight-normal text-center dark-grey-text"><i class="far fa-clock"></i>&nbsp;<?=($data['creation_date_fr'])?></p>
                    <div class="d-flex justify-content-between">
                      <div class="col-11 text-truncate pl-0 mb-3">
                        <a class="dark-grey-text fontFa"><?=($data['news_title'])?></a>
                      </div>
                    </div>
                  
                  <div class="col-md-12">
                    <div class="d-flex justify-content-end flex-column">
                      <span class="badge badge-light"><?php switch ($data['id_category']) {
                        case 1:
                          echo '<p class="cat-1"><i class="fas fa-thermometer-full"></i>&nbsp;R&eacute;chauffement climatique</p>';
                        break;
                        case 2:
                          echo '<p class="cat-2"><i class="fas fa-heartbeat"></i>&nbsp;Sant&eacute;</p>';
                        break;
                        case 3:
                          echo '<p class="cat-3"><i class="fas fa-fire"></i>&nbsp;activit&eacute; humaine</p>';
                        break;
                        case 4:
                          echo '<p class="cat-4"><i class="fas fa-yin-yang"></i>&nbsp;Spiritualit&eacute;/Astrologie</p>';
                        break;
                        case 5:
                          echo '<p class="cat-5"><i class="fas fa-pen"></i>&nbsp;brouillon</p>';
                        break;
                        default:
                        echo '<p class="cat-default"><i class="fas fa-question"></i>&nbsp;Hors cat&eacutegorie</p>';
                      }
        ?>
                      </span>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
        <?php
              }
            $news->closeCursor();
        ?> 
        
          </div>
        </section>
      </div>

      <div class="container mt-5">
        <section class="team-section dark-text">
          <?php $nbComment = $nbComments->fetch();?>
          <div class="col-md-8">
            <div class="text-center">
              <span class="badge badge-info"><span class="badge badge-success"><?= htmlspecialchars($nbComment['numberOfComments']) ?></span>&nbsp; Commentaire<?php if ($nbComment['numberOfComments'] > 1) echo 's';?></span>
            </div>
          </div>
          
          <div class="row">
            <p class="mt-3 z-depth-5 noCmmt">
              <?php if ($nbComment['numberOfComments'] == 0) echo "Aucun commantaire de publié... Soyez le ou la \" First One \" <span>&#128513;</span>";?>
            </p>
          </div>
            
        <?php
          if (isset($_GET['reporting']) && $_GET['reporting'] == 'success') {
            echo '<p id="success">Le commentaire a bien été signalé.</p>';
          }

        while ($comment = $comments->fetch())
          if (isset($_SESSION['pseudo']) || empty($_SESSION))
          {
        ?>

          <div class="container">
            <div class="col-md-8">
              <hr />
              <p class="comment-user">
                <img class="rounded-circle z-depth-2" id="avatarResize" src="src/public/avatars/<?= htmlspecialchars($comment['avatar'])?>" alt="<?= htmlspecialchars($comment['avatar']) ?>">
                <strong class="text-shad"><?= htmlspecialchars($comment['pseudo']) ?></strong>
                  <strong>a</strong> comment&eacute;(e) le : <?= $comment['comment_date_fr'] ?><br />
              </p>
              <p class="comment-comment">
                <?= nl2br(htmlspecialchars($comment['comment'])) ?>
              </p>&nbsp;&nbsp;
              <a href="index.php?action=reporting&id=<?= $comment['id_comment'] ?>" class="flag"><span class="badge badge-secondary">Signaler un abus</span></a>           
              <hr />
            </div>
          </div>
        <?php 
          }
        ?>
       
        <?php if(!empty($_SESSION))
          { 
           $id = $_GET['id'];
        ?>
          
          <div class="form-group mt-4 green-border-focus">
            <div class="col-md-8">
              <form action="index.php?action=addComment&amp;id=<?php echo $id ?>" method="post">
              <div class="form-group">
                <label class="direction" for="avatar">
                  <img src="src/public/avatars/<?= $_SESSION['avatar']?>" id="avatarResize"  class="rounded-circle z-depth-0" alt="avatar image">
                  <strong><?= $_SESSION['pseudo'] ?></strong></label>
                  <textarea class="form-control" name="comment" placeholder="Votre commentaire..."></textarea>
              </div>
            </div>
                <button type="submit" class="btn blue-gradient pstion" name="form_comment" title="ajout de commentaire(s)"><i class="far fa-comment-dots"></i>&nbsp;&nbsp;Publier</button>
              </form>
            
            <?php
            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>
  
  <?php if(isset($_SESSION) && empty($_SESSION))
    {
  ?>
        
      <div class="container my-5 py-5 px-md-5 z-depth-1 rzc">
        <div class="row comment-chapter">
          <hr />
        </div>
        <h4 class="text-center ">Commentez ce chapitre</h4>
        <div class="text-center text-info">
          <p class="text-center text-dark ">Vous devez être connecté pour pouvoir poster un message.</p>
          <p class=" center-align">
            <button class="btn purple-gradient"><a href="index.php?action=signIn" role="button">Se connecter</a></button>
            <button class="btn aqua-gradient"><a href="index.php?action=signUp" role="button">S'enregister</a></button>
          </p>
        </div>
      </div>
      
      <?php
        }
      ?>
      
    </div>
  </section>
</div>
        
<?php  $content = ob_get_clean (); ?>
<?php require('src/public/template/template_news.php'); ?>