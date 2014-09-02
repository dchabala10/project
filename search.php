<?php

	$connection = mysqli_connect('localhost', 'root', 'root', 'project') or die("Error " . mysqli_error($connection));

	$search = $_GET['search'];

	$query = "SELECT * FROM users where first_name like '%{$search}%' or
	last_name like '%{$search}%' or email like '%{$search}%' or username like
	'%{$search}%'; "; 

	$result = $connection->query($query);

	foreach($result as $record){
		echo "User: " . $record["first_name"] . " " . $record["last_name"] . "<br>";

	}
