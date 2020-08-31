<?php $title = 'nouveau topic'; ?>
<?php  ob_start (); ?>

      <div class="container mt-6">
         <div class="row">
            <div class="col-sm-0 col-md-0 col-lg-0"></div>
            <div class="col-sm-12 col-md-8 col-lg-12">
               <div class="mt-3 mb-3">
                  <a href="index.php?action=forum" title="retour au forum" class="btn-floating btn-lg aqua-gradient">
                     <i class="fas fa-arrow-left"></i>
                  </a>
                  <h1 class="f-title">Nouveau topic</h1>
               </div>

               <div class="container cyan lighten-3 my-5 py-4 shadow-lg shadow-border">
                  <form class="fntopic" method="POST" action= "index.php?action=newTopic">
                     <div class="form-group">
                        <p class="topic"><label for="tsujet"><span class="z-depth-3 nwt">Sujet</span></label></p>
                        <input class="z-depth-3 pdg" type="text" name="tsujet" placeholder="Le titre du topic ..." size="70" maxlength="70" />
                     </div>
                     
                     <div class="form-group">
                        <p class="topic">
                           <label for="tcategorie">
                              <span class="z-depth-3 nwt">Choisir une catégorie</span>
                           </label>
                        </p>
                        <select name="categories" id="categories">
                           <option value="01">01 - Réchauffement climatique</option>
                           <option value="02">02 - Activité humaine</option>
                           <option value="03">03 - Spiritualité/Astrologie</option>
                           <option value="04">04 - Autres sujets</option>
                        </select>
                     </div>
                     
                     <div class="form-group">
                        <p class="topic">
                           <label for="tsouscat">
                              <span class="z-depth-3 nwt">Sous-catégorie</span>
                           </label>
                        </p>
                        <select name="keywords" id="keywords" multiple>
                           <option value="15">Coronavirus</option>
                           <option value="20">Vaccin</option>
                           <option value="25">Canicule</option>
                           <option value="30">Sécheresse</option>
                           <option value="35">Incendie</option>
                           <option value="40">Pollution</option>
                           <option value="45">Méditation</option>
                           <option value="50">Prévisions</option>
                           <option value="55">Test</option>
                        </select>
                     </div>
                     
                     <div class="form-group">
                        <p class="topic">
                           <label for="tsouscat">
                              <span class="z-depth-3 nwt">Message</span>
                           </label>
                        </p>
                        <textarea class="form-control  z-depth-3" name="tcontenu" placeholder="&Eacute;crivez quelque chose ici..."></textarea>
                     </div> 
                     
                     <div class="form-group">
                        <p class="topic">
                           <label for="tmail">
                              <span class="z-depth-3 nwt">notifier des réponses par mail</span>
                           </label>&nbsp;&nbsp;<input type="checkbox" name="tmail" />
                        </p>
                     </div>
                     
                     <input class="btn aqua-gradient z-depth-3" type="submit" name="tsubmit" value="Poster le Topic" />
               <?php if(isset($_SESSION) && empty($_SESSION)) { ?> 

                     <div class="row">
                        <div class="col-5 mt-3 z-depth-2 ">
                           <p class="font-weight-bold py-2 text-center z-depth-3 error">Vous devez être connecté pour pouvoir poster un topic.</p>
                        </div>
                     </div>
               <?php
                  }
               ?>
               </form>
            </div>
         </div>
      </div>
   </div>

<?php  $content = ob_get_clean (); ?>
<?php require('src/public/template/template_forum.php'); ?>