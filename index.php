<?php

require_once ("/autoload.inc.php");

$monPerso = new Perso ("Jean-Mi Jr", 20, 19, 18, 17, 16, 15);

$Loup = new Ennemi ("Loup", 14, 13, 12, 11, 10, 9, 8);
$Ours = new Ennemi ("Ours", 7, 6, 5, 4, 3, 2, 1);
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="style/styles.css">
  </head>
  <body>
    <h1>Bienvenue sur RPHPG suceur de teubs</h1>
    <div id="container_perso">
    	<div id="info_perso"> <?php $monPerso->toString(); ?> </div>
    	<div id="info_inventaire"> infos inventaire </div>
   </div>
   <div class="clear"></div>
   <div id="container_ennemi">
    	<div id="info_loup"> <?php $Loup->toString(); ?> </div>
    	<div id="info_ours"> <?php $Ours->toString(); ?> </div>
    </div>
    <div class="clear"></div>
  </body>
</html>