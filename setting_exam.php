<?php
$error="";

if(isset($_POST['submit'])){
if(empty($_POST['exam_id'])||empty($_POST['exam_type'])||empty($_POST['teacher_id'])||empty($_POST['c_r_no'])     ||empty($_POST['exam_date'])) {
     $error="have to fill all inputs";
 }
  else{
         $connection = mysql_connect("localhost", "root", "");        
         $db = mysql_select_db("school_try_out_01", $connection);  
      
         $exam_id=$_POST['exam_id'];
         $exam_type=$_POST['exam_type'];
         $teacher_id=$_POST['teacher_id'];
         $c_r_no=$_POST['c_r_no'];
         $exam_date=$_POST['exam_date'];
     
         $exam_insert_sql=mysql_query("INSERT INTO `school_try_out_01`.`exam` (`exam_id`, `exam_type`, `teacher_id`, `class_room_no`, `exam_date`) VALUES ('$exam_id', '$exam_type', '$teacher_id', '$c_r_no', '$exam_date');",$connection);
      
       if(!$exam_insert_sql){
                  echo "could not successfully run insert exam query in db".mysql_error();
                  exit;
               }
                   else{
                       $error="Successfully inserted";
                   }
 }
    
}

?>