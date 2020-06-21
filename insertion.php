<?php
 if(isset($_POST['message']) && isset($_POST['email'])){
    $mess=$_POST['message'];
    $mail=$_POST['email'];
    $nom=$_POST['nom'];
    $fonction="Aucune précision";
    if(!empty($_POST['fonction'])){
        $fonction=$_POST['fonction'];
      }
    
  $temps=365*24*3600;
                setcookie('nom',$nom,time()+$temps);
                setcookie('mail',$mail,time()+$temps);
                setcookie('fonction',$fonction,time()+$temps);
  
session_start();
           

              try{
                $bd=new PDO('mysql:host=db5000332585.hosting-data.io; dbname=dbs323922; charset=utf8','dbu435793','Damartiste1-');
              }catch(Exception $e){
                echo "impossible";
              }
             if($_SESSION['url']=="index.php"){
              $pre=$bd->prepare("insert into commentaires(pseudo,message,date,nom,fonction) values(:pseudo , :message, now(),:nom,:fonction)");
             }
             elseif($_SESSION['url']=="demineur.php"){
                $pre=$bd->prepare("insert into demineur(pseudo,message,date,nom,fonction) values(:pseudo , :message, now(),:nom,:fonction)");
             }
             elseif($_SESSION['url']=="paint.php"){
                $pre=$bd->prepare("insert into paint(pseudo,message,date,nom,fonction) values(:pseudo , :message, now(),:nom,:fonction)");
             }
             elseif($_SESSION['url']=="smarthome.php"){
                $pre=$bd->prepare("insert into smarthome(pseudo,message,date,nom,fonction) values(:pseudo , :message, now(),:nom,:fonction)");
             }
             elseif($_SESSION['url']=="tetris.php"){
                $pre=$bd->prepare("insert into tetris(pseudo,message,date,nom,fonction) values(:pseudo , :message, now(),:nom,:fonction)");
             }
             elseif($_SESSION['url']=="tutorat.php"){
                $pre=$bd->prepare("insert into tutorat(pseudo,message,date,nom,fonction) values(:pseudo , :message, now(),:nom,:fonction)");
             }
                $pre->bindParam(':pseudo',$mail);
                $pre->bindParam(':message',$mess);
                $pre->bindParam(':nom',$nom);
                $pre->bindParam(':fonction',$fonction);
                $pre->execute();
                $pre=$bd->query("select * from commentaires 
                union select * from demineur 
                union select * from paint 
                union select * from tetris
                union select * from smarthome
                union select * from tutorat
                order by date desc");
                $donne=$pre->fetchAll();
                $date=$donne[0]['date'];
                
                echo "<div class=\"container\" id=\"".$_COOKIE['id']."\"><div class=\"media border p-2\">
                <img src=\"unknow.jpg\" alt=\"\" class=\"mr-3 mt-3 rounded-circle\" style=\"width:60px;\">
                <div class=\"media-body\">
                  <h4 style=\"text-decoration:none\">$nom &emsp; <small><i style=\"font-size:0.8em\">publié le $date</i></small></h4>
                  <div style=\"font-style:italic;font-weight:bold; text-decoration:underline;\">$fonction</div>
                  <div>$mess</div>
                  <div class=\"mt-1\">Contact : $mail</div>
                 </div>
              </div>
              </div>";
            }
            else{
                echo "pas de donnes";
            }
            ?>