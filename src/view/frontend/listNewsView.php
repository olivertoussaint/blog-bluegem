<?php $title = 'Accueil - Blog'; ?>
<?php  ob_start (); ?>

      <div class="container mt-6">
        <!--Section: Content-->
        <section class="dark-grey-text text-center">
          <!-- Section heading -->
          <p class="text-center mx-auto w-responsive mb-5 p-shadow-5 px-2 py-4 rounded mb-0 background-c fzr">Bienvenu(e) sur <span class="colored-logo">BlueGem</span>, le site d'actualités qui s'interroge sur l'évolution de la biodiversité sur notre belle planète bleue.
            Retrouvez-y toute l'actualité au travers d'une Revue de presse, d'une rubrique A la une et de News. Rejoignez notre communauté et participez aux forums !
          </p>
          <h1>API</h1>
          
          <div id="airMap"></div>
          <!-- Section description -->  
          <h2 class="font-weight-bold  mt-3 mb-4 pb-2">Derniers Articles</h2>
          <!-- Grid row -->
          <div class="row">
  <?php
  while ($data = $news->fetch()) 
    {
  ?>
          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-4">
          <!-- Featured image -->
          <div class="view overlay zoom rounded p-shadow-2 mb-4">
            <img class="img-fluid" src="src/public/uploads/<?=($data['news_image'])?>" alt="<?= htmlspecialchars($data['news_title']) ?>" /> 

              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
          </div>
          <!-- Category -->

          <h6 class="font-weight-bold mb-3 z-depth-2 perso-size background-c">
  <?php switch ($data['id_category']) {
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
            
        <h6 class="font-weight-bold mb-3 perso-fontSize">

  <?php
      $news_title = substr($data['news_title'],0, 40);
      echo $news_title."...";
  ?>
        </h6>
  
        <!-- Post data -->
        <!-- <p>par&nbsp;<a class="font-weight-bold"><?=($data['pseudo'])?></a>,&nbsp;le&nbsp;<?=($data['creation_date_fr'])?></p> -->
        <p>Mise en ligne le &nbsp;<?=($data['creation_date_fr'])?>&nbsp;&nbsp;&nbsp;<a class="font-weight-bold">par&nbsp;&nbsp;<?=($data['pseudo'])?></a></p>
        <!-- Excerpt -->
        <p class="dark-grey-text text-center z-depth-3 py-4 px-4 background-c">

  <?php   
      $news_content = substr($data['news_content'],0,840);
      $last_space   = strripos($news_content, " "); 
      $news_content = substr($news_content, 0, $last_space) . " [...]";

      echo $news_content;
  ?>
        </p>
        <!-- Read more button -->
        <a href="index.php?action=latestNews&amp;id=<?= $data['id_news'] ?>" class="btn btn-read-more-color btn-rounded btn-md">L'article au complet</a>
      
      </div>

  <?php

  }
    $news->closeCursor();  
  ?>

  </div>
</section>

        <nav>
          <ul class="pagination">
            <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
              <a href="index.php?action=listNews&page=<?=$currentPage - 1 ?>" class="page-link">Précédente</a>
            </li>
    <?php 
      for ($page = 1; $page <= $pages; $page++) :?>
            <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
              <a href="index.php?action=listNews&page=<?= $page ?>" class="page-link"><?= $page ?></a>
            </li>
    <?php endfor ?>

            <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
              <a href="index.php?action=listNews&page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
            </li>
          </ul>
        </nav>

	<?php  $content = ob_get_clean (); ?>
	<?php require('src/public/template/template_news.php'); ?>

