<?php
include('session.php');
?>
<!doctype html>
<html>

<head>
    <title> Home -03 </title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="student_page_stylesheet.css">

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
                <li><a href="std_result_show.php">See Result</a>
                </li>
                <li><a href="">Attendance</a>
                </li>
                <li class="ending-one"><a href="">Notices</a>
                </li>
            </ul>
        </div>

        <div class="contents">

            <div class="image_content">
                <img src="image_folder/student.jpg" alt="student" />
            </div>
            <!--<div class="break"></div>-->

            <div class="header_name">
                <h1 class="name"><?php echo $student_name?></h1>
            </div>
            <div class="about">
                <ul>
                    <li><strong>Roll no :</strong>  <?php echo $student_roll_no?>       </li>
                    <li><strong>Class :</strong>  <?php echo $student_class_no?>       </li>
                    <li><strong>Adress :</strong><?php echo $student_address?></li>
                    <li><strong>Mobile no :</strong><?php echo $student_mobile_no?></li>
                    <li><strong>Email no :</strong><?php echo $student_email?></li>
                </ul>
            </div>
            <FORM METHOD="LINK" ACTION="edit_student_data.php">
              <INPUT TYPE="submit" VALUE="Edit">
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