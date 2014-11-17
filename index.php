<?php
require_once ("autoload.inc.php");
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<?php
/************* Test Inventaire ***************/

/***** Initialisation des classes inventaire *****/
$UnConsommable = new Consommable ("Consommable","Potion de soin", 15);
//$UnConsommable->AfficherType();

$UneArme = new Arme ("Arme", "Epée", 25);
//$UneArme->AfficherType();

$UneArmure = new Defense ("Defense", "Plastron", 20);
//$UneArmure->AfficherType();

$unInventaire = new Inventaire(40);
$sac = $unInventaire;

/***** MAIN Inventaire *****/
//echo "<br/><b>L'inventaire vide</b><br/>";
//$sac->toString();
//echo "<br/><b>Ajout des items dans l'inventaire</b><br/>";

echo "<div id=\"container_info\"><h3>Informations</h3>";
	$sac->PrendreItem($UnConsommable); 
	$sac->PrendreItem($UneArme);
	$sac->PrendreItem($UneArmure);
echo "</div>";

/*echo "<br/><b>Affichage de l'inventaire</b><br/>";
$sac->toString();
echo "<br/><b>Suppression de la potion</b><br/>";
$sac->SupprimerItem($UnConsommable);
$sac->SupprimerItem($UneArme);
$sac->SupprimerItem($UneArmure);
$sac->toString();*/

/************* Test Personnage ***************/

/***** Initialisation des classes personnage *****/
$monPerso = new Perso ("Jean-Mi Jr", 20, 19, 18, 17, 16, 15);
$Loup = new Ennemi ("Loup", 14, 13, 12, 11, 10, 9, 8);
$Ours = new Ennemi ("Ours", 7, 6, 5, 4, 3, 2, 1);

/***** MAIN Personnage *****/
?>
<div id="container_perso">
	<div id="info_perso"> <?php $monPerso->toString(); ?> </div>
	<div id="info_inventaire"> <?php $sac->toString(); ?> </div>
</div>
<div class="clear"></div>
<div id="container_ennemi">
	<div id="info_loup"> <?php $Loup->toString(); ?> </div>
	<div id="info_ours"> <?php $Ours->toString(); ?> </div>
</div>
<div class="clear"></div>

</body>