<?php $title = 'Enregistrement du membre' ; ?>
<?php ob_start(); ?>
<div class="container white py-3 shadow-lg">
    <div class="row">
        <div class="col-lg-3 col-md-2">&nbsp;</div>
        <div class="col-lg-6 col-md-8">
            <div class="alert blue-grey lighten-5">
                <h2 class="text-center">Inscrivez-vous</h2>
                <form action="index.php?action=addMember" method="POST">
                    <div class="form-group">
                        <label for="pseudo" class="required">Pseudo</label>
                        <input type="text" id="pseudo" name="pseudo" required="required" placeholder="Votre pseudo ..." class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="email" class="required">Email</label>
                        <input type="email" id="email" name="email" required="required" placeholder="Votre email ..." class="form-control" />
                    </div>

                        <div class="form-group">
                            <label for="password" class="required">Mot de passe</label>
                            <input type="password" id="password" name="password" required="required" placeholder="Choisissez un mot de passe" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="passwordConfirm" class="required">Confirmation de mot de passe</label>
                            <input type="password" id="passwordConfirm" name="passwordConfirm" required="required" placeholder="Veuillez confirmer votre mot de passe" class="form-control" />
                        </div>


                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-info my-4 btn-block" >S'inscrire</button>
                    </div>
                <hr>
                <div class="g-recaptcha" 
                    data-sitekey="6Le6WOIUAAAAAMDCirIT8f92_JR4SYF_9LKZvheV">
                </div>
                
                <p>En cliquant sur
                        <em>S'inscrire</em> vous acceptez nos
                        <a href="index?action=termsOfUse" target="_blank">conditions d'utilisation</a>
                </p>
                </form>
           

            </div>
            <div class="row">
                <div class="col-7">
            <p>Déjà membre&nbsp;?&nbsp;cliquez<a href="index.php?action=signIn" title="Cliquez ici pour vous logger">  ici</a></p>
            </div>
            <div class="col-5">
                <p><a href="index" title="retour à la page d'accueil">Retour à la page d'accueil</a></p>
            </div>    
        </div>
    </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require ('src/public/template/template_form.php'); ?>
