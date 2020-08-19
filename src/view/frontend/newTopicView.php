<?php $title = 'nouveau topic'; ?>
<?php  ob_start (); ?>
      <div class="container mt-6">
         <div class="container white my-4 py-4 shadow-lg shadow-border ">
            <div class="mt-3 mb-3">
               <a href="index.php?action=forum" title="retour au forum" class="btn-floating btn-lg aqua-gradient">
                  <i class="fas fa-arrow-left"></i>
               </a>
               <h1 class="f-title">Nouveau topic</h1>
            </div>
            
            <div class="card mt-3 mb-3">
               <form class="fntopic" method="POST" action= "index.php?action=newTopic">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="col-lg-10 py-3">
                              <div class="col-6">
                                 <label for="tsubject"><span class="z-depth-3 rounded nwt">Sujet</span></label>
                                 <p class="z-depth-3"><input class="control-form" type="text" name="tsubject" /></p>
                              </div>
                              
                              <div class="form-group">
                                 <label for="category"><span class="z-depth-3 rounded nwt">Cat&eacute;gorie</span></label>
                                 <select name="categories" id="categories">
                                    <option value="00">Choisissez une cat&eacute;gorie</option>
                                    <option value="01">01 - Réchauffement climatique</option>
                                    <option value="02">02 - Activité humaine</option>
                                    <option value="03">03 - Spiritualité/Astrologie</option>
                                    <option value="04">04 - Autres sujets</option>
                                 </select>
                              </div>
                              
                              <div class="form-group">
                                 <label for="subCategory"><span class="z-depth-3 rounded nwt">
                                 Sous-cat&eacute;gorie</span></label> 
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
                                 <label for="tmessage"><span class="z-depth-3 rounded nwt">Message</span></label>
                                 <textarea class="form-control z-depth-3" name="tmessage" placeholder="&Eacute;crivez votre topic ici..."></textarea>
                              </div>
                              
                              <div class="col-6">
                                 <div class="form-group">
                                    <div class="col-sm-6">Notification par mail&nbsp;
                                       <input type="checkbox" name="tmail" />
                                    </div>
                                 </div>
                              </div>
                              
                              <div class="form-group">
                                 <input class="btn aqua-gradient z-depth-3" type="submit" name="tsubmit" value="Poster le Topic" />
                              </div>
                              
                     <?php if(isset($_SESSION) && empty($_SESSION)) { ?>
                                 <div class="form-group">
                                    <span class="font-weight-bold deep-purple-text blue-grey lighten-4 z-depth-5 px-3 py-3">
                                       <span class="z-depth-2 resize-error">Vous devez être connecté pour pouvoir poster un topic.</span>
                                    </span>
                                 </div>
                     <?php } ?>                     
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>

<?php  $content = ob_get_clean (); ?>
<?php require('src/public/template/template_forum.php'); ?>