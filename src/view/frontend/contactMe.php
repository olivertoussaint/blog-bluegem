<?php  $title = 'Me contacter' ; ?> 
<?php  ob_start (); ?>

<div class="container z-depth-5 my-5 px-0">
  <!--Section: Content-->
  <section class="my-md-5 background">
    <div class="rgba-black-light rounded p-5">
      <!-- Section heading -->
      <h3 class="text-center font-weight-bold text-white mt-3 mb-5">Contactez moi</h3>
      <form id ="contact-form" name="contact-form" class="mx-md-5"  action="mail.php" onsubmit="return validateForm()" >
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-body px-4">
              <!-- Name -->
              <div class="md-form md-outline mt-0">
                <input type="text" id="name" name="name" class="form-control">
                <label for="name">Votre nom</label>
              </div>
              <!-- Email -->
              <div class="md-form md-outline">
                <input type="text" id="email" name="email" class="form-control">
                <label for="email">Votre adresse Email</label>
              </div>
              <!-- subject -->
              <div class="md-form md-outline">
                <input type="text" id="subject" name="subject" class="form-control">
                <label for="subject">Sujet</label>
              </div>
              <!-- Message -->
              <div class="md-form md-outline">
                <textarea id="message" name="message" class="md-textarea form-control" rows="3"></textarea>
                <label for="message">Votre message</label>
              </div>
              <div class="center-on-small-only">
                <a class="btn btn aqua-gradient btn-perso-1" onclick="validateForm()">Envoyer</a>
                <a href="index.php?action=listNews" class="btn btn purple-gradient btn-perso-2">Annuler</a>
              </div> 
              <div class="status" id="status"></div>
            </div>
          </div>
        </div>
        <div class="col-md-5 offset-md-1 mt-md-4 mb-4 text-center white-text">
          <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
              <p>Goussainville, Val d'oise, FRANCE</p>
            </li>
            <li>
            <div id="map"></div>
            </li>
            <li><i class="fas fa-phone mt-4 fa-2x"></i>
              <p>+ 33 xx xx xx xx</p>
            </li>
            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
              <p>toussaint.olivier@aliceadsl.fr</p>
            </li>            
          </ul>
        </div>
      </div>
    </form>
  </div>
</section>
<!--Section: Content-->
</div>
<div class="text-center">
  <p class="gbh-c"><a type="button" class="btn-floating btn-lg blue-gradient" href="index" title="retour à la page d'accueil"><i class="fas fa-home"></i></a></p>
</div> 
 
<?php  $content = ob_get_clean (); ?>
<?php require ('src/public/template/template_contact.php'); ?>