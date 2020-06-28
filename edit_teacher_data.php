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
                 <input id="name" name="name" placeholder="name" type="text" value="<?php echo $teacher_name; ?>"></div>
              <div class="name">
                 <label> Address&nbsp;&nbsp;&nbsp;:</label>
                 <input id="address" name="address" placeholder="address" type="text" value="<?php echo htmlspecialchars($teacher_address); ?>"></div>
             <div class="name">
                 <label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                 <input id="email" name="email" placeholder="email@example.com" type="email" value="<?php echo htmlspecialchars($teacher_email); ?>"></div>
            <div class="name">
                 <label>Mobile no :</label>
                 <input id="mobile_no" name="mobile_no" placeholder="mobile no" type="number" value="<?php echo htmlspecialchars($teacher_mobileno); ?>"></div>
            <div class="name">
                 <label>Subject :</label>
                 <input id="subject" name="subject" placeholder="subject" type="text" value="<?php echo htmlspecialchars($teacher_subject); ?>"></div>
            <div class="name" >
                 <label >Username :</label>
                 <input id="username" name="username" placeholder="username" type="text" value="<?php echo htmlspecialchars($teacher_userName); ?>">
            
                 <label  style="
    left: 20px;
">Password :</label>
                 <input id="password" name="password"  type="password" value="<?php echo htmlspecialchars($teacher_password); ?>"></div>
            <div class="name">
                 <label>Join date :</label>
                 <input id="join_date" name="join_date" placeholder="Date of join" type="date" value="<?php echo htmlspecialchars($teacher_join_date); ?>"></div>
              
              <input name="submit" type="submit" value=" Edit ">
              <span><?php echo $error; ?></span>
         </form>

        </div>
    </div>
</body>

</html>