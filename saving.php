<?php
include "head.php";
include "config.php";
?>

<div class="container position-absolute top-50 start-50 translate-middle text-light">
    <h2>Enter only 500,100,200 MULTIPLES</h2>
    <br><br><br>
    <div class="row">
        <div class="col-md-6 text-light">
            <h3>Deduct Amount</h3>
            <form action="saving.php" method="post">
                <div class="form-group">
                    <label for="amount">Amount to Deduct:</label>
                    <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter amount">
                </div>
                <br>
                <button type="submit" class="btn btn-danger">Withdrawal</button>
            </form>
        </div>
      
</div>
<?php


if(isset($_POST['amount'])) {
    

    
    session_start();

   
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT user_amount FROM user WHERE user_id = $user_id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $balance = $row['user_amount'];
    } else {
        echo "Error: Unable to fetch balance.";
        exit;
    }

    $amount = $_POST['amount'];
    if ($amount <= $balance) {
        $balance -= $amount;


        $sql = "UPDATE user SET user_amount = $balance WHERE user_id = $user_id";
        if (mysqli_query($conn, $sql)) {
          $acc =   "Amount deducted successfully. New balance: '$balance'";
        } else {
            echo "Error updating balance: " . mysqli_error($conn);
        }
    } else {
        echo "Insufficient balance.";
    }

    mysqli_close($conn);
}

?>
<h1 class="text-light"><?php  
echo "$acc";?> </h1>