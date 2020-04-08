<?php $title = 'Accueil - Blog'; ?>
<?php  ob_start (); ?>

<div class="container mt-6">
  <!--Section: Content-->
  <section class="dark-grey-text text-center">

    <!-- Section heading -->
    <p class="text-center mx-auto w-responsive mb-5 p-shadow-5 px-2 py-4 rounded mb-0 background-c">Bienvenu(e) sur <span class="colored-logo">BlueGem</span>, le site d'actualités qui s'interroge sur l'évolution de la biodiversité sur notre belle planète bleue.
      Retrouvez-y toute l'actualité au travers d'une Revue de presse, d'une rubrique A la une et de News. Rejoignez notre communauté et participez aux forums !
    </p>
    <!-- Section description -->  
    <h2 class="font-weight-bold  mt-3 mb-4 pb-2">Derniers Articles</h2>
<!-- Grid row -->
<div class="row">
  <?php

  while ($data = $news->fetch()) {
  
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
  <a href="#!" >
    <h6 class="font-weight-bold mb-3 z-depth-2 perso-size background-c">
    <?php switch ($data['id_category']) {
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
  
  </a>
  <h6 class="font-weight-bold mb-3 perso-fontSize">
    <?php
      $news_title = substr($data['news_title'],0, 40);
      echo $news_title."...";
  ?>
  </h6>
  
  <!-- Post data -->
  <p>par&nbsp;<a class="font-weight-bold"><?=($data['author'])?></a>,&nbsp;le&nbsp;<?=($data['creation_date_fr'])?></p>
  <!-- Excerpt -->
  <p class="dark-grey-text text-justify z-depth-3 py-4 px-4 background-c">
  <?php   
      $news_content = substr($data['news_content'],0,920);
      $last_space   = strripos($news_content, " "); 
      $blog_content = substr($news_content, 0, $last_space) . " [...]";

      echo $blog_content;

  ?>
  </p>
  <!-- Read more button -->
  <a href="index.php?action=latestNews&amp;id=<?= $data['id_news'] ?>" class="btn btn-cyan btn-rounded btn-md">Read more</a>

</div>
<?php
  }
    $news->closeCursor();

  ?>
</div>

  </section>
  <?php 
  for ($i = 1; $i<=$nbPage; $i++) {
?>
<a href="index.php?action=listNews&page=<?=$i ?>">  <?=$i?> </a>

<?php
  } 
  
  ?>
  
	<?php  $content = ob_get_clean (); ?>
	<?php require('src/public/template/template_news.php'); ?>

