 <!DOCTYPE html>
 <html>
     <head>
         <title>Envoi d'un courriel</title>
     </head>
     <body>
         <h1 class="text-center">Envoi d'un courriel via SwiftMailer</h1>
         <h2>A partir du localhost avec Gmail SMTP</h2>
         <hr />


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

<div class="row">
    <div class="col-md-9 col-md-offset-2">
        <form role="form" method="post" enctype="multipart/form-data">
        	<div class="row">
                <div class="col-sm-9 form-group">
                    <label for="email">To Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" maxlength="50">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject" name="subject" value="Test Mail with attachments" maxlength="50">
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="name">Message:</label>
                    <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="4">Test mail using PHPMailer</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="name">File:</label>
                    <input name="file[]" multiple="multiple" class="form-control" type="file" id="file">
                </div>
            </div>
             <div class="row">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="sendmail" class="btn btn-lg btn-success btn-block">Send</button>
                </div>
            </div>
        </form>
	</div>
</div>
</body>
</html>