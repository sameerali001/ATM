<?php include 'head.php';
?>
<section class="index">
<section class="nav-bar">
<nav class="navbar navbar-expand-lg mt-0 p-0 text-color">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="" width="220px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item text-light">
          <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-light"  href="https://www.pnbindia.in/profile.html" target="blank">Bank Details</a>
          
        </li>
      </ul>
      <span class="navbar-text">
        <a href="admin.php"><input type="button"  class="btn btn-danger"  value="Admin login"></a>
      
      </span>
    </div>
  </div>
</nav>
</section>
<br><br>
<section class="text-light">
 
<div class="position-absolute top-50 start-50 translate-middle">
<form action="script.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >ENTER CARD NUMBER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="atm" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text text-light">banks will never ask for personal or confidential information via text messages</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">PIN</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="atmpin">
  </div>
  
  <button type="submit" class="btn btn-danger"  name="userlog">Submit</button>
</form>

 </div>
</section>
</section>