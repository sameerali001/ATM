<?php include 'head.php';
 include 'config.php';
 session_start();
 $sessionemail = $_SESSION['email'];
 $sql = "select * from user where user_email='$sessionemail'";
 $data = mysqli_query($conn,$sql);
 foreach($data as $row){
  echo $uname= $row['user_name'];
 }
?>

<section class="nav-bar">
<nav class="navbar navbar-expand-lg mt-0 p-0">
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            customer data
          </a>
          <ul class="dropdown-menu text-light">
            <li><a class="dropdown-item" href="register.php">Add customer</a></li>
            <li><a class="dropdown-item" href="details.php">View cumtomer list</a></li>
           
          </ul>
        </li>
      </ul>
      <span class="navbar-text">
        <a href="index.php"><input type="button"  class="btn btn-danger" value="Logout"></a>
      
      </span>
</section>
<section>
<div class="h1 text-align-center">
<div class="text-center ">
    <p>Welcome, <?php echo  $uname; ?>!</p>
</div>
 </div>
  
  
</section>