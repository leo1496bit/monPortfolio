<div class="container"  id="<?php echo $_COOKIE['id'];?>">
<div class="media border p-2 ">
        <img src="unknow.jpg" alt="" class="mr-3 mt-3 rounded-circle" style="width:60px;">
        <div class="media-body">
          <h4 style="text-decoration:none"><?php echo $value['nom'];?> &emsp; <small><i style="font-size:0.8em">publié le <?php echo $value['date'];?></i></small></h4>
         <div style="font-style:italic;font-weight:bold; text-decoration:underline;"><?php echo $value['fonction'];?></div>
          <div><?php echo $value['message'];?></div>
          <div class="mt-1">Contact : <?php echo $value['pseudo'];?></div>
         </div>
      </div>
</div>
