<?php
include('admin_login.php'); // Includes Login Script

?>
<!DOCTYPE html>
<html>
<head>
<title> Admin Login Form </title>
<link href="admin_style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<div id="login">
<h2>Admin Login Form</h2>
<form action="" method="post" style="margin-top:15px;">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">

<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>