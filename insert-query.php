<?php require_once('inc/connection.php'); ?>

<?php 
	/*
		INSERT INTO table_name(
			column1, column2, etc
		) VALUES (
			value1, value2, etc
		)
	*/
	
	$first_name = 'Supunya';
	$last_name = 'Geenadi';
	$email = 'office@pavanuthsara.com';
	$password = 'supunyaLOVE';
	$last_login = '2024-04-09 09:22:01';
	$is_deleted = 0;

	$hashed_password = sha1($password);
	//echo "Hashed password: {$hashed_password}";	

	$query = "INSERT INTO user(first_name, last_name, email, password,last_login, is_deleted) VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$hashed_password}','{$last_login}', '{$is_deleted}')";

	$result = mysqli_query($connection, $query);

	if($result){
		echo "1 record added";
	} else {
		echo "Database query failed";
	} 

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Insert Query</title>
	</head>
	<body>
		
	</body>
</html>

<?php mysqli_close($connection); ?>