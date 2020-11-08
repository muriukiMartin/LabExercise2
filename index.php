<?php
session_start();
include_once('userfunctions.php');
?>
<!DOCTYPE html>
<html>
    <header>
        <title>User Info</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </header>
    <body>
        <div id="nav">
           <img src ="<?php echo "images/".$_SESSION['photo']?>" width=50px/>
           <a href="logout.php">Logout</a>
        </div>
        <div>
        <p>Full Name: <?php echo $_SESSION['name'] ?></p>
        <p>Email: <?php echo $_SESSION['email'] ?></p>
        <p>City of Residence: <?php echo $_SESSION['city'] ?></p>
        <button><a href="PassChange.php">Change Password</a></button>
        </div>
        <div>
            <form>
                <fieldset>
                    <h3>Order</h3>
                    
                </fieldset>
            </form>
        </div>
    </body>
</html>
