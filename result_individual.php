<?php

//echo 'poi tyu rew';

if(isset($_POST['individual_submit'])){   
    $error='';
    if(empty($_POST["exam_id"])||empty($_POST['student_id'])||empty($_POST['result'])||empty($_POST['comments']))
         {
             $error="have to fill up all inputs";
         }
   else{
       $connection = mysql_connect("localhost", "root", "");        
        $db = mysql_select_db("school_try_out_01", $connection);  
      
         $exam_id=$_POST["exam_id"];
         $student_id=$_POST['student_id'];
         $result=$_POST['result'];
         $comments=$_POST['comments'];
       
        $insert_sql=mysql_query("INSERT INTO `school_try_out_01`.`exam_student` (`exam_id`, `s_id`, `result`, `comments`) VALUES ('$exam_id', '$student_id', '$result', '$comments');",$connection);
        if(!$insert_sql){
                  echo "could not successfully run insert exam query in db".mysql_error();
                  exit;
               }
                   else{
                       $error="Successfully inserted";
                       unset($_SESSION['s_both']);
                       header("location: teacher_page.php");
                   }
       
       
        }
 }
?>