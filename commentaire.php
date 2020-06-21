<div class= "border border-bottom-0 border-left-0 border-right-0 pl-3 pr-3 ml-5 mr-5  mx-auto mt-4" id="com">
    <form id="insertion" action="insertion.php" method="post" class="m-5">
          <div class="form-group">
          <label for="message">Laisser un commentaire:</label>
         <textarea name="message" class="form-control" id="message" cols="60" rows="10"></textarea>
       </div>
       <div class="form-group">
     <label for="email">Adresse mail:</label>
     <input type="email" class="form-control" value="<?php if(isset($_COOKIE['mail'])) {echo $_COOKIE['mail'];}?>" name= "email" placeholder="Entrer votre adresse email" id="email">
     </div>
     <div class="form-group">
     <label for="nom">Votre Nom:</label>
     <input type="text" class="form-control" value="<?php if(isset($_COOKIE['nom'])){echo $_COOKIE['nom'];}?>" name= "nom" placeholder="Entrer votre nom " id="nom">
     </div>
     <div class="form-group">
        <label for="fonction">Fonction: </label>
        <input type="text" class="form-control" value = "<?php if(isset($_COOKIE['fonction'])){echo $_COOKIE['fonction'];}?>" name= "fonction" placeholder="Votre Fonction (non obligatoire)" id="fonction">
        </div>
       <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
      <div class="text-break ml-5 mr-5">
      <h3 class="text-center" id="commentaires">Commentaires</h3>
      </div>
</div>