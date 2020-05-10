<?php $title = 'Enregistrement du membre' ; ?>
<?php ob_start(); ?>

      <div class="background-image"></div>
      <!-- flex container -->
      <div class="d-flex h-100  text-center content">
        <!-- login box -->
        <div class="col-md-3 m-auto z-depth-2 ">
          <form action="index.php?action=addMember" class="my-5 mx-md-5" method="POST" >

            <div class="form-group">
              <h2 class="font-weight-bold white-text ">Inscrivez-vous</h2>
            </div>
            
            <div class="form-group">
              <label for="pseudo" title="Pseudo"><span class="required">*</span> Pseudo</label><br />
              <input type="text" name="pseudo" id="pseudo" required /> 
            </div>
            
            <div class="form-group">
              <label for="email" title="Pseudo"><span class="required">*</span> Email</label><br />
              <input type="email" name="email" id="email" required /> 
            </div>
            
            <div class="form-group">
              <label for="password"><span class="required">*</span> Mot de passe</label><br />
              <input type="password" name="password" id="password" required /> 
            </div>
            
            <div class="form-group">
              <label for="passwordConfirm"><span class="required">*</span> Répétez le mot de passe</label><br />
              <input type="password" name="passwordConfirm" id="passwordConfirm" required />
            </div>
            
            <p id="req">
              <span class="required">*</span>&nbsp;<span>champs obligatoires requis</span>
            </p>
            
            <div class="form-group">
              <button type="submit" class="btn btn blue-gradient user" name="submit" title="s'inscrire"><span class="glyphicon glyphicon-user">&nbsp;</span>S'inscrire</button>
            </div>
            <input type="hidden" name="reason" id="">
            <div class="row">
              <div class="col-12">
                <p class="text-white">Déjà membre&nbsp;?&nbsp;cliquez<a href="index.php?action=signIn" title="Cliquez ici pour vous inscrire">  ici</a></p>
              </div>
              <div class="col-12">
                <p class="gbh-c"><a type="button" class="btn-floating btn-lg blue-gradient" href="index" title="retour à la page d'accueil"><i class="fas fa-home"></i></a></p>
              </div>
            </div>
                        
            <div class="row">
              <div class="col-12">
                <p class="text-left text-white">En cliquant sur <em>S'inscrire</em> vous acceptez nos
                <a href="index?action=termsOfUse" target="_blank">conditions d'utilisation</a>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
    
<?php $content = ob_get_clean(); ?>
<?php require ('src/public/template/template_form.php'); ?>
