<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <header>
        <title>User Info</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </header>
    <body>
        <div id="nav">
            
            <a href="logout.php">Logout</a>
        </div>
        <p>Full Name: <?php echo $_SESSION['name'] ?></p>
        <p>Email: <?php echo $_SESSION['email'] ?></p>
        <p>City of Residence: <?php echo $_SESSION['city'] ?></p>
        <button><a href="PassChange.php">Change Password</a></button>
       
        </body>
</html>
