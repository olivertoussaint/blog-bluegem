<?php $title = 'Enregistrement du membre' ; ?>
<?php ob_start(); ?>
<div class="container white py-3 shadow-lg">
    <div class="row">
        <div class="col-lg-3 col-md-2">&nbsp;</div>
        <div class="col-lg-6 col-md-8">
            <div class="alert blue-grey lighten-5">
                <h2 class="text-center">Inscrivez-vous</h2>
                <form name="registration" method="post">

                <div id="registration">
                    <div class="form-group">
                        <label for="registration_username" class="required">Pseudo</label>
                        <input type="text" id="registration_username" name="registration[username]" required="required" placeholder="Votre pseudo ..." class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="registration_email" class="required">Email</label>
                        <input type="email" id="registration_email" name="registration[email]" required="required" placeholder="Votre email ..." class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="registration_picture">Photo de profil</label>
                        <input type="text" id="registration_picture" name="registration[picture]" placeholder="URL de votre avatar (optionnel) ..." inputmode="url" class="form-control" /></div>
                        <div class="form-group">
                            <label for="registration_hash" class="required">Mot de passe</label>
                            <input type="password" id="registration_hash" name="registration[hash]" required="required" placeholder="Choisissez un mot de passe !" class="form-control" /></div>
                            <div class="form-group">
                                <label for="registration_passwordConfirm" class="required">Confirmation de mot de passe</label>
                                <input type="password" id="registration_passwordConfirm" name="registration[passwordConfirm]" required="required" placeholder="Veuillez confirmer votre mot de passe !" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="registration_description">Description</label>
                                <textarea id="registration_description" name="registration[description]" placeholder="Ecrivez une description (optionnel) ...." class="form-control">
                                </textarea>
                            </div>
                            <input type="hidden" id="registration__token" name="registration[_token]" value="xrxkyVH2vLqtga2y4hwF1LuGv_AAhXRcEsDrOqvPCTU" />
                </div>
                <button class="btn btn-info my-4 btn-block" type="submit">S'inscrire</button>
                <hr>
                <p>En cliquant sur
                        <em>S'inscrire</em> vous acceptez nos
                        <a href="" target="_blank">conditions d'utilisation</a>
                </p>
                </form>
            </div>
            <div class="row">
                <div class="col-7">
            <p>Déjà membre&nbsp;?&nbsp;cliquez<a href="index.php?action=signIn" title="Cliquez ici pour vous logger">  ici</a></p>
            </div>
            <div class="col-5">
                <p><a href="index.php" title="retour à la page d'accueil">Retour à la page d'accueil</a></p>
            </div>    
        </div>
    </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require ('src/public/template/template_form.php'); ?>
