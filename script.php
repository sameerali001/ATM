<?php include("config.php");
?>

<?php 

session_start();


if(isset($_POST['adm-login'])){

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "select * from user where user_email='$email' AND user_pin='$password' AND user_status='1'";
    $adminlogin = mysqli_query($conn,$sql);
    $row = $adminlogin->fetch_assoc();
  
    if($row>0){
        if(true){
            $_SESSION['email'] = $_POST["email"];
         header("location: dashboard.php"); 
          }

    }else{
        echo "$email not found, please con";
    }
    
    }
    $sql1 = "SELECT username FROM users WHERE user_email = '$email'"; // Example query


$result = mysqli_query($conn, $sql1);


if ($result) {
   
    $row1 = mysqli_fetch_assoc($result);

    
    $_SESSION['username'] = $row1['username'];

   
    mysqli_free_result($result);
} else {
    
    echo "Error: " . mysqli_error($conn);
}


}





if(isset($_POST['create'])){
    $email = $_POST['r-email'];
    $name = $_POST['r-name'];
    $contact=$_POST['r-contact'];
    $address=$_POST['r-address'];
    $pan = $_POST['r-pan'];
    $atm = $_POST['r-atm'];
    $amount = $_POST['r-amount'];
    $password = ($_POST['r-password']);
    $confirmpassword =  ($_POST['confirmpassword']);
    if($password===$confirmpassword){
        $sql = "insert into user values('','$name','$email','$pan','$contact','$address','$atm','$password','','$amount')";
        $query = mysqli_query($conn, $sql);
        if($query){
            
            echo "Account Created Succesfully";
            header("Location:register.php");
        }else{
            echo "Account Not Created".mysqli_error($conn);
        }
    }else{
        echo "Password Not Same";
    }
}




session_start();
if(isset($_POST['userlog'])){

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $atm = $_POST["atm"];
        $pin = $_POST["atmpin"];
    
        $sql = "SELECT * FROM user WHERE user_atm='$atm' AND user_pin='$pin'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1){
            
            $login = true;
            $row = mysqli_fetch_assoc($result);
            

            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_name'] = $row['user_name'];
            
            header("Location: atm_process.php");
            exit; 
        }
        else{
            echo "Login failed";
        }
    }
}


?>

    
