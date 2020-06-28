<?php
include('login.php'); // Includes Login Script

/*if(isset($_SESSION['choice'])=="Teacher"){
header("location: teacher_page.php");
}
elseif(isset($_SESSION['choice'])=="Parent"){
header("location: parents_page.php");
}*/
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<div id="login">
<h2>Sign-in Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">

<select id="choice" name="choice">                      
  <option value="0">Select an Entity</option>
  <option value="Teacher">Teacher</option>
  <option value="Parent">Parent</option>
  <option value="Student">Student</option>
</select>

<input name="submit" type="submit" value=" Sign in ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>