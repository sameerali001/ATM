<?php
include("head.php");
include("config.php");

if(isset($_POST["enquiry"])) {
    header("Location: balance.php");
    exit; // It's good practice to include exit after header redirection to stop further execution
}
?>

<section>
    <h1>Welcome</h1>
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="container px-4 text-center">
            <div class="row gx-5">
                <div class="col">
                    <form action="check.php" method="post">
                        <div class="p-3"><button type="submit" name="enquiry" class="btn btn-primary btn-lg px-5"><p class="text-white">Balance<br>Enquiry</p></button></div>
                    </form>
                </div>
                <div class="col">
                    <form action="withdrawal.php" method="post">
                        <div class="p-3"><button type="submit" name="withdrawal" class="btn btn-primary btn-lg"><p class="text-white">Withdrawal</p></button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
