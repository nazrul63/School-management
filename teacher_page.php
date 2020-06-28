<?php
include('session.php');
?>
<!doctype html>
<html>

<head>
    <title> Teacher page </title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="teacher_page_stylesheet.css">

</head>

<body>

    <div id="div1">
        <div class="background-01">
            <div class="naming">
                <p>Cuet School and College </p>

                <input type="text" placeholder="Search..." />
                <b id="logout"><a href="logout.php">Log Out</a></b>

            </div>
        </div>
    </div>

    <div id="div2">
        <div class="sidebar">
            <ul>
               <li><a href="set_exam.php">Set Exam</a>
                </li>
                <li><a href="set_result.php">Set Result</a>
                </li>
                <li><a href="">Attendance</a>
                </li>
                <li class="ending-one"><a href="">Notices</a>
                </li>
            </ul>
        </div>
        

        <div class="contents">

            <div class="image_content">
                <img src="image_folder/teacher.jpg" alt="teacher" />
            </div>
            <!--<div class="break"></div>-->

            <div class="header_name">
                <h1 class="name">
                   <a href="teacher_page.php">
                    <?php echo $teacher_name ?> 
                    </a>
                </h1>
            </div>
            <div class="about">
                <ul>
                    <li><strong>Subject     :</strong><?php echo $teacher_subject ?></li>
                    <li><strong>Adress      :</strong><?php echo $teacher_address ?></li>
                    <li><strong>Mobile no :</strong><?php echo $teacher_mobileno ?></li>
                    <li><strong>Email no   :</strong><?php echo $teacher_email ?></li>
                    <li><strong>Join-Date :</strong><?php echo $teacher_join_date ?></li>
                </ul>
                
            </div>
                    

            
            <FORM METHOD="LINK" ACTION="edit_teacher_data.php">
              <INPUT TYPE="submit" VALUE="Edit">
        </FORM>
        
            <FORM METHOD="LINK" ACTION="admin_form.php">
              <INPUT TYPE="submit" VALUE="Admin">
           </FORM>

        </div>
    </div>

    <!--<div id="div3">
       <footer>
          Copyright © tuttut.com
      </footer>
 </div>-->

</body>

</html>