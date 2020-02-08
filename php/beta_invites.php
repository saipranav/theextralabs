<?php

if($_POST){
	$servername = "localhost";
	$username = "theextra_dbuser";
	$password = "dbuser";
	$dbname = "theextra_the_extra_labs";
	$email = $_POST['email'];
	$for = $_POST['for'];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		echo "Not able increase user base";
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO beta_invites (for_which, email) VALUES ('".$for."','".$email."')";

	if ($conn->query($sql) === TRUE) {
	    echo "Added in beta invites";
	} else {
		echo "Not able to add you in beta invites";
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}

?>