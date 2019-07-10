<?php

	// connect to runtopia database
	$db_connection = mysqli_connect('localhost', 'root', 'ryGHqvrX7YCXEB8', 'runtopia');	
	// start a session
	session_start();
	// Get username from login.php form
	$username = $_POST['username'];
	// Get password from login.php form
	$password = $_POST['password'];
	// SQL statement accesses all columns from the customer_accounts table where the 
	// username is the equal to variable $username.
	$query = "SELECT * FROM `customer_accounts` WHERE `username` = '$username'";
	// mysqli_query function returns the value of the query statement.
	$sql = mysqli_query($db_connection, $query);
	// Access mysqli_fetch_array function returns an array from the values in $sql.
	$row = mysqli_fetch_array($sql);
	// Access the hashed_password from the array in the $row variable.
	$storedpass = $row['hashed_password'];
	// Access the firstName from the $row array and assign it to the session user.
	$_SESSION['user'] = $row['firstName'];

	// if password_verify returns true go to the customerAccount.php page.
	// else print Invalid password.
	// password_verify checks if the $password variable is equal to the hashed_password for the user.
	if(password_verify($password, $storedpass)) {
		header("Location:customerAccount.php");
		exit();
		
    } else {
		mysqli_close($db_connection);
		echo 'Log In was not successful.';
		header("Location:login.php");
		exit();

    }	
?>