<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
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
                <a href="register.php">Sign Up</a>  
            </div>
            <div id="form">
                <form action="actions.php" method="post" enctype="multipart/form-data">
                    
                    <h3>Login Page</h3>
                    <label class="label" for="email">Email</label>
                    <input type="email" id="email" name="email"><br>

                    <label class="label" for="pass">Password</label>
                    <input type="password" id="pass" name="pass"><br>

                    <input class="submit" type="submit" name="login" value="Login">
                    <hr>
                    <p>Not a Member?<a href="register.php">Sign Up Here</a></p>
                    
                </form>
            </div>
        </div>
    </body>
</html>