<!doctype html>
<html>
<center>
<head>
<title>Signin</title>
</head>
<body bgcolor="bisque">
<h1>Please enter Username & Password to Sign In</h1>
<form action="login_connection.php" method="POST">
<p>Username <input type="text"name="userid"required placeholder="user name">
<p>Password  <input type="password"name="password"required placeholder="*******">
<hr>
<p><input type="submit"value="submit"><input type="button"value="reset">
<hr>
</form>
<h2>New User ? <a href="Register.php">Create a New Account</a></h2>
</body>
</html>
