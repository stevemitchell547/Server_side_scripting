<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>
	<div id="form">
		<form action="process.php" method="POST">
			<p>
				<label>Username:</label>
				<input type="text" id="user" name="user" />
			</p>
			<p>
				<label>Password:</label>
				<input type="password" id="pass" name="pass" />
			</p>
			<p>
				<input type='submit' name='btnTest2' value='Login'>
			</p>
			<p>
			This login system can be configured with phpmyadmin, the current valid login is:
			</p>
			<p>
			testuser and testuserpass.
			</p>
			
		</form>
	</div>
</body>
</html>