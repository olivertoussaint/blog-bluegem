<?php $title = 'Administration - Nouveau fil d\'actualité'; ?>
<?php  ob_start (); ?>
<div class="background-image"></div>

    <div id="admin-page"></div>
    
    <div class="container create-form">
        
        <div class="col-lg-12"></div>
         <h3 class="text-center new-post-title">Rédaction d'un nouveau chapitre</h3>
            <div class="col-lg-10 col-md-12 col-xs-12">
            
                <form action="index.php?action=submitPost" method="POST">
                   
                        <div class="form-group" id="title">
                            <label class="create-customer" for="title">Titre</label>
                                <div>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Ajoutez ici un titre à votre article" />
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="create-customer" for="content">Chapitre</label>
                                <div>
                                    <textarea name="mytextarea" id="mytextarea" class="form-control" placeholder="Rédigez votre article ici"></textarea>
                                </div>
                        </div>
                        <div class="form-group">
                            <div class="container">
                                <button type="submit" name="envoyer" class="btn btn aqua-gradient waves-effect waves-light">Envoyer</button>
                                    <a href="index.php?action=admin" class="btn btn purple-gradient waves-effect waves-light display-pst" role="button">Retour sur le tableau de bord</a>
                            </div>
                        </div>
                </form>
            </div>
    </div>
        
<?php $content = ob_get_clean(); ?>  
<?php require('src/public/template/template_newsFeedTrtmt.php'); ?>