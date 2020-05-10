<?php  $title = 'Profil du membre' ; ?> 
<?php  ob_start (); ?>

<div class="background-image"></div>
<!-- flex container -->
<div class="d-flex h-100  text-center content">
  <!-- login box -->
  <div class="col-md-3 m-auto z-depth-2 ">
    <form action="index.php?action=loginSubmit" class="my-5 mx-md-5" method="post" >
      <div class="form-group">
        <h2 class="font-weight-bold white-text ">Se connecter</h2>
      </div>
      <div class="form-group">
      <label for="pseudo" title="Pseudo"><span class="required">*</span> Pseudo</label><br />
      <input type="text" name="pseudo" id="pseudo" required /> 
      </div>
      <div class="form-group">
      <label for="password"><span class="required">*</span> Mot de passe</label><br />
      <input type="password" name="password" id="password" required /> 
      </div>
      <p id="req">
        <span class="required">*</span>&nbsp;<span>champs obligatoires requis</span>
      </p>     
      <div class="form-group">
        <a href="forgot_password.php" class="white-text">Mot de passe oublié ?</a>
      </div>     
      <div class="form-group">
      <button type="submit" class="btn btn blue-gradient user" name="form_login" title="connexion"><span class="glyphicon glyphicon-user">&nbsp;</span>Se connecter</button>
      </div>
      <div class="row">
      <div class="col-12">
        <p class="text-white">Pas encore membre&nbsp;?&nbsp;cliquez<a href="index.php?action=signUp" title="Cliquez ici pour vous inscrire">  ici</a></p>
      </div>
       <div class="col-12">
        <p class="gbh-c"><a type="button" class="btn-floating btn-lg blue-gradient" href="index" title="retour à la page d'accueil"><i class="fas fa-home"></i></a></p>
       </div>    
      </div>
    </form>
  </div>
</div>
<?php  $content = ob_get_clean (); ?>
<?php require ('src/public/template/template_form.php'); ?>

