<?php
	
	$first_name = trim($_REQUEST['first_name']);
	$last_name = trim($_REQUEST['last_name']);
	$email = trim($_REQUEST['email']);
	$facebook_url = str_replace("facebook.org", "facebook.com", trim($_REQUEST['facebook_url']));
	$position = strpos($facebook_url, "facebook.com");
		
		if ($position === false){
			$facebook_url = "http://www.facebook.com/" . $facebook_url;
		}
	
	$twitter_handle = trim($_REQUEST['twitter_handle']);
	$twitter_url = "http://www.twitter.com/";
	$position1 = strpos($twitter_url, "@");

		if ($position1 === false){
			$twitter_url = $twitter_url . $twitter_handle;
		} else {
			$twitter_url = $twitter_url . substr($twitter_handle, $position1 + 1);
		}

?>

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
				<p>	Name: <?= $first_name . " " . $last_name; ?><br>
					Email Address: <?= $email; ?><br>
					<a href="<?=$facebook_url; ?>">Your Facebook Page</a><br>
					<a href="<?=$twitter_url; ?>">Check out your Twitter feed</a>
				</p>
			</div>


				<div id = "footer"></div>


		</body>
	</head>
</html>
