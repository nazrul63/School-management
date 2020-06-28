<?php 
session_start();
?>
<html>
   <head>
<title> Sign up confirmation </title>
<link href="sign_up_style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
   
        <?php
                $id=$_SESSION['id'];
               echo "successfully created your identity. <br> Your id is ".$id;

        ?>
        
        <FORM METHOD="LINK" ACTION="index.php">
              <INPUT TYPE="submit" VALUE="Sign-In">
        </FORM>
        <button type="button">Sign-In</button>
        <button type="button">Home</button>
        
    </div>
    </body>
</html>