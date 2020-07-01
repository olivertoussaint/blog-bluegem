<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="canonical" href="http://projet5.oliviertoussaint.fr">
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://projet5.oliviertoussaint.fr/" />
    <meta property="og:site_name" content="BlueGem" />
    <meta name="twitter:card" content="summary_large_image" />
    <link rel="shortcut icon" href="./src/public/assets/ico/favicon.ico" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="./src/public/assets/css/admin.css" />

    <title><?= $title ?></title>
</head>

<body>
    
    <div>
        <?= $content ?>
    </div>

    <script src="https://cdn.tiny.cloud/1/29tcjb47ugs7xjyvau6j590n4yu4q829j2ufy198cmsnmte8/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript" src="./src/public/assets/js/init-tinymce.js"></script>
    <script type="text/javascript" src="./src/public/assets/js/langs/fr_FR.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
    <!-- Javascript -->
    <script type="text/javascript" src="./src/public/assets/js/admin.js"></script> 
</body>
</html>