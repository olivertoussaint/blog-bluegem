<?php $title = "Modification du fil d'actualité";?> 
<?php ob_start(); ?>
<div class="background-image"></div>
<div id="admin-page"></div>
	<h3 class="edit-news-title">Modifier le post</h3>
	<div class="container edit-form">
		<form action="index.php?action=editNewsFeed&id=<?= $_GET['id'];?>" method="POST" id="form">
	    	<div class="col-lg-12"></div>
	    	<div class="col-lg-10 col-md-12 col-xs-12">	        
	        	<div class="form-group" id="title">
	            	<label class="edit-customer" for="title">Titre</label>
	            <div>
	                <input type="text" name="news_title" id="news_title" value="<?= htmlspecialchars($news['news_title']);?> " />
	            </div>
	        	</div>
	        	<div class="form-group">
	            	<label class="edit-customer" for="content">Chapitre à modifier</label>
	            		<div>							
	                		<textarea name="mytextarea" id="mytextarea">
							<img src="src/public/uploads/<?=($news['news_image'])?>" width="100%" alt="<?= htmlspecialchars($news['news_title']) ?>">
							<?= nl2br($news['news_content']);?>
							</textarea>
	            		</div>
	        	</div>
	        	<div class="form-group">
	            	<div class="container">
						<button type="submit" name="modifier" class="btn btn aqua-gradient waves-effect waves-light">Modifier</button>
						<a href="index.php?action=admin" class="btn btn purple-gradient waves-effect waves-light display-pst" role="button">Retour sur le tableau de bord</a>
	            	</div>
	        	</div>
	   		</div>
		</form>
	</div>

<?php $content = ob_get_clean(); ?>  
<?php require('src/public/template/template_newsFeedTrtmt.php'); ?>
