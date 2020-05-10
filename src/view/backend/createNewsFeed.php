<?php $title = 'Administration - Nouveau fil d\'actualité'; ?>
<?php  ob_start (); ?>

        <div class="container h-100 mt-5">
            
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12">
                <textarea cols="80" id="editor" name="editor1" rows="10"></textarea>                              
            
            <input class="mt-1" type="submit" value="envoyer" />
            </div>
        </div>
        </div>

<?php  $content = ob_get_clean (); ?>
<?php require('src/public/template/template_newNewsFeed.php'); ?>