<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
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
            <a href="login.php">Login</a>
        </div>
        <div id="form">
            <form action="actions.php" method="post" enctype="multipart/form-data">
        
                <h3>Registration Form</h3>
                <div id="details">
                    <label class="label" for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="At least 2 names"><br><br>

                    <label class="label" for="email">Email Address</label>
                    <input type="email" id="email" name="email"><br><br>

                    <label class="label" for="city">City</label>
                    <input type="text" id="city" name="city"><br><br>
                
                    <label class="label" for="pass">Create password</label>
                    <input type="password" id="pass" name="pass"><br><br>
                
                    <label class="label" for="confirm">Confirm password</label>
                    <input type="password" id="confirm" name="comfirm"><br><br>

                    <!-- <label class="label" for="photo">Profile photo</label> -->
                    <input class="input" type="file" id="photo" name="photo" value="Profile Photo" style="background-color:black;"><br><br>
                    
                    <input class="submit" type="submit" name="register" value="Register">
                    <hr>
                    <p>Already a member?<a href="login.php">Log in</a></p>
                </div>
        
            </form>
        </div>
    </div>
</body>
</html>

