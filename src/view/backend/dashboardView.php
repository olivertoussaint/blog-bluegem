<?php $title = 'Administration - Tableau de bord'; ?>
<?php  ob_start (); ?>
 
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-compress-arrows-alt"></i></a>
  <?php if(isset($_SESSION) && !empty($_SESSION) && ($_SESSION['role'] == '1')) : ?>
  <a href=""><img class="logo-content" src="./src/public/images/logo.png" alt="logo BlueGem" /><span class="colored-logo">BlueGem</span></a>
  <a href=""><?= $_SESSION['pseudo'] ?></a>
  <a href="#"><i class="fas fa-home"></i>&nbsp;Accueil</a>
  <a href="#"><i class="fas fa-blog"></i>&nbsp;Blog</a>
  <a href="#"><i class="fab fa-forumbee"></i>&nbsp;Forum</a>
  <a href="#"><i class="fas fa-sign-out-alt"></i>&nbsp;Déconnection</a>

</div>

<div id="main">
<span id="sideNav-perso" onclick="openNav()">&#9776;</span>

<?php endif ?>
  <!-- Main layout -->
<main class="pt-6">
<div class="container-fluid">
  <!-- Grid row -->
  <div class="row">
			<!-- Grid column -->
			<div class="col-md-12 mb-4">
				<div class="card">
					<div class="card-body pl-0 pr-2 pb-0 card-bgd">
						<div class="float-left white-text pl-4">
							<p class="font-weight-light mb-1 mt-n1 text-white-50 font-small example z-depth-3 sz">Vue globale</p>
							<h2 class="font-weight-light t-p">Les activités sur le site</h2>
						</div>
						<canvas id="lineChart" height="90"></canvas>
					</div>
				</div>
			</div>
			<!-- Grid column -->
		</div>
    <!-- Grid row -->
    <!-- Grid row -->
		<div class="row">
			<!-- Grid column -->
			<div class="col-md-8 mb-4">
				<!-- Card -->
				<div class="card card-table">
					<div class="card-header d-flex justify-content-between">
						<div class="d-flex justify-content-start">
							<?php 
							$nbrIntable = $accountManager->inTable();
							?>
							<p class="my-2 text-white pr-3"><i class="fas fa-bell"></i> <span class="badge badge-default-p"><?= $nbrIntable['COUNT(id_comment)'] ?></span></p>
							<p class="my-2 text-white">
								<?php
								setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
								echo strftime('%A %d %B %Y'). '<br>';
								?>
							</p>
						</div>
					</div>
		<!-- Card content -->
		<div class="card-body pt-0">
			<div class="table-responsive">
				<!-- Table  -->
				<table class="table text-white mb-0">
					<thead class="black white-text">
						<tr>
							<th>Identifiant</th>
							<th>Membre</th>
							<th>N° de l'article</th>
							<th>Commentaire(s)</th>
							<th>Action</th>
						</tr>
					</thead>
					<!-- Table body -->
					<tbody>
						<?php
						if(!empty($comments)) {
							foreach ($comments as $comment) {
						?>
						<tr>
							<th scope="row"><?= $comment['id_comment'];?></th>
							<td><?= $comment['id_member'];?></td>
							<td><?= $comment['id_news'];?></td>
							<td><?= $comment['comment'];?></td>
							<td>
								<a class="btn-floating btn-lg btn-success btn-sm" href="index.php?action=validateComment&id=<?= $comment['id_comment'] ?>"><i class="fas fa-check"></i></a>
								<a class="btn-floating btn-lg btn-danger btn-sm"href="index.php?action=deleteComment&id=<?= $comment['id_comment'] ?>"><i class="fas fa-trash"></i></a>	
							</td>
						</tr>
					<?php
						}
					}else{
					?>
						<tr>
							<td></td>
							<td>Aucun commentaire à afficher</td>
						</tr>
						<?php 
						}
						?>
					</tbody>
					<!-- Table body -->
				</table>
				<!-- Table  -->
			</div>
		</div>
	</div>
	<!-- Card -->
