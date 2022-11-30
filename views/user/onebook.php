<?php
$title = "Book user";
ob_start();
?>



    <div class="container m-5"> 
    <div class="row">  
    <div class="col m-3">
          <img src="<?= $GLOBALS['baseUrl']."/".$books['picture']?>" alt="<?= $books['title']?>">
       </div>
       <div class="col-md-6">
          <h5>Title : <?= $books['title']?></h5>
          <p><strong>Description :</strong>  <?= $books['description']?></p>
          <h6>Author : <?= $books['author']?></h6>
          <h6>Edition Date : <?= $books['editionDate']?></h6>
          <a href="<?= $GLOBALS['baseUrl']."/".$books['filePath']?>" download><i class='bx bx-cloud-download fs-1'></i></a>
          
       </div>
    </div>



<?php
$content = ob_get_clean();
unset($_SESSION["error"]);
unset($_SESSION["success"]);

require "views/templates/userLayout.php";
?>