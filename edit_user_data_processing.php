<?php
//session_start(); // already started in sign_up_linking
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
                   
                $basic_info_update_sql=mysql_query("UPDATE `school_try_out_01`.`teacher_basic_info` SET `t_name` = '$name', `t_mobile_no` = '$mobile_no', `t_email` = '$email', `t_address` = '$address', `join_date` = '$join_date', `subject` = '$subject' WHERE `teacher_basic_info`.`t_id` = '$teacher_id';", $connection);
     
               if(!$basic_info_update_sql){
                  echo "could not successfully run update basic info query in db".mysql_error();
                  exit;
               }
                   else{
                       
                       $uname_pass_update_sql=mysql_query("UPDATE `school_try_out_01`.`teacher_login_info` SET `userName` = '$username', `password` = '$password' WHERE `teacher_login_info`.`t_id` = '$teacher_id';", $connection);
                       
                       if(!$uname_pass_update_sql){
                          echo "could not successfully run update username query from db".mysql_error();
                          exit;            }
                   
                       else{
                            $_SESSION['login_user']=$username;
                            header('Location: teacher_page.php');     }              
                            
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
                       $new_student_id=$_POST['student_id'];
                     
                $basic_info_update_sql=mysql_query("UPDATE `school_try_out_01`.`parents_basic_info` SET `p_name` = '$name', `p_mobile_no` = '$mobile_no', `p_email_address` = '$email', `P_address` = '$address' WHERE `parents_basic_info`.`p_id` = '$parent_id';", $connection);
     
               if(!$basic_info_update_sql){
                  echo "could not successfully run update basic info query in db".mysql_error();
                  exit;
               }
                   else{
                       
                       $uname_pass_update_sql=mysql_query("UPDATE `school_try_out_01`.`parent_login_info` SET `userName` = '$username', `password` = '$password' WHERE `parent_login_info`.`p_id` = '$parent_id';", $connection);
                       
                       if(!$uname_pass_update_sql){
                          echo "could not successfully run update username query from db".mysql_error();
                          exit;            }
                   
                       else{
                           
                           $student_link_up_sql=mysql_query("UPDATE `school_try_out_01`.`parent_student_linkup` SET `s_id` = '$new_student_id' WHERE `parent_student_linkup`.`p_id` = '$parent_id' AND `parent_student_linkup`.`s_id` = '$student_id';",$connection);
                           if(!$student_link_up_sql){
                          echo "could not successfully run update username query from db".mysql_error();
                          exit;            }
                           else{                           
                           
                            $_SESSION['login_user']=$username;
                            header('Location: parents_page.php');    }
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
                     
                                          
                $basic_info_update_sql=mysql_query("UPDATE `school_try_out_01`.`student_basic_info` SET `s_name` = '$name', `s_mobile_no` = '$mobile_no', `s_email` = '$email', `s_address` = '$address', `roll_no` = '$roll_no' WHERE `student_basic_info`.`s_id` = '$student_id';", $connection);
     
               if(!$basic_info_update_sql){
                  echo "could not successfully run update basic info query in db".mysql_error();
                  exit;
               }
                   else{
                       
                       $uname_pass_update_sql=mysql_query("UPDATE `school_try_out_01`.`student_login_info` SET `userName` = '$username', `password` = '$password' WHERE `student_login_info`.`s_id` = '$student_id';", $connection);
                       
                       if(!$uname_pass_update_sql){
                          echo "could not successfully run update username query from db".mysql_error();
                          exit;            }
                   
                       else{
                           
                           $student_class_sql=mysql_query("UPDATE `school_try_out_01`.`student_class_info` SET `class_no` = '$class' WHERE `student_class_info`.`s_id` = $student_id;",$connection);
                           if(!$student_class_sql){
                          echo "could not successfully run update username query from db".mysql_error();
                          exit;            }
                           else{                           
                           
                            $_SESSION['login_user']=$username;
                            header('Location: student_page.php');    }
                           }              
                            
                   }             
                 }
           }
    
      }
}
?>