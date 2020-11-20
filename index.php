<?php
session_start();
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
            <a href="PassChange.php">Change Password</a>
            <a href="logout.php">Logout</a>
            <div id="info">
            <img id="profile-photo" src ="<?php echo "images/".$_SESSION['photo']?>" />
            <div id="info1">
            <p>Welcome <?php echo $_SESSION['name'] ?></p>
            <p>Email: <?php echo $_SESSION['email'] ?></p>
            <p>City of Residence: <?php echo $_SESSION['city'] ?></p>
            </div>
            </div>
            
            <div id="form">
                <form>
                    <h3>Order Food</h3>
                    <label class = "label" for="food-name">Food item</label>
                    <input type = "text" id="food-name" name = "food-name"><br>
                    <label class = "label" for="food-units">Quantity</label>
                    <input type = "number" id="food-units" name="food-units"><br>
                    <button onclick="order()" id="order">Order</button>  
                </form>
            </div>

            <div id="form">
                <form>
                    
                    <h3>Check Order Status</h3>
                    <label class = "label" for="order-id">Order ID</label>
                    <input type = "text" id="order-id" name = "order-id"><br>    
                    <button id="check">Order</button>    
                </form>
            </div>
        </div>
    </body>
</html>
