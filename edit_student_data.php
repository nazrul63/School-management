<?php
include('session.php');
include('edit_user_data_processing.php');
?>
<html>

<head>
    <title> Edit form </title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="sign_up_style.css">
</head>

<body>
    <div id="main">
        <div id="sign_up">
        
        <h2>Edit Form</h2>
          <form action="" method="post">
              <div class="name">
                 <label> Full name&nbsp;&nbsp;:</label>
                 <input id="name" name="name" placeholder="name" type="text" value="<?php echo $student_name; ?>"></div>
              <div class="name">
                 <label> Address&nbsp;&nbsp;&nbsp;:</label>
                 <input id="address" name="address" placeholder="address" type="text" value="<?php echo $student_address; ?>"></div>
             <div class="name">
                 <label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                 <input id="email" name="email" placeholder="email@example.com" type="email" value="<?php echo $student_email; ?>"></div>
            <div class="name">
                 <label>Mobile no :</label>
                 <input id="mobile_no" name="mobile_no" placeholder="mobile no" type="number" value="<?php echo $student_mobile_no; ?>"></div>
            <div class="name">
                 <label>Class :</label>
                 <input id="class" name="class" placeholder="class" type="number" value="<?php echo $student_class_no; ?>">
                 
                 <label style="left: 20px;">Roll no :</label>
                 <input id="roll_no" name="roll_no" placeholder="student_roll_no" type="number" value="<?php echo $student_roll_no; ?>"></div>
                 
            <div class="name" >
                 <label >Username :</label>
                 <input id="username" name="username" placeholder="username" type="text"  value="<?php echo $student_userName; ?>">
            
                 <label  style="left: 20px;">Password :</label>
                 <input id="password" name="password" placeholder="*******" type="password" value="<?php echo $student_password; ?>"></div>
                          
              <input name="submit" type="submit" value=" Edit ">
              <span><?php echo $error; ?></span>
         </form>

        </div>
    </div>
</body>

</html>