<?php
session_start();
$_SESSION['url']="tetris.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="graduate.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <title>Tetris</title>
</head>
<body>
<?php
    include('header.html');
    ?>
<style>
@import url('https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap');
h2{
  font-family: 'Libre Baskerville', serif;
  font-size:1.4em;
  font-weight:bold;
  color:black;
}
@import url('https://fonts.googleapis.com/css?family=Vidaloka&display=swap');
h3{
  font-family: 'Vidaloka', serif;
}
@import url('https://fonts.googleapis.com/css?family=Noto+Serif+SC&display=swap');
p{
    font-family: 'Baloo Chettan 2', cursive;
  }
  h4{
    font-family: 'Noto Serif SC', serif;
    text-decoration:underline;
  }
  @import url('https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap');
</style>
<section class="container">
    <h2 class="text-center m-4 border bg-secondary p-3">Jeux Tetris</h2>
    <div class="clearfix">

    <a href="demineur.php" class="float-right"><button class="btn btn-secondary">suivant</button></a>
</div>
    <h3 class="text-center border border-right-0 border-left-0 m-2">Objectif</h3>
    
    <p class="tex-break">Réaliser le jeux Tetris en graphique, en utilisant plusieurs types de formes que 
        l'on pourra déplacer de gauche à droite et on pourra faire pivoter ces formes afin qu'elles s'emboitent comme l'on 
    le désire, une fois qu'une ligne est pleine elle disparait.</p>
    <p>L'objectif du jeu est ainsi de faire le plus grand score.</p>
    <h3 class="text-center border border-right-0 border-left-0">Outils</h3>

    <p class="mt-5">Langage : <span class="font-weight-bold">JAVA</span></p>
    <p>Bibliothèque : <span class="font-weight-bold">SLICK 2D</span></p>
    <p>Logiciel : <span class="font-weight-bold">Eclipse</span></p>
    <h3 class="text-center border border-right-0 border-left-0">Conception</h3>
    <h4>Diagramme de Classes</h4>
    <div>
        <img src="tetris1.png" class="img-fluid" alt="diagramme de classe de tetris">
    </div>
    <h4>Diagramme d'états-transitions</h4>
    <div>
        <img src="tetris2.png"  class="img-fluid" alt="diagramme d'états-transitions de tetris">
    </div>
    <h3 class="text-center border border-right-0 border-left-0">Résultats</h3>
    <div id="demo" class="carousel slide container" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="tetr1.png" class="img-fluid" alt="Los Angeles" width="1100" height="600">
    </div>
    <div class="carousel-item">
      <img src="tetr2.png" class="img-fluid" alt="Chicago" width="1100" height="600">
    </div>
    <div class="carousel-item">
      <img src="tetr3.png" class="img-fluid" alt="New York" width="1100" height="600">
    </div>
    <div class="carousel-item">
      <img src="tetr4.png" class="img-fluid" alt="New York" width="1100" height="600">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<h3 class="text-center border border-right-0 border-left-0">Difficultés</h3>
<p class="text-break">Lors du dévoloppement j'ai rencontré des difficultés pour la mise en place de certaines fonctionnalités 
    telles la rotation des formes, car ceux-ci nécessitaient une analyse mathématique qu'il fallait mener avec
    précaution et concentration
</p>
<div class="clearfix">

    <a href="demineur.php" class="float-right"><button class="btn btn-secondary">suivant</button></a>
</div>
</section>
            <?php
            include("commentaire.php");
              try{
                $bd=new PDO('mysql:host=db5000332585.hosting-data.io; dbname=dbs323922; charset=utf8','dbu435793','Damartiste1-');
              }catch(Exception $e){
                echo "impossible";
              }
              $req=$bd->query("select * from tetris order by date desc");
              $data=$req->fetchAll();
              if($data!=false){
              foreach ($data as $value) {
                
            ?>
            
      <?php
      include("commentaire2.php");
              }
            }
      ?>
      <?php
include('footer.html');

?>
<script src="insertion.js"></script>       
</body>
</html>