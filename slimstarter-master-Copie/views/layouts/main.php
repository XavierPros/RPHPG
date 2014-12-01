<!-- ///////////////////////////////////////////////////////////// CODE DU PROF   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          
          <div class="page-header">
            <h1>RPHPG <small>Viens, on est bien</small></h1>
          </div>
          <?php 
            // my view content will be placed here
            //echo $yield 
          ?>
        </div>
      </div>
    </div>
  </body>
</html>

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!DOCTYPE html>
<html>
<head>
  <title>RPHPG - Le RPG version PHP</title>
  <meta charset="utf-8" type="text/html"/>
  <meta name="decription" content="RPHPG est un rpg créer par des fans pour des fans. Venez vous aussi vivre cette expérience et évoluer avec d'autres fans pour faire un rpg satisfasant tous les joueurs."/>
  <link rel="stylesheet" type="text/css" href="views/layouts/design.css"/>
</head>
<body>
  <div class="largeur">
    <div class="page">

          <?php 
            // my view content will be placed here
            echo $yield 
          ?>
     
    </div>
  </div>
</body>
</html>