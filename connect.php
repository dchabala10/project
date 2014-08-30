<?php

mysql_connect("localhost:8888", "root", "root") or die("Error connecting to database: " . mysql_error());

	echo "Connected to MySQL!<br>";

mysql_select_db("project") or die("Error selecting the database project: " . mysql_error());

	echo "You are using database <strong>project</strong>!<br>";

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