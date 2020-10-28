<!DOCTYPE html>
<html>
    <header>
        <title>Change Password</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </header>
    <body>
        <div id="nav">
            <a href="#">Home</a>
            <a href="login.html">Login</a>
            <a href="register.html">Sign Up</a>
            <a href="login.html">Logout</a>
        </div>
        <div>
            <form action="actions.php">
                <fieldset>
                    <h4>Password change</h4>
                    <label class="label" for="password">Current password</label>
                    <input type="password" id="password"><br>
                    
                    <label class="label" for="newpass">New password</label>
                    <input type="password" id="newpass"><br>

                    <input type="submit" name="change" value="Change Password">
                    </fieldset>
            </form>
        </div>
    </body>
</html>