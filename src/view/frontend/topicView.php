<?php $title = 'Topic'; ?>
<?php  ob_start (); ?>

<div class="container mt-6">
    <div class="row">
    <div class="col-sm-0 col-md-0 col-lg-0"></div>
    <div class="col-sm-12 col-md-8 col-lg-12">
        <h1 class="text-center f-title">Topic : <?=$topic['title']?></h1>
        <div class="topic-s">
          <h3>Contenu</h3>
          <div class="border-t"><?=$topic['content']?></div>
          <div class="text-right topic-flt">
           <?=$topic['date_c']?>
           par
           <?=$topic['id_user']?>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php  $content = ob_get_clean (); ?>
<?php require('src/public/template/template_forum.php'); ?>