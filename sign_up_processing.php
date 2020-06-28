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
                     
                     //inserting values
                     $insert_sql=mysql_query("INSERT INTO `school_try_out_01`.`parents_basic_info` (`p_id`, `p_name`, `p_mobile_no`, `p_email_address`, `P_address`) VALUES (NULL, '$name', '$mobile_no', '$email', '$address');", $connection);
     
                     if(!$insert_sql){
                        echo "could not successfully run query in db".mysql_error();
                        exit;            }
                   
                     else{                       
                           $id_search=mysql_query("SELECT p_id FROM `parents_basic_info` WHERE `p_name` = '$name' AND `p_mobile_no` = '$mobile_no' AND `p_email_address` = '$email' AND `P_address`= '$address'", $connection);
                       
                           if(!$id_search){
                               echo "could not successfully run query from db".mysql_error();
                               exit;           }
                       
                           $row_count=mysql_num_rows($id_search);
        
                           if($row_count==0){
                               echo "      No rows found in parents_basic_info";
                               exit;                   }
                       
                           elseif($row_count>0) {
                                   while($t_row=mysql_fetch_assoc($id_search)){
                                            $parent_id=$t_row['p_id']; 
                                            $_SESSION['id']=$parent_id; }  }
                   
                     $login_insert=mysql_query("INSERT INTO `school_try_out_01`.`parent_login_info` (`p_id`, `userName`, `password`) VALUES ('$parent_id', '$username', '$password');",$connection);
                       
                     if(!$login_insert){
                        echo "could not successfully run query in db".mysql_error();
                        exit;               }
                     else  
                       {
                           $student_link_query=mysql_query("INSERT INTO `school_try_out_01`.`parent_student_linkup` (`p_id`, `s_id`) VALUES ('$parent_id', '$student_id');",$connection);
                           
                            if(!$student_link_query){
                               echo "could not successfully run query in db".mysql_error();
                               exit;               }
                           
                            else{
                           
                                  header('Location: sign_up_confirmation.php');      }
                        }
                            
                     }
                     
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
                     
                     //inserting values
                     $insert_sql=mysql_query("INSERT INTO `school_try_out_01`.`student_basic_info` (`s_id`, `s_name`, `roll_no`, `s_mobile_no`, `s_email`, `s_address`) VALUES (NULL, '$name', '$roll_no', '$mobile_no', '$email', '$address');", $connection);
     
                     if(!$insert_sql){
                        echo "could not successfully run query in db".mysql_error();
                        exit;            }
                   
                     else{                       
                           $id_search=mysql_query("SELECT s_id FROM `student_basic_info` WHERE `s_name` = '$name' AND `s_mobile_no` = '$mobile_no' AND `s_email` = '$email' AND `s_address`= '$address' AND `roll_no` = '$roll_no'", $connection);
                       
                           if(!$id_search){
                               echo "could not successfully run query from db".mysql_error();
                               exit;           }
                       
                           $row_count=mysql_num_rows($id_search);
        
                           if($row_count==0){
                               echo "      No rows found in student_basic_info";
                               exit;                   }
                       
                           elseif($row_count>0) {
                                   while($t_row=mysql_fetch_assoc($id_search)){
                                            $student_id=$t_row['s_id']; 
                                            $_SESSION['id']=$student_id; }  }
                   
                     $login_insert=mysql_query("INSERT INTO `school_try_out_01`.`student_login_info` (`s_id`, `userName`, `password`) VALUES ('$student_id', '$username', '$password');",$connection);
                       
                     if(!$login_insert){
                        echo "could not successfully run query in db".mysql_error();
                        exit;               }
                     else  
                       {
                           $student_class_query=mysql_query("INSERT INTO `school_try_out_01`.`student_class_info` (`s_id`, `class_no`) VALUES ('$student_id', '$class');",$connection);
                           
                            if(!$student_class_query){
                               echo "could not successfully run query in db".mysql_error();
                               exit;               }
                           
                            else{
                           
                                  header('Location: sign_up_confirmation.php');      }
                        }
                            
                     }
                                        
                 }
           }
    
      }
}
?>