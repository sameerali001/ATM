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
          <a class="nav-link active text-light" aria-current="page" href="dashboard.php">Dashboard</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-light" href="https://www.pnbindia.in/profile.html" target="blank">Bank Details</a>
          
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Customer data
          </a>
          <ul class="dropdown-menu text-light">
            <li><a class="dropdown-item" href="register.php">Add customer</a></li>
            <li><a class="dropdown-item" href="details.php">View cumtomer list</a></li>
           
          </ul>
        </li>
      </ul>
      <span class="navbar-text ">
        <a href="index.php"><input type="button" class="btn btn-danger" value="Logout"></a>
      
      </span>
</section>
<section>
 <div class="h1"></div>
  
  
</section>
<?php
include "config.php";
include "head.php";

if(isset($_POST['delete-btn'])) {
    $user_id = $_POST['user_id'];
    $sql = "DELETE FROM user WHERE user_id = $user_id";
    if ($conn->query($sql) === TRUE) {
        header("Location:details.php");
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
}
?>


<?php

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='container'>";
    echo "<table class='table table-bordered table-centered'>";
    echo "<thead class='thead-dark'>";
    echo "<tr><th>ID</th><th>User Name</th><th>Email</th><th>PAN</th><th>Contact</th><th>Address</th><th>ATM</th><th>Action</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["user_id"] . "</td>";
        echo "<td>" . $row["user_name"] . "</td>";
        echo "<td>" . $row["user_email"] . "</td>";
        echo "<td>" . $row["user_pan"] . "</td>";
        echo "<td>" . $row["user_contact"] . "</td>";
        echo "<td>" . $row["user_addresss"] . "</td>";
        echo "<td>" . $row["user_atm"] . "</td>";
        echo "<td>
                <form method='post' action='details.php'>
                    <input type='hidden' name='user_id' value='" . $row["user_id"] . "'>
                    <button type='submit' name='delete-btn' class='btn btn-danger'>Delete</button>
                </form>
            </td>";
        echo "</tr>";
    }
    
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
} else {
    echo "0 results";
}



?>
