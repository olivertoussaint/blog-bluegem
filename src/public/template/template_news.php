<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content=" BlueGem est un forum pour toutes celles et ceux qui s'interrogent sur les bouleversements que subit notre planète." />
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
    <!-- Leaftlet CSS -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" -->
    <!-- integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" /> -->
    <!-- Load Esri Leaflet from CDN -->
    <!-- <script src="https://unpkg.com/esri-leaflet@2.4.1/dist/esri-leaflet.js"
    integrity="sha512-xY2smLIHKirD03vHKDJ2u4pqeHA7OQZZ27EjtqmuhDguxiUvdsOuXMwkg16PQrm9cgTmXtoxA6kwr8KBy3cdcw=="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css" /> -->
    <link rel="stylesheet" type="text/css "href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.10/css/weather-icons.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="./src/public/assets/css/style.css" />
    

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
    <!-- Leaflet JS-->
    <!-- <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
    <script type='text/javascript' src='https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js'></script> -->
    <!-- Include Leaflet.heat from CDN -->
    <!-- <script src="https://unpkg.com/leaflet.heat@0.2.0/dist/leaflet-heat.js"></script> -->
    <!-- Load Heatmap Feature Layer from CDN -->
    <!-- <script src="https://unpkg.com/esri-leaflet-heatmap@2.0.0"></script> -->
    <!-- <script type='text/javascript' src="https://cdn.jsdelivr.net/npm/weacast-leaflet-velocity@1.1.0/dist/leaflet-velocity.min.js"></script> -->
    <!-- Javascript -->
    <!-- <script type="text/javascript" src="./src/public/assets/js/d3.js"></script> -->
    <script type="text/javascript" src="./src/public/assets/js/main.js"></script>
    <!-- <script type="text/javascript" src="./src/public/assets/js/api.js"></script> -->
    <script type="text/javascript" src="./src/public/assets/js/form.js"></script>  
    <script type="text/javascript" src="./src/public/assets/js/profile.js"></script>
</body>
</html>