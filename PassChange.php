<?php
session_start();
if(!$_SESSION['name']){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Change Password</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div id="nav">
                <a href="index.php">Home</a>
            </div>
            <div id="form">
                <form action="actions.php" method="post">
                    
                    <h4>Password change</h4>
                    <label class="label" for="password">Current password</label>
                    <input type="password" id="password" name="password"><br>
                        
                    <label class="label" for="newpass">New password</label>
                    <input type="password" id="newpass" name="newpass"><br>

                    <label class="label" for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password"><br> 

                    <input type="submit" name="change" value="Change Password">
                        
                </form>
            </div>
        </div>
    </body>
</html>