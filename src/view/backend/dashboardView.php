<?php $title = 'Administration - Tableau de bord'; ?>
<?php  ob_start (); ?>

<!-- Main layout -->
<main class="pt-7">

<div class="container-fluid">

  <!-- Grid row -->
  <div class="row">

	<!-- Grid column -->
	<div class="col-md-12 mb-4">

	  <div class="card">
		<div class="card-body pl-0 pr-2 pb-0">
		  <div class="float-left white-text pl-4">
			<p class="font-weight-light mb-1 mt-n1 text-white-50 font-small">Vue globale</p>
			<h2 class="font-weight-light">Les activités sur le site</h2>
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
			<p class="my-2 text-white pr-3">Signalements (<?= $nbrIntable['COUNT(flagged)'] ?>)</p>
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
	  
		<a class="btn-floating btn-lg btn-success btn-sm"><i class="fas fa-check"></i></a>
		<a class="btn-floating btn-lg btn-danger btn-sm"><i class="fas fa-trash"></i></a>	
	</td>
    </tr>
	<?php
			}
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
			<table class="table text-white  mb-0">
			  <thead class="">
				<tr>
				  <th>Pseudo</th>
				  <th>E-mail</th>
				  <th>Satut</th>
				  <th>Date d'inscription</th>
				  
				</tr>
			  </thead>
			  <tbody>

			  <tbody>
			  <?php
			
			foreach ($members as $member) 
			{
				
				?>


				<tr>
				<th scope="row"><?= $member['pseudo'];?></th>
				  <td><?= $member['email'];?></td>
				  <td><span class="badge badge-default"><?= $member['role'];?></span></td>
				  <td><?= $member['date_create_account'];?></td>
				  <td class="text-center"></td>


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

	<div>
		<button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
			<i class="fa fa-th-large mt-0"></i>
		</button>
		<button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
			<i class="fa fa-columns mt-0"></i>
		</button>
	</div>

	<a href="" class="white-text mx-3">Table de gestion des articles</a>

<div>
	<button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
		<i class="fas fa-pencil-alt mt-0"></i>
	</button>
	<button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
		<i class="fas fa-times mt-0"></i>
	</button>
	<button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
		<i class="fa fa-info-circle mt-0"></i>
	</button>
</div>
</div>
 <!--/Card header-->
<!--Card content-->
<div class="card-body">

<div class="table-responsive">

	<table class="table text-nowrap">
		<thead>
			<tr>
				<th>#</th>
				<th>Titre</th>
				<th>Extrait de l'article</th>
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
				<td><?= $news['news_content'];?></td>
				<td><?= $news['author'];?></td>
				<td><?= $news['creation_date_fr'];?></td>
				<td></td>
			</tr>
			<?php
				}
				?>
		</tbody>
	</table>
</div>
</div>

   </div>
</div>

</main>
<!-- Main layout -->


<?php  $content = ob_get_clean (); ?>
<?php require('src/public/template/template_dashboard.php'); ?>   