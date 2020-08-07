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

               <div class="container custom-backGd my-5 py-4 shadow-lg shadow-border">
                  <form class="fntopic" method="POST" action= "index.php?action=newTopic">
                     <table class="ntopic-forum">
                        <tr>
                           <td><span class="z-depth-3 nwt">Sujet</span></td>
                           <td><input class="z-depth-3 pdg" type="text" name="tsujet" size="70" maxlength="70" /></td>
                        </tr>
                        <tr>
                           <td>
                              <span class="z-depth-3 nwt">Choisir une catégorie</span>
                           </td>
                           <td>
                              <select name="categories" id="categories">
                                 <option value="01">01 - Réchauffement climatique</option>
                                 <option value="02">02 - Activité humaine</option>
                                 <option value="03">03 - Spiritualité/Astrologie</option>
                                 <option value="04">04 - Autres sujets</option>
                              </select>
                           </td>
                        </tr>
                        <tr>
                           <td class="s-cat">
                              <span class="z-depth-3 nwt">Sous-catégorie</span>
                           </td>
                           <td>
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
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <span class="z-depth-3 nwt">Message</span>
                           </td>
                           <td>
                              <textarea class="form-control  z-depth-3" name="tcontenu" placeholder="&Eacute;crivez quelque chose ici..."></textarea>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <span class="z-depth-3 nwt">notifier des réponses par mail</span>
                           </td>
                           <td>
                              <input type="checkbox" name="tmail" />
                           </td>
                        </tr>
                        <tr>
                           <td colspan="2">
                              <input class="btn aqua-gradient z-depth-3" type="submit" name="tsubmit" value="Poster le Topic" />
                           </td>
                        </tr>

                     <?php if(isset($terror)) { ?>
                        <tr>
                           <td colspan="2">
                              <span class="font-weight-bold deep-purple-text blue-grey lighten-4 z-depth-5 px-3 py-3">
                                 <span class="z-depth-2 nwt"><?= $terror ?></span>
                              </span>
                           </td>
                        </tr>
                     <?php } ?>
                  </table>
               </form>
            </div>
         </div>
      </div>

<?php  $content = ob_get_clean (); ?>
<?php require('src/public/template/template_forum.php'); ?>