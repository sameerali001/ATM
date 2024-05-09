<?php
include "head.php";
include "config.php";
session_start();

?>
<h1>welcome </h1>
<div class="position-absolute top-50 start-50 translate-middle ">
<div class="container px-4 text-center">
  
  <div class="row gx-5">
    <div class="col">
     <div class="p-3"><button type="button" name="saving-acc" class="btn btn-primary btn-lg px-5 " ><a href="balance.php" ><p class="text-white"> Saving <br>Account </p></a> </button></div>
    </div>
    <div class="col">
      <div class="p-3"><button type="button" name="current-acc" class="btn btn-primary btn-lg"><a href="balance.php"><p class="text-white"> Current Account </p></a></button></div>
    </div>
  </div>
</div>

</div>