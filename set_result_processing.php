<?php
$error='';
include('session.php');
include('result_individual.php');
include('class_result_checking.php');
?>
   <html>
    <head>
       <title> Set Exam </title>
               <meta charset="utf-8" />
               <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
               <meta name="viewport" content="width=device-width, initial-scale=1" />
               <link rel="stylesheet" type="text/css" href="teacher_page_stylesheet_02.css">        
    </head>
    
    <body>
        <div id="div1">
               <div class="background-01">
                      <div class="naming">
                              <p>Cuet School and College </p>
                              <input id="first_input" type="text" placeholder="Search..." />
                              <b id="logout"><a href="logout.php">Log Out</a></b>
                      </div>
               </div>
        </div>
        
        <div id="div2">
            <div class="result_contents">
                       <div class="result_image_content">
                               <img src="image_folder/teacher.jpg" alt="student" />
                       </div>
                       <div class="result_header_name">
                              <h1 class="result_name"><?php echo $teacher_name?></h1>
                       </div>

                       <div id="search_opt">
<!--                           <form action="set_result_processing.php" method="post">-->

                              <input name="s_individual" type="submit" value=" Individual result ">
                              <input name="s_class" type="submit" value=" Class result ">                            

<!--                         </form>-->
                       </div>
                       
            <div id="result_show">
              <?php
//                   $error='';
//                   session_start();
//                      include('result_individual.php');
                      $check=$_SESSION['s_both'];

                   if(isset($_POST['s_individual'])||$check=="indi"){
                   $_SESSION['s_both']="indi";
                           
                  echo'           
                           <div id="exam_setting" >
                           <form action="" method="post">
                              <div class="name">
                                 <label> Exam id&nbsp;&nbsp;:</label>
                                 <input id="exam_id" name="exam_id" placeholder="exam id" type="number" ></div>
                              <div class="name">
                                 <label> Student id&nbsp;&nbsp;&nbsp;:</label>
                                <input id="student_id" name="student_id" placeholder="student id" type="number"></div>
                              <div class="name">
                                  <label>Result&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                                  <input id="result" name="result" placeholder="result" type="text"></div>
                              <div class="name">
                                  <label>Comments :</label>
                                  <input id="comments" name="comments" placeholder="comments" type="text"></div>
              
                              <input name="individual_submit" type="submit" value=" Set Result ">
                              <span>';     echo $error;
                                                 echo'</span>
                           </form>                         
                          </div>';

                     }

                  elseif(isset($_POST['s_class']) || $check=="class"){
                      $_SESSION['s_both']="class";
                      echo'
                            <div id="exam02_setting" >
                            <form action="" method="post">
                                <select id="exam_id_choice" name="exam_id_choice">                      
                                   <option value="0">Select an Exam id</option>
                                   <option value="11">CT</option>
                                   <option value="22">Fortnighty</option>
                                   <option value="31">First term final</option>
                                   <option value="32">Second term final</option>
                                   <option value="33">Third term final</option>
                                </select>
        
                                <select id="class_choice" name="class_choice">                      
                                   <option value="0">Select a class</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                                </select>    
                                
                                <input name="cls_submit" type="submit" value=" set ">
                                <span>'; echo $error; 
                                               echo'</span>
                            </form>
                            </div>';
                      
                      
    
                   }
            ?>
                           
          </div>

    </div>
        
        
    </body>
</html>