<!DOCTYPE html>
<html>
	<head>
		<title>Title!</title>
	</head>
		<body>	
			<div id = "header"><h1>Learning some PHP and MySQL</h1></div>
			<div id = "emotion">Programming!</div>

			<div id="content">
				<p>Here is a record of what information you submitted</p>
				<p>First Name: <?= $_REQUEST['first_name']; ?><br>
					Last Name: <?= $_REQUEST['last_name']; ?><br>
					Email Address: <?= $_REQUEST['email']; ?><br>
					Facebook URL: <?= $_REQUEST['facebook_url']; ?><br>
					Twitter Handle: <?= $_REQUEST['twitter_handle']; ?>
				</p>
			</div>


				<div id = "footer"></div>


		</body>
	</head>
</html>
