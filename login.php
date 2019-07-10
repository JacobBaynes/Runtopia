<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style1.css" type="text/css">
		<link rel="stylesheet" href="css/runtopia-stylesheet.css">
        <link rel="icon" href="images/favicon.gif" type="image">
        <title>Runtopia</title>
    </head>
       <body>
        <header>
			<img src="images/running-splash-man-logo.jpg" alt="Running man logo">
			<h1 class="header">Runtopia.com</h1>
                <ul>
                    <li><a href="index.html" >HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="#">STORE</a></li>
                    <li><a href="contact.html" >CONTACT</a></li>
					<li><a href="login.php" >LOGIN</a></li>
                </ul>
            </div>
        </header>
        <main>
            <br>
            <section>
				<form method="post"action="authUser.php"> <!-- post to the authUser.php file -->
					<fieldset>
						<legend>Login</legend>
						<label>UserName:  </label><br>
						<input type="username" name="username"><br><br>
						<label>Password:   </label><br>
						<input type="password" name="password"><br><br>
						
                    
						<button type="submit" value="Submit">Submit</button><br><br>
					</fieldset>
				</form>
			</section>
        </main>
    </body>
</html>