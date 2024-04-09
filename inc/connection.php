<?php 

	// Following command is used to connect to db server
	// $connection = mysqli_connect(dbserver, dbuser, dbpass, dbname);

	$connection = mysqli_connect('localhost', 'root', 'root', 'userdb');


	// checking the connection
	// mysqli_connect_errno();	mysqli_connect_error();
	if(mysqli_connect_errno()){
		die('Database connection failed '. mysqli_connect_error());
	} else {
		//echo "Connection successful.";
	}

?>