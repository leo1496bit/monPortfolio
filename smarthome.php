<?php
session_start();
$_SESSION['url']="smarthome.php";
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
  <title>SmartHome</title>
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
    <h2 class="text-center m-4 border bg-secondary p-3">Réalisation d'un concept SmartHome pour l'économie d'énergie</h2>
    <div class="clearfix">
<a href="tutorat.php" class="float-left"><button class="btn btn-secondary">précédent</button></a>
</div>
    <h3 class="text-center border border-right-0 border-left-0 m-2">Objectif</h3>
    <p class="tex-break">Mettre sur pied un montage domestique qui permettra de faire 
        des économies de consommation d'énergie.
    </p>
    <h3 class="text-center border border-right-0 border-left-0">Outils</h3>

    <p class="mt-5">Langage : <span class="font-weight-bold">Arduino</span></p>
    <p>Bibliothèque : <span class="font-weight-bold">SLICK 2D</span></p>
    <p>Logiciel : <span class="font-weight-bold">Proteus</span></p>
    <h3 class="text-center border border-right-0 border-left-0">Conception</h3>
    <h4>Montage</h4>
    <div>
        <img src="smart1.png" class="img-fluid" alt="diagramme de classe de tetris">
    </div>
    <h3 class="text-center border border-right-0 border-left-0 mt-5">Résultats</h3>
    <div class="text-center">
        <video src="video1.mp4"  width="400"  controls>Votre navigateur ne supporte pas cette vidéo</video>
    </div>
<h3 class="text-center border border-right-0 border-left-0 mt-5">Difficultés</h3>
<p class="text-break">Le problème que j'ai rencontré lors de la réalisation de ce projet, était la 
    difficulté de la maitrise des composantes électroniques.
    De même le microcontroleur a des entrées continues ou alternatives, ainsi la 
    configuration selon ces types d'entrées est différente et apporte une difficulté supplémentaire
</p>
<div class="clearfix">
<a href="tutorat.php" class="float-left"><button class="btn btn-secondary">précédent</button></a>
</div>
</section>
            <?php
            include("commentaire.php");
              try{
                $bd=new PDO('mysql:host=db5000332585.hosting-data.io; dbname=dbs323922; charset=utf8','dbu435793','Damartiste1-');
              }catch(Exception $e){
                echo "impossible";
              }
              $req=$bd->query("select * from smarthome order by date desc");
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