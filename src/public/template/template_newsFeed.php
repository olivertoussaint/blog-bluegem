<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content=" BlueGem est un forum pour toutes celles et ceux qui s'interrogent sur les bouleversements que subit notre planète." />
    <link rel="shortcut icon" href="./src/public/assets/ico/favicon.ico" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="./src/public/assets/css/admin.css" />
    <!-- Ckeditor -->
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <!-- Ckfinder -->
    <script type="text/javascript" src="./appli/ckfinder/ckfinder.js"></script>
    <title><?= $title ?></title>
</head>

<body>
<?php require('src/public/layout/navHeader.php'); ?>

    <div>
        <?= $content ?>
    </div>

<?php require('src/public/layout/footer.php'); ?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
    <script type="text/javascript" src="./src/public/assets/js/admin.js"></script>
    <script type="text/javascript" src="./src/public/assets/js/ckeditor.js"></script> 
      
</body>
</html>