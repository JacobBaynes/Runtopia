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
                    
                        <i class="fa fa-bars"></i></a>
                </ul>
            </div>
        </header>
        
        <main>
		<?php 
			session_start(); // start session 
			
		?>
            <br>
            <section>
				<h1>Welcome, <?php echo $_SESSION['user']; // access sesssion user firstName.?> 
				<ul class="customerAccLinks">
					<li><a href="#">Purchase History</a></li>
					<li><a href="#">Change/Reset password</a></li>
					<li><a href="#">Update Account Info</a></li>
					<li><a href="#">Delete Account</a></li>
				
			</section>
        </main>
        
    </body>
    

</html>

















