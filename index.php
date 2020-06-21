<?php
if(empty($_COOKIE['id'])){
  $mot=crypt("connexionId");
  $mot=str_shuffle($mot);
setcookie('id',$mot,time()+365*24*3600);
header('Location:index.php');
}
session_start();
$_SESSION['url']="index.php";
header( 'content-type: text/html; charset=utf-8' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="graduate.png" type="image/png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 
    <title>Accueil</title>
</head>
<body>
  <?php
  include('header.html');
  ?>

      <div id="demo" class="carousel slide container" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
          <li data-target="#demo" data-slide-to="3"></li>
          <li data-target="#demo" data-slide-to="4"></li>
        </ul>
        
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img  class="img-fluid" src="presentation.jpg" alt="presentation" width="1100" height="600">
            <div class="carousel-caption">
            </div>   
          </div>
          <div class="carousel-item">
            <img class="img-fluid" src="Crois-que-tu-y-arriveras.jpg" alt="Citation" width="1100" height="600">
            <div class="carousel-caption">
            </div>   
          </div>
          <div class="carousel-item">
            <img class="img-fluid" src="Si-lon-se-donnait.jpg" alt="Citation" width="1100" height="600">
            <div class="carousel-caption">
            </div>   
          </div>
          <div class="carousel-item">
            <img class="img-fluid" src="Ta-vision-du-monde.jpg" alt="Citation" width="1100" height="600">
            <div class="carousel-caption">
            </div>   
          </div>
          <div class="carousel-item">
            <img class="img-fluid" src="Le-succs-est-un-chemin.jpg" alt="Citation" width="1100" height="600">
            <div class="carousel-caption">
            </div>   
          </div>
        </div>

        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      <style>
        @import url('https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap');
        </style>
      <div class="container">
          <section class="row mb-5">
              <article  class="col-md-6">
                 <p class="text-break text-justify m-5">
 Je m’appelle Leonel TAGNE, je suis camerounais,
 j’ai 23 ans. Je poursuis une formation purement technique 
 depuis l’obtention de mon Baccalauréat scientifique. 
Je suis diplômé d’une licence en Télécommunication et 
services informatiques. Cette formation m’a permis 
 de m’ouvrir à une pluralité de domaines professionnalisables.
 Mon choix s'est retourné vers les métiers de l'informatique car, 
 il regorge plein de défis qui correspondent à des besoins particuliers de notre société.
  J'apprécie également l'aspect dynamique des métiers de l'informatique. 
  C'est tout ce package qui fructifie mon amour pour l'informatique.
                  </p>
                  <div class="row ml-2 mr-2">
                      <div class="col-3 mx-auto">
                          <img  class="img-fluid d-block rounded" src="IMG_20190430_124014.jpg" alt="Cameroun">
                      </div>
                      <div class="col-3 mx-auto">
                        <img  class="img-fluid d-block rounded" src="IMG_20190923_094121.jpg" alt="Cameroun">
                    </div>
                    <div class="col-3 mx-auto">
                        <img  class="img-fluid d-block rounded" src="IMG_20200210_144450 (1).jpg" alt="Cameroun">
                    </div>
                  </div>

              </article>
              <style>
                  @import url('https://fonts.googleapis.com/css?family=Bad+Script&display=swap');
                @import url('https://fonts.googleapis.com/css?family=Lobster&display=swap');
                p:first-of-type:first-letter {
  float: left; 
  text-shadow:3px 3px 3px silver;  
  font-size: 4em;  
  line-height: 80%; 
  margin:-.1em 0px;
  padding-right: .1em;

  }
  p{
    font-family: 'Baloo Chettan 2', cursive;
  }
  h2{
    font-family: 'Lobster', cursive;
  }
  .cit{
    font-family: 'Bad Script',cursive;
     font-weight: bold;
  }
  a:hover,#contact:hover{
      font-weight: bold;
      text-decoration: none;
  }
                </style>
             
              <article class="col-md-6 ">
                <h2  class="mt-5 text-center">
                    La musique mon plus grand ami
                </h2>
                <p class="text-break text-justify">
                    D'une manière ou d'une autre, la musique joue une place
                    très importante dans nos vies. Pour moi encore je suis 
                    de ceux qui associent des musiques à des souvenirs ou à des 
                    personnes. Alors je peux éprouver des sentiments divers par 
                    rapport à une musique, ça peut bien être de la nostalgie comme 
                    de l'encouragement ou de la déception. Cet art m'accompagne 
                    partout où je suis et réuissi sans aucun souci à franchir les 
                    générations.
                </p>
                <h2 class="text-center">Une belle découverte</h2>
                <p>
                    Je tire mon chapeau aux hommes de lettres,
                    le plus dommage c'est le fait que je me sois y mis 
                    aussi tard. Mon premier coup de coeur littéraire fut un 
                    livre de Jack London dont le titre était 
                    <span class="cit">"
                     Le bureau des assassinats"</span>, cette oeuvre est 
                     d'une telle originalité, je la recommande à tout les
                     amateurs de livres. 
                </p>
                Un autre auteur qui m'a vraiment marqué c'est Antoine Lorain c'est par son style de roman, 
                l'originalité de ses histoires et cet accrochage qu'il nous 
                fait avoir pour ses personnages qu'il m'a fait lire plusieurs de ces oeuvres
                les plus mémorables pour moi sont  <span class="cit"> "La femme au carnet rouge"</span> ,
                 <span class="cit">"le chapeau de Mitterand"</span>, <span class="cit"> "Millésime 54" </span>
              </article>

              </section>

<?php
include("commentaire.php");
  try{
    $bd=new PDO('mysql:host=db5000332585.hosting-data.io; dbname=dbs323922; charset=utf8','dbu435793','Damartiste1-');
  }catch(Exception $e){
    echo "impossible";
  }
  $req=$bd->query("select * from commentaires order by date desc");
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