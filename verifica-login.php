<?php


session_start();

if(!$_SESSION['userlogin']) {
	header('Location: ./home.php');
	exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css\bootstrap.css" type="text/css">
    <!-- <link rel="stylesheet" href="css\stylecustom.css" type="text/css"> -->
</head>
    <body>

    <div class="d-flex justify-content-center">
    <h2>Olá, <?php echo $_SESSION['userlogin'];?></h2>
    </div>
    <div class="d-flex justify-content-center">
        <form action="logout.php" method="get">
        <button class="btn btn-danger" id="logout" value="Logout">
            Logout
        </form>
    

    

</button>
    </div>


    
</body>
</html>





