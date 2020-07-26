<?php $title = 'nouveau topic'; ?>
<?php  ob_start (); ?>

         <div class="container mt-6">
            <form class="fntopic" method="POST">
               <table class="ntopic-forum">
                  <tr class="header">
                     <th colspan="2">Nouveau Topic</th>
                  </tr>
                  <tr>
                     <td>Sujet</td>
                     <td><input type="text" name="tsujet" size="70" maxlength="70" /></td>
                  </tr>                  
                  <tr>
                     <td>Choisir une catégorie</td>
                     <td>
                        <select name="categories" id="categories">
                           <option value="01">01 - Santé</option>
                           <option value="02">02 - Réchauffement Climatique</option>
                           <option value="03">03 - Activité Humaine</option>
                           <option value="04">04 - Spiritualité/Astrologie</option>
                           <option value="05">05 - Brouillon</option>
                        </select>
                     </td>
                  </tr>                  
                  <tr>
                     <td class="s-cat">Sous-catégorie</td>
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
                     <td>Message</td>
                     <td><textarea name="tcontenu"></textarea></td>
                  </tr>                  
                  <tr>
                     <td>Me notifier des réponses par mail</td>
                     <td><input type="checkbox" name="tmail" /></td>
                  </tr>                  
                  <tr>
                     <td colspan="2"><input class="btn-primary" type="submit" name="tsubmit" value="Poster le Topic" /></td>
                  </tr>
                     <?php if(isset($terror)) { ?>
                  <tr>
                     <td colspan="2"><?= $terror ?></td>
                  </tr>
                     <?php } ?>
               </table>
            </form>
         </div>

<?php  $content = ob_get_clean (); ?>
<?php require('src/public/template/template_forum.php'); ?>