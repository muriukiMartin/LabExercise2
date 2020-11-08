<!DOCTYPE html>
<html>
    <header>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </header>
    <body>
        <div id="nav">
           
           
            <a href="register.php">Sign Up</a>
            
        </div>
        <div>
            <form action="actions.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <h3>Login Page</h3>
                    <label class="label" for="email">Email</label>
                    <input type="email" id="email" name="email"><br>

                    <label class="label" for="pass">Password</label>
                    <input type="password" id="pass" name="pass"><br>

                    <input type="submit" name="login" value="Login">
                </fieldset>
            </form>
        </div>
    </body>
</html>