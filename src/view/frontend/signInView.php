<?php  $title = 'Login du membre' ; ?> 
<?php  ob_start (); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-2">&nbsp;</div>
    <div class="col-lg-6 col-md-8">
      <div class="alert blue-grey lighten-5">
        <form class="text-center border border-light p-5" action="#!">
          <p class="h4 mb-4">Connectez vous</p>
          <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
          <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
          <div class="d-flex justify-content-around">
            <div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Se souvenir de moi</label>
              </div>
            </div>
            <div>
              <a href="">Mot de passe oublié&nbsp;?</a>
            </div>
          </div>
          <button class="btn btn-info btn-block my-4" type="submit">Se connecter</button>
          <p>Pas encore membre&nbsp;?&nbsp;S'inscrire 
            <a href="index.php?action=signUp" title="Cliquez ici pour vous inscrire">ici</a>
          </p>
                  <p>
                    <a href="index.php" title="retour à la page d'accueil">Retour à la page d'accueil</a>
                  </p>
        </form>   
      </div>      
    </div>  
  </div>  
</div>
<?php  $content = ob_get_clean (); ?>
<?php require ('src/public/template/template_form.php'); ?>