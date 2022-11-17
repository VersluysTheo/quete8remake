<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="icon" href="img/sea.png">
</head>
<body>
<div class="jumbotron">
  <h1 class="display-4">PHP Procédural</h1>
  <hr class="my-4">
  <p>Chaque difficulté rencontrée doit être l'occasion d'un nouveau progrès.</p>
</div>
<div class="container">
    <div class="row">
    <div class="col-4">
    <a href="index.php?home"><button type="button" class="btn btn-info">Home</button></a>
    </div>
    <div class="col-8">
    <a href="index.php?form"><button type="button" class="btn btn-info">Ajouter des Données</button></a>
    </div>
    </div>
</div>
<?php echo $content ; ?>
    
<footer><p class="text-center"> © Nyugga 2022 </p></footer>
</body>
</html>