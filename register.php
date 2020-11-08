<!DOCTYPE html>
<html>
<header>
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
</header>
<body>
    <div id="nav">
       
        <a href="login.php">Login</a>
       
    </div>
    <div>
        <form action="actions.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <h3>Registration Form</h3><br>
            <label class="label" for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="At least 2 names"><br>

            <label class="label" for="email">Email Address</label>
            <input type="email" id="email" name="email"><br>

            <label class="label" for="city">City</label>
            <input type="text" id="city" name="city"><br>
            
	        <label class="label" for="pass">Create password</label>
            <input type="password" id="pass" name="pass"><br>
            
            <label class="label" for="confirm">Confirm password</label>
            <input type="password" id="confirm" name="comfirm"><br>

            <label class="label" for="photo">Profile photo</label>
            <input type="file" id="photo" name="photo"><br>

            <input type="submit" name="register" value="Register">
        </fieldset>
        </form>
    </div>
</body>
</html>

