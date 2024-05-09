<?php include 'head.php';
?>
<section class="nav-bar">
<nav class="navbar navbar-expand-lg mb-5 p-0">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="" width="220px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
         
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="https://www.pnbindia.in/profile.html" target="blank">bank details</a>
          
        </li>
       
      </ul>
      <span class="navbar-text">
        <a href="index.php"><input type="button"  class="btn btn-danger"  value="User Login"></a>
      
      </span>
</section>

<section class="">
 
 <div class="position-absolute top-50 start-50 translate-middle">
 <form method="post" action="script.php">
   <input type="hidden" name="status">
    <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label text-light">Email address</label>
     <input type="email" class="form-control" name ="email"  id="exampleInputEmail1" aria-describedby="emailHelp">
     <div id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</div>
   </div>
   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label text-light">Password</label>
     <input type="password"  name ="password" class="form-control" id="exampleInputPassword1">
   </div>
  
   <button type="submit" name="adm-login" class="btn btn-danger" >Login</button>
 </form>
 
  </div>
 </section>
