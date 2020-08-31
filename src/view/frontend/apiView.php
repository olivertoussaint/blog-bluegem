<?php $title = 'La m&eacute;t&eacute;o';?>
<?php  ob_start (); ?>

<div class="container mt-6 mb-3">
<div class="row justify-content-center">
        <div class="col-2 col-sm-3 my-3">        
            <form action="">
                <div class="form-group">
                    <input type="text" placeholder="entrez le nom d'une ville" class="form-control" id="inputCity" required />
                </div>
                <button type="submit" class="btn aqua-gradient">Rechercher</button>
            </form>
            <div class="container text-center white-text">
            <button title="actualiser" onclick="window.location.reload();" class="btn btn-flat btn-lg refresh"><i class="fas fa-redo-alt"></i></buttontitle=onclick=>
            </div>
        </div>

        <div class="col-10 col-sm-9 d-flex justify-content-center my-3">           
            <div class="box-container">
                <div id="icon" class="box"></div>
                <div id="description" class="text-center box"></div>
                <div id="city" class="text-center box"></div>
                <div id="temp" class="box"></div>
                <div id="humidity" class="box"></div>
                <div id="wind" class="box"></div>
                <div id="sunset" class="box"></div>
                <div id="sunrise" class="text-right box"></div>
                <div id="pressure" class="box"></div> 
                 
            </div>
                
        </div>
        
        <div class="col-12 d-flex justify-content-center">
            <p class="white-text text-center z-depth-3 py-3 px-3"><span id="current_time"></span></p>
        </div>
    </div>
</div>

<?php  $content = ob_get_clean (); ?>
<?php require('src/public/template/template_api.php'); ?> 