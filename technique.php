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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Connaissances techniques</title>
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
</style>
<div class="container">
  <h2 class="m-5 text-center">Connaissances techniques</h2>
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          <h3>Programmation</h3>
        </a>
      </div>
      <div id="collapseOne" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <ul>
            <li><dl>
              <dt> JAVA</dt>
            
            <dd>
              <dl>
                <dt>Notions de base et avancées</dt>
                <dd><ul>
                  <li>Concepts de POO(héritage, polymorphisme, porté, classe statique...)</li>
                  <li>Gestion d'exceptions</li>
                  <li>Manipulation de fichiers</li>
                  <li>Connexion aux bases de données</li>
                </ul></dd>
                <dt>Swing</dt>
                <dd>Cette bibliothèque Java nous permet la conception de composantes graphiques. J'ai une bonne maitrise de 
                  cet outils qui me permets d'entreprendre des projets en l'utilisant.
                </dd>
                <dt>SLICK 2D</dt>
                <dd>
                  Cette composante graphique permet de faciliter les animations. Elle 
                  possède de nombreux outils préfabriqués qui rend le développement des jeux 
                  plus facile. J'ai une bonne prise en main de cette bibliothèque qui me permet d'entreprendre des projets d'une grande envergure.
                </dd>
                <dt>JAVA FX</dt>
                <dd>Une bonne maitrise de cet outils donne de nombreuses possibilités de développement graphique </dd>
              </dl>
            </dd>
            </dl>
            </li>
            <li>
              <dl>
                <dt>Langage C </dt>
                <dd>
                  <ul>
                    <li>Notion de base</li>
                    <li>Manipulation de fichiers</li>
                    <li>Files et piles</li>
                  </ul>
                </dd>
              </dl>

            </li> 
            <li>
              <dl>
                <dt>Linux </dt>
                <dd>
                  <ul>
                    <li>Notion de base</li>
                    <li>Programmation SHELL</li>
                    <li>installation et configuration des services (DHCP, DNS, Serveur Web, MySql, etc...)</li>
                  </ul>
                </dd>
              </dl>

            </li> 
            <li>
              <dl>
                <dt>Powershell</dt>
                <dd>
                  <ul>
                    <li>Notion de base</li>
                    <li>Gestion des processus</li>
                  </ul>
                </dd>
              </dl>

            </li> 
          </ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        <h3> Web</h3>
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <ul>
          <li>
              <dl>
                <dt>HTML / CSS</dt>
                <dd>
                  <ul>
                    <li>Notions de base et avancées html5 et CSS</li>
                    <li>Bonne prise en main des dernières API</li>
                    <li>Bonne prise en main de la bibliothèque CSS <span class="font-weight-bold"> Bootstrap </span></li>
                  </ul>
                </dd>
              </dl>

            </li> 
            <li>
              <dl>
                <dt>JAVASCRIPT</dt>
                <dd>
                  <ul>
                    <li>Notions de base et avancées (POO) </li>
                    <li>Bonne prise en main des dernières API</li>
                    <li class="font-weight-bold">AJAX</li>
                    <li>Utilisation aisée de la bibliothèque <span class="font-weight-bold">JQUERY </span>qui permet de faciliter le JAVASCRIPT
                      et d'adapter son code sur tout les navigateurs
                    </li>

                  </ul>
                </dd>
              </dl>

            </li> 
            <li>
              <dl>
                <dt>PHP</dt>
                <dd>
                  <ul>
                    <li>Notions de base et avancées (POO) </li>
                    <li>Utilisation des API courantes de PHP </li>
                    <li>Interaction avec la BDD </li>
                    <li>Réaliser de site Web Asynchrone</li>
                  </ul>
                </dd>
              </dl>

            </li> 
            <li>
              <dl>
                <dt>API REST</dt>
                <dd>
                 Communication avec des serveurs pour pourvoir utiliser certaines ressources.
                </dd>
              </dl>

            </li> 
          </ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
          <h3>Programmation électronique</h3>
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <ul>
          <li>
              <dl>
                <dt>Arduino</dt>
                <dd>
                  <ul>
                  <li>Prise en main de l'outil.</li>
                  <li>Maitrise des notions de base.</li>
                  </ul>
                  
                </dd>
              </dl>

            </li> 
            <li>
              <dl>
                <dt>MicroC</dt>
                <dd>
                  <ul>
                  <li>Prise en main de l'outil. </li>
                  <li>Avec une syntaxe proche du language C, la maitrise des notions de base est assez aisée.</li>
                  </ul>
                  
                </dd>
              </dl>

            </li> 
          </ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
        <h3>Gestion</h3>
      </a>
      </div>
      <div id="collapseSix" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <ul>
          <li>
              <dl>
                <dt>Git</dt>
                <dd>
                  Très important pour la gestion de versions lorsqu'on travaille en équipe             
                </dd>
              </dl>

            </li> 
            <li>
              <dl>
                <dt>GitHub</dt>
                <dd>
                  Permet essentiellement l'hebergement de son code.            
                </dd>
              </dl>

            </li> 
            <li>
              <dl>
                <dt>Méthodes agiles</dt>
                <dd>
                  Pour un bon pilotage de projet et une bonne organisation des taches.            
                </dd>
              </dl>

            </li> 
          </ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
        <h3>Analyse et modélisation</h3>
      </a>
      </div>
      <div id="collapseFour" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <dl>
            <dt>UML</dt>
            <dd>
              <ul>
                <li>
                  <dl>
                    <dt>Diagramme de cas d'Utilisations</dt>
                    <dd>Permet une analyse des besoins avant le processus de conception
                    </dd>
                  </dl>
                </li>
                <li>
                  <dl>
                    <dt>Diagramme de classes </dt>
                    <dd>Pour une phase de développement, ce diagramme permet de 
                      construire un plan de développement.
                    </dd>
                  </dl>
                </li>
                <li>
                  <dl>
                    <dt>Diagramme de séquences</dt>
                    <dd>Permet une description de l'utilisation des objets</dd>
                                    </dl>
                </li>
                <li>
                  <dl>
                    <dt>Diagramme d'activités</dt>
                    <dd>Permet de représenter le comportement d'une méthode ou d'un cas d'utilisation</dd>
                  </dl>
                </li>
                <li>
                  <dl>
                    <dt>Diagramme d'états-transitions</dt>
                    <dd>
                      Permet de décrire le comportement ou le changement d'état des éléments
                    </dd>
                  </dl>
                   </li>
              </ul>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
        <h3>SGBD</h3>
      </a>
      </div>
      <div id="collapseFive" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <dl>
            <dt>
              <ul>
                <li>MYSQL</li>
                <li>Postgresql</li>
              </ul>
            </dt>
            <dd>
              <ul>
                <li>Prise en main de base des SGBD </li>
                <li>Opération SCRUD sur les SGBD</li>
                <li>Notion de sécurités des données (transaction, verrous, procédures stockées, triggers, vue, etc...)</li>
              </ul>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseSept">
        <h3>Télécommunications</h3>
      </a>
      </div>
      <div id="collapseSept" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <dl>
            <dt>
              Installation fibre optique
            </dt>
            <dd>
              <ul>
                <li>Etude de bilan de liaison </li>
                <li>Soudure optique</li>
                <li>Raccordement fibre optique</li>
              </ul>
            </dd>
            <dt>Optimisation réseaux mobiles</dt>
            <dd>
              <ul>
                <li>Etude paramètres antennes</li>
                <li>Plannification des réseaux</li>
              </ul>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseHuit">
        <h3>Réseaux informatique</h3>
      </a>
      </div>
      <div id="collapseHuit" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <dl>
            <dt>
              Installation des services
            </dt>
            <dd>
              <ul>
                <li>Prise en main windows server 2016</li>
                <li>Configurations matériels réseaux sur Packet tracer et GNS3</li>
                <li>Configuration de routeurs Mikrotik</li>
              </ul>
            </dd>
          </dl>
        </div>
      </div>
    </div>

  </div>
</div>
    
  
  <?php
include('footer.html');
?>          

</body>
</html>