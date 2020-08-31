<?php $title = 'Topic'; ?>
<?php  ob_start (); ?>

<h1 class="font-weight-light text-center mt-6 fs-title">Les topics</h1>
      <div class="container cyan lighten-3 mt-4 mb-5 py-4 shadow-lg shadow-border">
         <div class="row">
            <table class="table table-responsive table-hover">
               <thead class="black white-text">
                  <tr>
                     <th class="main px-3">Sujet</th>
                     <th class="sub-info">Messages</th>
                     <th class="sub-info">Dernier message</th>
                     <th class="sub-info py-3 text-center">Création</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                  while($t = $topics->fetch()) { ?>
                     <tr>
                        <td class="main px-3">
                           <h6><a href=""><?=$t['title'] ?></a></h6>
                        </td>
                        <td class="sub-info">4083495</td>
                        <td class="sub-info">30.07.2020 à 18h07<br /> de Olivier33</td>
                        <td class="sub-info text-center">
                           <?= $t['date_c']?>
                           <span class="badge badge-info"><?= $t['pseudo'] ?></span>
                        </td>
                     </tr>
                  <?php } ?>
               </tbody>
            </table>
         </div>
      </div>

<?php  $content = ob_get_clean (); ?>
<?php require('src/public/template/template_forum.php'); ?>