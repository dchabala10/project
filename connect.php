<?php

require 'app_config.php';


mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD) 
	or die("Error connecting to database: " . mysql_error());

	echo "Connected to MySQL!<br>";

mysql_select_db(DATABASE_NAME) 
	or die("Error selecting the database: " . DATABASE_NAME . mysql_error());

	echo "You are using database <strong>" . DATABASE_NAME . "</strong>!<br>";

$result = mysql_query("SHOW TABLES;");

	if(!$result){
		die("Error in listing tables: " . mysql_error());
	}

	echo "<p>Tables in database: </p>";
	echo "<ul>";
		while($row = mysql_fetch_row($result)){
			echo "<li>Table: {$row[0]}</li>";
		}
	echo "</ul>";