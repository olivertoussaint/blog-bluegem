<?php $title = 'Fil d\'actualité - Blog'; ?>
<?php  ob_start (); ?>

    <div class="container-fluid view overlay zoom mt-75">
      <img class="img-fluid" src="src/public/uploads/<?=($newsFeed['news_image'])?>" alt="<?= htmlspecialchars($newsFeed['news_title']) ?>">
    </div>
    <div class="container my-5">
      <!--Section: Content-->
      <section class="magazine-section dark-grey-text">
        <!-- Grid row -->
        <div class="row justify-content-around">
          <!-- Grid column -->
          <div class="col-lg-8 col-md-12 mb-4">
            <!-- Featured news -->
            <div class="single-news">
              <!-- Data -->
              <div class="news-data d-flex justify-content-between">
                <h6 class="font-weight-bold"></i>
                <?php 
                switch ($newsFeed['id_category']) {
                  case 1:
                    echo "R&eacute;chauffement climatique";
                  break;
                  case 2:
                    echo "Sant&eacute;";
                  break;
                  case 3:
                    echo "activit&eacute; humaine";
                  break;
                  case 4:
                    echo "Spiritualit&eacute;/Astrologie";
                  break;
                }
                ?>
                </h6>
                <p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i><?= $newsFeed['news_date_fr'] ?></p>
              </div>
              <!-- Excerpt -->
              <h3 class="font-weight-bold dark-grey-text mb-3"><a><?= nl2br(htmlspecialchars($newsFeed['news_title']))?></a></h3>
              <p class="dark-grey-text"><?= nl2br(htmlspecialchars($newsFeed['news_content']))?></p>
              <p class="font-weight-bold text-right"><?= nl2br(htmlspecialchars($newsFeed['author']))?></p>
            </div>
            <!-- Featured news -->
          </div>
                <!-- Grid column -->
          <div class="col-lg- col-md-12 mb-4">
            <p>Partie à faire</p>
          </div>

        </div>
      </section>
    </div>

    <div class="container mt-5">
      <!--Section: Content-->
      <section class="team-section text-center dark-grey-text">
        <?php $nbComment = $nbComments->fetch();?>
        <?= htmlspecialchars($nbComment['numberOfComments']) ?> Commentaire<?php if ($nbComment['numberOfComments'] >1) echo 's';?>
        <!-- Grid row -->
        <div class="row">
          <p class="text-center tc">
            <?php if ($nbComment['numberOfComments'] == 0) echo "Aucun commantaire de publié... Soyez le ou la \" First One \" <span>&#128513;</span>";?>
          </p>
        </div>
        <!-- Grid row -->

        <?php
        while ($comment = $comments->fetch())
        if (isset($_SESSION['pseudo']) || empty($_SESSION))
        {
          ?>

    <div class="container">
      <p class="comment-user">
        <strong><?= htmlspecialchars($comment['pseudo']) ?></strong>
      </p>
      <p class="comment-date">
        a écrit le : <?= $comment['comment_date_fr'] ?>
      </p>
      <p class="comment-comment">
        <?= nl2br(htmlspecialchars($comment['comment'])) ?>
        <a href="index.php?action=reporting&id=<?= $comment['id_comment'] ?>">Signaler un abus</a>
      </p>
      <?php if(!empty($msg)): ?>
        <div class="alert <?php echo $css_class; ?>">
        <?php echo $msg; ?>
      </div>
      <?php endif; ?>
    </div> 
    
    <?php 
        }
          ?>
       
    <?php if(!empty($_SESSION))
        { 
          $id = $_GET['id'];

          ?>
          
          <div class="form-group mt-4">
            <form action="index.php?action=addComment&amp;id=<?php echo $id ?>" method="post">
              <textarea name="comment" placeholder="Votre commentaire..."></textarea>
              <button type="submit" class="btn btn-primary user" name="form_comment" title="ajout de commentaire(s)"><i class="far fa-comment-dots"></i>Publier</button>
            </form>

            <?php
            }
            ?>
            </div>
          </div>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!--Section: Content-->
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
          <p class="center-align">
            <button class="btn btn-outline-primary btn-rounded waves-effect"><a href="index.php?action=signIn" role="button">Se connecter</a></button>
            <button class="btn btn-outline-secondary btn-rounded waves-effect"><a href="index.php?action=signUp" role="button">S'enregister</a></button>
          </p>
        </div>
      </div>
      
      <?php
      }
      ?>
      
    </div>
  </section>
  <!--Section: Content-->
</div>

<?php  $content = ob_get_clean (); ?>
<?php require('src/public/template/template_news.php'); ?>