<!DOCTYPE html>
<html>
	<head>
		<!--CSS link here-->
	<head>
		<body>
			<div id = "header"><h1>Learning some PHP and MySQL</h1></div>
			<div id = "emotion">Programming is so much fun</div>

			<div id="content">
				<h1>Hey, <?php echo $_REQUEST['name']; ?></h1>

					<p>Great to meet you. I'm glad you're interested in learning about my programming history.</p>

					<p>First, click the button to join my newsletter</p>
					<form action = "socialEntryForm.html" method ="GET"/>
						<input type = "submit" value = "Button"/></p>


			</div>
			<div id="footer"></div>

		</body>
</html>