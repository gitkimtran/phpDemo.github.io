<html>
<head>
    <title></title>
</head>
<body>
    <form action="login.php" method="POST">
        <input type="text" name="username" value="">
        <input type="password" name="password" value="">
        <input type="submit" name="login">
    </form>
    <?php
	session_start();
	$username = $_POST['username'] ?? '';
	$password = $_POST['password'] ?? '';
    	if ($username == 'admin' && $password == '123456') {
        	$_SESSION['user'] = $username;
        	header("location:mainpage.php");
    	} else {
        	echo "incorrect username and password";
        	require "login.html";
    	}
 
    ?>
</body>
</html>
 
