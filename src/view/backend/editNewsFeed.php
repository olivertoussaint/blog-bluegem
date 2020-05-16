<?php $title = "Modifier l'article";?> 
<?php ob_start(); ?>

<div id="admin-page"></div>
	<h3 class="edit-news-title">Modifier le post</h3>
	<div class="container edit-form">
		<form action="index.php?action=newsUpdate&id=<?= $_GET['id'];?>" method="POST">
	    	<div class="col-lg-12"></div>
	    	<div class="col-lg-10 col-md-12 col-xs-12">	        
	        	<div class="form-group" id="title">
	            	<label for="title">Titre</label>
	            <div>
	                <input type="text" name="news_title" id="news_title" value="<?= $news['news_title'];?> " />
	            </div>
	        	</div>
	        	<div class="form-group">
	            	<label for="content">Chapitre à modifier</label>
	            		<div>
	                		<textarea name="mytextarea" id="mytextarea"><?= nl2br($news['news_content']);?></textarea>
	            		</div>
	        	</div>

	        	<div class="form-group">
	            	<div class="container">
	                	<button type="submit" name="modifier" class="btn btn-primary">Modifier</button>
	                		<a href="index.php?action=administration" class="btn btn-info" role="button">Retour sur le tableau de bord</a>
	            	</div>
	        	</div>
	   		</div>
		</form>
	</div>

<?php $content = ob_get_clean(); ?>  
<?php require('src/public/template/template_newsFeed.php'); ?>
