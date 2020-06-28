<?php 
session_start();
?>
<html>
   <head>
<title> Sign up confirmation </title>
<link href="sign_up_confirmation_style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="sign_up_main">
   
      <p>  <?php
                $id=$_SESSION['id'];
               echo "successfully created your identity. <br> Your id is ".$id;

        ?>
        </p>

        <FORM METHOD="LINK" ACTION="sign_in_index.php" style="top:21px;">
              <INPUT TYPE="submit" VALUE="Sign-In" >
        </FORM>
               <p id="gap" style="text-align: right;position: relative;top: 34px;left: -15px;">or</p>
        <FORM METHOD="LINK" ACTION="index.php">
              <INPUT TYPE="submit" VALUE="Home Page" style="position:relative;
              top:-15px;
              left:-43px;">
        </FORM>

        
    </div>
    </body>
</html>