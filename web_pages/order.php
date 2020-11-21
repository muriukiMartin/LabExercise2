<?php
 session_start();
 if(!$_SESSION['name']){
     header("Location: login.php");
 }
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
                <a href="userprofile.php">View Profile</a>
                <a href="logout.php">Logout</a>
            </div>
            <div id="order-form">
                <form>
                    <h3>Order Food</h3>
                    <label class = "label" for="food-name">Food item</label>
                    <input type = "text" id="food-name" name = "food-name"><br>
                    <label class = "label" for="food-units">Quantity</label>
                    <input type = "number" id="food-units" name="food-units"><br>
                    <button id="order">Order</button>  
                </form>
            </div>

            <div id="order-form">
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
