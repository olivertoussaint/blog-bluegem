<?php  $title = 'Mot de passe oublié' ; ?> 
<?php  ob_start (); ?>


<?php
            if(isset($_POST['senmail'])) {
                // require_once 'vendor/autoload.php';
// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
  ->setUsername('EMAIL')
  ->setPassword('PASS');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message($_POST['subject']))
  ->setFrom(['EMAIL' => 'Blog BlueGem'])
  ->setTo([$_POST['EMAIL']])
  ->setBody($_POST['message']);

if(isset($_FILES['file'])) {
    $message->attach(Swift_Attachment::fromPath($_FILES['file']['tmp_name']) ->setFilename('logo.png')
);
}

// Send the message
    if($mailer->send($message)) {
        echo "Courriel envoyé..!!";

            }else {
                echo "Echec de l'envoi du courriel..!!";
            }
        }
   ?>
   
<div class="background-image"></div>
<!-- flex container -->
<div class="d-flex h-100  text-center content">
<div class="col-md-3 m-auto z-depth-2">
    <form action="" method="post">
        <div class="form-group">
            <h2 class="font-weight-bold white-text mt-4 ">Mot de passe oublié ?</h2>   
        </div>
        <div class="form-group">
            <label for="email" title="email"><span class="required">*</span> Email</label><br />
            <input type="email" name="email" id="email" required /> 
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn blue-gradient user" name="form_login" title="connexion"><span class="glyphicon glyphicon-user">&nbsp;</span>Demande d'un nouveau mot de passe</button>
      </div>
      <div class="col-12">
         <p class="gbh-c"><a type="button" class="btn-floating btn-lg blue-gradient" href="index.php?action=signIn" title="retour au formulaire de connexion"><i class="fas fa-times"></i></a></p>
      </div>    
    </form>
</div>
</div>

<?php  $content = ob_get_clean (); ?>
<?php require ('src/public/template/template_form.php'); ?>