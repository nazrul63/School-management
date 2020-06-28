<?php
include('sign_up_linking.php'); // Includes Login Script

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
<title> Sign up </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="main">
<div id="login">
<h2>Sign up Form</h2>
<form action="" method="post">

<input type="radio" name="choice"  value="Teacher" style="margin-top:10px"/>Teacher<br>
<input type="radio" name="choice"  value="Parent"/>Parent<br>
<input type="radio" name="choice"  value="Student"/>Student<br>


<input name="submit" type="submit" value=" Sign up ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>