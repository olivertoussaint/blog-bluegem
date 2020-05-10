<?php $title = 'Mon Profil'; ?>
<?php  ob_start (); ?>

<div class="container mt-6">
    <div class="row">
        <div class="col-4 offset-md-4 form-div">
            <form action="index.php?action=updateProfile" method="post" enctype="multipart/form-data" />
            <h3 class="text-center">Création du profil</h3>

            <?php if(!empty($msg)): ?>
                <div class="alert <?php echo $css_class; ?>">
                <?php echo $msg; ?>
            </div>
            <?php endif; ?>

                <div class="form-group text-center">  
                    <img src="src/public/avatars/default.png" onclick="triggerClick()" id="profileDisplay" alt="avatar image">
                    <label for="profileImage">Image du Profil</label>
                    <input type="file" name="profileImage" onchange="displayImage(this)" id="profileImage" style="display:none;">
                </div>
                <div class="form-group">
                    <label for="bio">Biographie</label>
                    <textarea name="bio" id="bio" class="form-control"></textarea>
                </div>
                <div class="form-group">
                <button type="submit" name="save-user" class="btn btn-primary btn-block">Enregistrer mon profil</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php  $content = ob_get_clean (); ?>
<?php require('src/public/template/template_news.php'); ?>