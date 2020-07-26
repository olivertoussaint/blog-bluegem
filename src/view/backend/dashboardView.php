<?php $title = 'Administration - Tableau de bord'; ?>
<?php  ob_start (); ?>

		<?php
		if (isset($_GET['approve-comment']) &&  $_GET['approve-comment'] == 'success') {
			echo '<p class= "message" id="success">Le commentaire a bien été validé !</p>';
		}
		elseif (isset($_GET['delete-comment']) && $_GET['delete-comment'] == 'success') {
			echo '<p class= "message" id="success">Le commentaire a bien été supprimé !</p>';
		}
		elseif (isset($_GET['create-newsFeed']) &&  $_GET['create-newsFeed'] == 'success') {
			echo '<p class="message" id="success">L\'article a bien été posté !</p>';
		}
		elseif (isset($_GET['delete-news']) &&  $_GET['delete-news'] == 'success') {
			echo '<p class="message" id="success">L\'article a bien été supprimé !</p>';
		}
		elseif (isset($_GET['remove-member']) && $_GET['remove-member'] == 'success') {
			echo '<p class="message" id="success">Le membre viens d\'être banni !</p>';
		}
		?>

		<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-compress-arrows-alt"></i></a>
		<?php if(isset($_SESSION) && !empty($_SESSION) && ($_SESSION['role'] == '1')) : ?>
		<a href="/index"><img class="logo-content" src="./src/public/images/logo.png" alt="logo BlueGem" /><span class="colored-logo">BlueGem</span></a>
		<a href="index.php?action=updateProfile" title="Màj du profil"><img src="src/public/avatars/<?= $_SESSION['avatar']?>" id="avatarResize"  class="rounded-circle z-depth-0" alt="avatar image"><?= $_SESSION['pseudo'] ?></a>
		<a href="/index" title="Retour à l'accueil"><i class="fas fa-home"></i>&nbsp;Accueil</a>
		<a href="index.php?action=listNews" title="Retour au blog"><i class="fas fa-blog"></i>&nbsp;Blog</a>
		<a href="#" title="Retour au forum"><i class="fab fa-forumbee"></i>&nbsp;Forum</a>
		<a href="#" title="Déconnection" data-toggle="modal" data-target="#modalConfirmLogout"><i class="fas fa-sign-out-alt" ></i>&nbsp;Déconnection</a>
		</div>

		<!--Modal: modalConfirmLogout-->
		<div class="modal fade" id="modalConfirmLogout" tabindex="-1" role="dialog" aria-labelledby="modalLabelLogout" aria-hidden="true">
			<div class="modal-dialog modal-sm modal-notify modal-info" role="document">
				<!--Content-->
				<div class="modal-content text-center">
					<!--Header-->
					<div class="modal-header d-flex justify-content-center">
						<p class="heading">Souhaitez-vous vous déconnecter ?</p>
					</div>					
					<!--Body-->
					<div class="modal-body">
						<i class="fas fa-sign-out-alt fa-4x animated slideInLeft"></i>
					</div>
					<!--Footer-->
					<div class="modal-footer flex-center">
						<a href="index.php?action=logout" class="btn btn aqua-gradient">Oui</a>
						<button type="button" class="btn btn purple-gradient" data-dismiss="modal">Non</button>
					</div>
				</div>
				<!--/.Content-->
			</div>
		</div>
		<!--Modal: modalConfirmLogout-->
		
		<div id="main">
			<span id="sideNav-perso" class="z-depth-2" onclick="openNav()">&#9776;</span>
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
							<p class="my-2 text-white pr-3"><i class="fas fa-bell"></i><span class="badge badge-default-p"><?= $nbrIntable['COUNT(id_comment)'] ?></span></p>
							<p class="my-2 text-white">
							<?php
								setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
								echo strftime('%A %d %B %Y'). '<br />';
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
										<th>ID/commentaire</th>
										<th>Etape en cours</th>
										<th>N° de l'article</th>
										<th>Commentaire(s)</th>
										<th>Action(s)</th>
									</tr>
								</thead>
								<!-- Table body -->
								<tbody>
									<?php
										if($comments->rowCount() > 0) {
										foreach ($comments as $comment) {
									?>
									<tr>
										<th scope="row"><?= $comment['id_comment'];?></th>
										<td><span class="badge badge-blue"><?php switch ($comment['flagged']) {
								case 1:
									echo "Modération en attente";
								break;
								case 2:
									echo "Commentaire modéré !";
								break;
							}
							?></span></td>
										<td><?= $comment['id_news'];?></td>
										<td><?= $comment['comment'];?></td>
										<td>
											<a class="btn-floating btn-lg aqua-gradient btn-sm" href="index.php?action=validateComment&id=<?= $comment['id_comment'] ?>" title="Valider le commentaire"><i class="fas fa-check"></i></a>&nbsp;
											<a class="btn-floating btn-lg purple-gradient btn-sm"href="index.php?action=deleteComment&id=<?= $comment['id_comment'] ?>" title="Supprimer le commentaire"><i class="fas fa-trash"></i></a>	
										</td>
									</tr>
									<?php
									}
									}else
									{
									?>
									<tr>

							 		<td class="no-comment"><i class="fas fa-comment-slash"></i>&nbsp;Aucun commentaire à afficher !</td>
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
										<th>Supprimer</th>
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
									echo "Membre";
								break;
								case 1:
									echo "Admin";
								break;
							}
							?>
											</span></td>
											<td><?= $member['date_create_account'];?></td>
					<?php if ($member['role'] == 0) {
								echo "<td class='text-center'> <a href='#' data-toggle='modal' data-target='#modalConfirmRemoveMember' title='Supprimer un membre'><i class='fas fa-user-minus'></i></a></td>";
								} else {
								echo "<td class='text-center' title='Admimistrateur' ><i class='fas fa-chess-king'></i></td>";
								}
								?>
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

			<!--Modal: modalConfirmRemoveMember-->
			<div class="modal fade" id="modalConfirmRemoveMember" tabindex="-1" role="dialog" aria-labelledby="modalLabelRemoveMember" aria-hidden="true">
				<div class="modal-dialog modal-sm modal-notify modal-info" role="document">
					<!--Content-->
					<div class="modal-content text-center">
						<!--Header-->
						<div class="modal-header d-flex justify-content-center">
							<p class="heading z-depth-5"><i class="fas fa-exclamation-triangle"></i>&nbsp;Vous êtes sûr le point de bannir un membre ! </p>
						</div>
						<!--Body-->
						<div class="modal-body">
							<i class="fas fa-user-alt-slash fa-4x animated slideInRight z-depth-2"></i>
						</div>
						<!--Footer-->
						<div class="modal-footer flex-center">
							<a href="index.php?action=deleteMember&id=<?=$member['id']?>" class="btn btn aqua-gradient">Oui</a>
							<button type="button" class="btn btn purple-gradient" data-dismiss="modal">Non</button>
						</div>
					</div>
					<!--/.Content-->
				</div>
			</div>
			<!--Modal: modalConfirmRemoveMember-->
		</div>
		<!-- Grid row -->

		   <!--Card-->
		   <div class="card card-cascade narrower">
			   <!--Card header-->
			   <div class="view view-cascade py-3 gradient-card-header info-color-dark mx-4 d-flex justify-content-between align-items-center">
				   <a href="" class="white-text mx-3">Table de gestion des articles</a>
				   <div>
					   <a href="index.php?action=createNewsFeed" title="Nouvel article" class="btn-floating btn-sm-perso z-depth-4 aqua-gradient"><i class="fas fa-plus"></i></a>
					</div>
				</div>
				<!--/Card header-->
				
				<!--Card content-->
				<div class="card-body">
					<div class="table-responsive">
						<table class="table text-nowrap">
							<thead class="black white-text">
								<tr>
									<th>#ID</th>
									<th>Titre</th>
									<th>Extrait de l'article</th>
									<th>Vue</th>
									<th>Date de publication</th>
									<th>Modifier/Supprimer</th>
								</tr>
							</thead>
							
							<tbody>
			<?php
				foreach ($news as $nws) {
			?>
								<tr>
									<th scope="row"><?= $nws['id_news'];?></th>
										<td><?= $nws['news_title'];?></td>
										<td>
			<?php
				$news_content = substr($nws['news_content'],0,50);
				$last_space   = strripos($news_content, " ");
				$news_content = substr($news_content, 0, $last_space) . " [...]";
				echo $news_content;
			?>
										</td>
										<td><a class="btn-floating btn-lg btn-perso btn-sm" title="Voir l'article" data-toggle="modal" data-target="#newsModal<?= $nws['id_news'];?>"><i class="far fa-eye"></i></a>
										</td>
										
										<!-- Modal -->
										<div class="modal fade" id="newsModal<?= $nws['id_news'];?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel-1" aria-hidden="true">
										<div class="modal-dialog modal-dialog-scrollable " role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="modalLabel-1"><?= $nws['news_title'];?></h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
									<?= $nws['news_content'];?>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn aqua-gradient" data-dismiss="modal">Fermer</button>
												</div>
											</div>
										</div>
									</div>
									<td><?= $nws['creation_date_fr'];?></td>
									<td>
										<div class="container">
											<a href="index.php?action=editNewsFeed&id=<?= $nws['id_news'];?>" title="Modifier l'article" class="btn-floating aqua-gradient" data-toggle="modal" data-target="#editNewsModal<?= $nws['id_news'];?>"><i class="fas fa-user-edit"></i></a>&nbsp;
											<a href="" title="Supprimer l'article" class="btn-floating purple-gradient" data-toggle="modal" data-target="#deleteNewsmodal<?= $nws['id_news'];?>"><i class="fas fa-trash"></i></a>
										</div>
									</td>
									<!-- The Modal -->
									<div class="modal fade" id="editNewsModal<?= $nws['id_news'];?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel-2" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<!-- Modal Header -->
											<div class="modal-header">
												<h4 class="modal-title" id="modalLabel-2"><?= $nws['news_title'];?></h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>
											<!-- Modal body -->
											<div class="modal-body">
												<h5 class="blue-grey-text shadow-perso-1">Vous êtes sur le point de modifier l'article #ID <?= $nws['id_news'];?> ! </h5>
							publié le : <?= $nws['creation_date_fr'];?>
											</div>
											<!-- Modal footer -->
											<div class="modal-footer">
												<a href="index.php?action=editNewsFeed&id=<?= $nws['id_news'];?>" class="btn btn aqua-gradient">Modifier</a>
												<button type="button" class="btn btn purple-gradient" data-dismiss="modal">Annuler</button>
											</div>
										</div>
									</div>
								</div>
								<!-- The Modal -->
								<div class="modal" id="deleteNewsmodal<?= $nws['id_news'];?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel-3" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<!-- Modal Header -->
										<div class="modal-header">
											<h4 class="modal-title" id="modalLabel-3"><?= $nws['news_title'];?></h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										<!-- Modal body -->
										<div class="modal-body">
											<h5 class="deep-purple-text shadow-perso-2">Vous êtes sur le point de supprimer l'article #ID<?=$nws['id_news']?>!</h5>
							publié le : <?= $nws['creation_date_fr'];?>
										</div>
										<!-- Modal footer -->
										<div class="modal-footer">
											<a href="" title="Supprimer" class="btn btn aqua-gradient">Supprimer</a>
											<button type="button" title="Annuler" class="btn btn purple-gradient" data-dismiss="modal">Annuler</button>	
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

			<nav class="mt-2">
				<ul class="pagination">
					<li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
						<a href="index.php?action=admin&page=<?=$currentPage - 1 ?>" class="page-link">Précédente</a>
					</li>
    <?php 
    for ($page = 1; $page <= $pages; $page++) :?>
    				<li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
      					<a href="index.php?action=admin&page=<?= $page ?>" class="page-link"><?= $page ?></a>
    				</li>
    <?php endfor ?>
    				<li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
      					<a href="index.php?action=admin&page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
					</li>
				</ul>
			</nav>
		</div>
	</main>

<?php  $content = ob_get_clean (); ?>
<?php require('src/public/template/template_dashboard.php'); ?>   