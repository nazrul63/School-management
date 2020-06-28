<?php
include('session.php');

?>
   <html>
    <head>
       <title> Student_Result </title>
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
               <div class="result_contents">-->
                       <div class="result_image_content">
                               <img src="image_folder/student.jpg" alt="student" />
                       </div>
                       <div class="result_header_name">
                              <h1 class="result_name"><?php echo $student_name?></h1>
                       </div>
                       <div id="search_opt">
                           <form action="" method="post">
                              <label id="label1">Exam ID :</label>
                              <input id="exam_id" name="exam_id" placeholder="exam id" type="number">
                              <label id="label2">Subject :</label>
                              <input id="subject" name="subject" placeholder="subject name" type="text">

                              <input name="submit" type="submit" value=" Search ">
                              
                              <?php

                                   $error=''; // Variable To Store Error Message

                                  if (isset($_POST['submit'])) {
                                      if (empty($_POST['exam_id']) || empty($_POST['subject'])) {
                                          $error = "Exam_id or Subject is invalid ";
                                    }}
                               ?>
                              <span><?php echo $error; ?></span>
                         </form>
                       </div>
                       
                       <div id="result_table">
                           <?php
                                            /*$e_search_sql=mysql_query("select * from exam where exam_id='$exam_id'", $connection);
        
         if(!$e_search_sql){
         echo "could not successfully run query from db".mysql_error();
          exit;
      }
     $count=mysql_num_rows($e_search_sql);*/
        
    include('exam_result_search.php');
                           
                           ?>
                           
                       </div>
              
               </div>-->
        </div>
        
    </body>
</html>