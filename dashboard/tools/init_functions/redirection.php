<?php

session_start();

require_once 'init.php';

function redirection($title, $pageContain, $currentPage, $currentSubPage, $css, $js){
    //$title : titre de la page
    //$pageContain : contenu de la page
    //$currentPage : nom de la page courante
    //$currentSubPage : nom de la sous page courante
    //$css et $js : finchiers css et js de la page
  ?>
 
  <?php
  include(_APP_PATH."dashboard/pages/included/header/head.php");
  ?>

  <title><?php echo $title; ?></title>

  <link rel="stylesheet" href="<?php echo $css; ?>"/>
  <link rel="stylesheet" href="css/responsive.css"/>

</head>
<body>
  <?php include(_APP_PATH."dashboard/pages/included/header/header.php"); // En tête ?>
  <?php include(_APP_PATH.'tools/init_functions/functions.php'); // Importation des fonctions globales ?>
  <?php include(_APP_PATH.'tools/init_functions/import-class.php'); // Importation des squelletes d'instanciation ?>
  <?php include($pageContain); // Contenu ?>
</div>

<?php include(_APP_PATH."dashboard/pages/included/footer/footer.php"); // Pied de page ?>

<script src="<?php echo $js; ?>"></script>

<?php } ?>
