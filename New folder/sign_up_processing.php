<?php
session_start(); // already started in sign_up_linking
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
    
    if(empty($_SESSION['choice'])){
              $error = "choice is not found";   }
    else{
           $choice=$_SESSION['choice'];
          // Establishing Connection with Server by passing server_name, exam_id and subject as a parameter
           $connection = mysql_connect("localhost", "root", "");        
          // Selecting Database
           $db = mysql_select_db("school_try_out_01", $connection);
        
           if($choice=="Teacher"){
               if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['email']) ||  empty($_POST['mobile_no']) || empty($_POST['subject']) || empty($_POST['join_date']) ||empty($_POST['username']) || empty($_POST['password'])) {
                   $error = "Sorry; no input can be empty";  }
               
               else{      
                       $name=$_POST['name'];
                       $address=$_POST['address'];
                       $email=$_POST['email'];
                       $mobile_no=$_POST['mobile_no'];
                       $username=$_POST['username'];
                       $password=$_POST['password'];
                       $subject=$_POST['subject'];
                       $join_date=$_POST['join_date'];   
                   
                $insert_sql=mysql_query("INSERT INTO `school_try_out_01`.`teacher_basic_info` (`t_id`, `t_name`, `t_mobile_no`, `t_email`, `t_address`, `join_date`, `subject`) VALUES (NULL, '$name', '$mobile_no', '$email', '$address', '$join_date', '$subject');", $connection);
     
               if(!$insert_sql){
                  echo "could not successfully run query in db".mysql_error();
                  exit;
               }
                   else{
                       
                       $id_search=mysql_query("SELECT t_id FROM `teacher_basic_info` WHERE `t_name` = '$name' AND `t_mobile_no` = '$mobile_no' AND `t_email` = '$email' AND `t_address`= '$address' AND `subject`= '$subject' AND `join_date`= '$join_date'", $connection);
                       
                       if(!$id_search){
                          echo "could not successfully run query from db".mysql_error();
                          exit;            }
                       
                       $row_count=mysql_num_rows($id_search);
        
                       if($row_count==0){
                           echo "      No rows found in teacher_basic_info";
                           exit;                   }
                       
                       elseif($row_count>0) {
                          while($t_row=mysql_fetch_assoc($id_search)){
                                  $teacher_id=$t_row['t_id']; 
                                  $_SESSION['id']=$teacher_id; }  }
                   
                  $login_insert=mysql_query("INSERT INTO `school_try_out_01`.`teacher_login_info` (`t_id`, `userName`, `password`) VALUES ('$teacher_id', '$username', '$password');",$connection);
                       
                       if(!$login_insert){
                          echo "could not successfully run query in db".mysql_error();
                          exit;               }
                       else
                            header('Location: sign_up_confirmation.php');                   
                            
                   }
               
               }
           }
        
           elseif($choice=="Parent"){
                 if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['email']) ||  empty($_POST['mobile_no']) ||empty($_POST['student_id']) ||empty($_POST['username']) || empty($_POST['password'])) {
                     $error = "Sorry; no input can be empty"; }
               
                 else{  
                       $name=$_POST['name'];
                       $address=$_POST['address'];
                       $email=$_POST['email'];
                       $mobile_no=$_POST['mobile_no'];
                       $username=$_POST['username'];
                       $password=$_POST['password'];
                       $student_id=$_POST['student_id'];
                 }
         }
       
           elseif($choice=="Student"){
                 if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['email']) ||  empty($_POST['mobile_no']) || empty($_POST['class']) || empty($_POST['roll_no']) || empty($_POST['username']) || empty($_POST['password'])) {
                   $error = "Sorry; no input can be empty"; }
               
                 else{   
                       $name=$_POST['name'];
                       $address=$_POST['address'];
                       $email=$_POST['email'];
                       $mobile_no=$_POST['mobile_no'];
                       $username=$_POST['username'];
                       $password=$_POST['password'];
                       $class=$_POST['class'];
                       $roll_no=$_POST['roll_no'];
                 }
           }
    
      }
}
?>