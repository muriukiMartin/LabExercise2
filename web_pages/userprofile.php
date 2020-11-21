<?php
 session_start();
 if(!$_SESSION['name']){
     header("Location: login.php");
 }
include_once('userfunctions.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Info</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" scr="order.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div id="nav">
                <a href="order.php">Make Order</a>
                <a href="PassChange.php">Change Password</a>
                <a href="logout.php">Logout</a>
            </div>
            <div id="info">
            <img id="profile-photo" src ="<?php echo "images/".$_SESSION['photo']?>" />
            <div id="info1">
            <p>Welcome <?php echo $_SESSION['name'] ?></p>
            <p>Email: <?php echo $_SESSION['email'] ?></p>
            <p>City of Residence: <?php echo $_SESSION['city'] ?></p>
            </div>
            </div>
            
        </div>
    </body>
</html>
