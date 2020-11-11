<?php
session_start();
include_once('userfunctions.php');
?>
<!DOCTYPE html>
<html>
    <header>
        <title>User Info</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" scr="order.js"></script>
    </header>
    <body>
        <div id="nav">
           <img src ="<?php echo "images/".$_SESSION['photo']?>" width=50px/>
           <p>Full Name: <?php echo $_SESSION['name'] ?></p>
           <p>Email: <?php echo $_SESSION['email'] ?></p>
           <p>City of Residence: <?php echo $_SESSION['city'] ?></p>
           <button><a href="PassChange.php">Change Password</a></button>
           <a href="logout.php">Logout</a>
        </div>
        
        <div>
            <form>
                <fieldset>
                    <h3>Order</h3><br>
                    <label class = "label" for="food-name">Food item</label>
                    <input type = "text" id="food-name" name = "food-name"><br>
                    <label class = "label" for="food-units">Quantity</label>
                    <input type = "number" id="food-units" name="food-units"><br>
                    <button onclick="order()" id="order">Order</button>

                </fieldset>
            </form>
        </div>
    </body>
</html>
