<?php

include __DIR__ ."/View/header.php";
include __DIR__ ."/Model/movie.php";
?>

<div>
    
</div>
  <p>film <?php foreach($movies as $el) {
    $el -> printCard();
  }?></p>
   
    <?php
include __DIR__ ."/View/footer.php"
    ?>