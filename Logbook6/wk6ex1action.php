<?php
	//Setting query
	$sql = "INSERT INTO test (name,email,phone_number) ";
	$sql = $sql . " values ('{$_POST['txtName']}','{$_POST['txtEmail']}','{$_POST['txtPhoneNumber']}')";

	// Connect to server and select database
  $servername = 'localhost';
	$db_name = 'db1_21906325';
	$username = 'root';
	$password = '';

  $conn = mysqli_connect($servername, $username, $password, $db_name);
	if (mysqli_connect_errno())
	{
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	exit();
	}
	else
	{
		echo "Successful Connection!<br/>";
	}

	// Execute sql statement
	$result = mysqli_query($conn, $sql);

	if ($result)
	{
  	echo "Record updated successfully!<br/>";
	}
	else
	{
  	echo "Error updating record: " . mysqli_error($conn);
	}

	//New query
	$sql = "SELECT * from test";

	// Execute sql statement
	$result = mysqli_query($conn, $sql);

	if($result)
	{
		while ($row = mysqli_fetch_assoc($result))
		{
			echo "$row[name]  $row[email]  $row[phone_number] <br/>";
		}
	}
	else
	{
		echo "error";
	}
?>