</div>
<!-- Grid column -->

	<!-- Grid column -->
	<div class="col-md-4 mb-4">
		<!-- Card -->
		<div class="card card-table">
			<div class="card-header">
				<h5 class="my-2 text-white">Table des membres</h5>
			</div>
			<!-- Card content -->
			<div class="card-body pt-1">
				<div class="table-responsive">
					<table class="table text-white mb-0">
						<thead class="black white-text">
							<tr>
								<th>Pseudo</th>
								<th>E-mail</th>
								<th>Satut</th>
								<th>Date d'inscription</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($members as $member) {
							?>
							
							<tr>
								
								<th scope="row"><?= $member['pseudo'];?></th>
								<td><?= $member['email'];?></td>
								<td><span class="badge badge-default"><?php switch ($member['role']) {
								case 0:
									echo "Visiteur";
								break;
								case 1:
									echo "Admin";
								break;
							}
							?></span></td>
								<td><?= $member['date_create_account'];?></td>
								<td class="text-center"><i class="fas fa-eraser fa-lg"></i></td>
							</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	  <!-- Card -->
	</div>
	<!-- Grid column -->
</div>
<!-- Grid row -->

   <!--Card-->
   <div class="card card-cascade narrower">
	    <!--Card header-->
	    <div class="view view-cascade py-3 gradient-card-header info-color-dark mx-4 d-flex justify-content-between align-items-center">
			
			<a href="" class="white-text mx-3">Table de gestion des articles</a>
			<div>
			<a href="index.php?action=createNewsFeed" class="btn-floating btn-sm-perso z-depth-4 aqua-gradient"><i class="fas fa-newspaper"></i></a>
			</div>
		</div>
		<!--/Card header-->

		<!--Card content-->
		<div class="card-body">
			<div class="table-responsive">
				<table class="table text-nowrap">
					<thead class="black white-text">
						<tr>
							<th>#</th>
							<th>Titre</th>
							<th>Extrait de l'article</th>
							<th>Vue</th>
							<th>Auteur</th>
							<th>Date de publication</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
			<?php
				foreach ($news as $news) {
			?>
						<tr>
							<th scope="row"><?= $news['id_news'];?></th>
							<td><?= $news['news_title'];?></td>
							<td>
								<?php
								$news_content = substr($news['news_content'],0,50);
								$last_space   = strripos($news_content, " ");
								$blog_content = substr($news_content, 0, $last_space) . " [...]";
								echo $blog_content;
								?>
							</td>
							<td><a class="btn-floating btn-lg btn-perso btn-sm" data-toggle="modal" data-target="#newsModal<?= $news['id_news'];?>"><i class="far fa-eye"></i></a>
						</td>
						<!-- Modal -->
						<div class="modal fade" id="newsModal<?= $news['id_news'];?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-scrollable " role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="modalLabel"><?= $news['news_title'];?></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<?= $news['news_content'];?>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn aqua-gradient" data-dismiss="modal">Fermer</button>
								</div>
							</div>
						</div>
					</div>
					<td><?= $news['author'];?></td>
					<td><?= $news['creation_date_fr'];?></td>
					<td>
						<!-- Button to Open the Modal -->
						<div class="btn-group">
						<button type="button" class="btn aqua-gradient-perso"><i class="fas fa-pen-nib"></i></button>
  <button type="button" class="dropdown-toggle btn aqua-gradient-perso waves-effect" data-toggle="dropdown" aria-haspopup="true"
    aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
<div class="dropdown-menu">
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal">
  Modifier l'article
</button></a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal">
  Supprimer l'article
</button></a>
  </div>
</div>
  </td>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>					
				</tr>
		<?php
			}
		?>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>

<?php 
  for ($i = 1; $i<=$nbPage; $i++) {
?>
<a href="index.php?action=admin&page=<?=$i ?>">  <?=$i?> </a>

<?php
   } 
?>

</div>

</main>

<?php  $content = ob_get_clean (); ?>
<?php require('src/public/template/template_dashboard.php'); ?>   