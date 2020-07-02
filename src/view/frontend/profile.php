<?php $title = 'Mon Profil'; ?>
<?php  ob_start (); ?>

<div class="container">
    <div class="row">
      <div class="col-4 offset-md-4 form-div">
        <form action="index.php?action=updateProfile" method="post" enctype="multipart/form-data">
          <h2 class="text-center">Modification de l'avatar</h2>

          <?php if (!empty($msg)): ?>
            <div class="alert <?php echo $css_class; ?>">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>

          <div class="form-group text-center">
              <?php 
              if(isset($member['avatar'])) {
              ?>
              <img src="src/public/avatars/<?=($member['avatar'])?>" onClick="triggerClick()" id="profileDisplay" alt="image avatar">
             <?php }
              else{              
              ?>
              <img src="src/public/avatars/default.png" onClick="triggerClick()" id="profileDisplay" alt="image avatar par défaut">
              <?php
              }
              ?>
              <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
              <label>Image de l'avatar</label>
          </div>
          
          <div class="form-group">
            <button type="submit" name="save_profile" class="btn btn-primary btn-block">Modifiez mon avatar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php  $content = ob_get_clean (); ?>
<?php require('src/public/template/template_news.php'); ?>