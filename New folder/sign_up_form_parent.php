<?php
include('sign_up_processing.php');
?>
<html>

<head>
    <title> sign up form </title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="sign_up_style.css">
</head>

<body>
    <div id="main">
        <div id="sign_up">
        
        <h2>Sign up Form</h2>
          <form action="" method="post">
              <div class="name">
                 <label> Full name&nbsp;&nbsp;:</label>
                 <input id="name" name="name" placeholder="name" type="text"></div>
              <div class="name">
                 <label> Address&nbsp;&nbsp;&nbsp;:</label>
                 <input id="address" name="address" placeholder="address" type="text"></div>
             <div class="name">
                 <label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                 <input id="email" name="email" placeholder="email@example.com" type="email"></div>
            <div class="name">
                 <label>Mobile no :</label>
                 <input id="mobile_no" name="mobile_no" placeholder="mobile no" type="number"></div>
            
                 
                 
            <div class="name" >
                 <label >Username :</label>
                 <input id="username" name="username" placeholder="username" type="text">
            
                 <label  style="left: 20px;">Password :</label>
                 <input id="password" name="password" placeholder="*******" type="password"></div>
            <div class="name">
                 <label>Child id :</label>
                 <input id="student_id" name="student_id" placeholder="child id" type="number"></div>
                          
              <input name="submit" type="submit" value=" Sign up ">
              <span><?php echo $error; ?></span>
         </form>

        </div>
    </div>
</body>

</html>