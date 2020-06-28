<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("school_try_out_01", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
$choice_check=$_SESSION['choice'];

if($choice_check=="Teacher")
{
    $t_sql=mysql_query("select * from teacher_login_info where userName='$user_check'", $connection);
     
    if(!$t_sql){
         echo "could not successfully run query from db".mysql_error();
          exit;
      }
     
    if(mysql_num_rows($t_sql)==0){
     echo "No rows found in teacher_login_info";
         exit;
     }
    
    while($row = mysql_fetch_assoc($t_sql)){
       $teacher_id=$row['t_id'];
        $_SESSION['id']=$teacher_id;
       $teacher_userName=$row['userName'];
       $teacher_password=$row['password'];
       $login_session =$row['userName'];
    }
    
    $t_info_sql=mysql_query("select * from teacher_basic_info where t_id='$teacher_id'", $connection);
     
    if(!$t_info_sql){
         echo "could not successfully run query from db".mysql_error();
          exit;
      }
     
    if(mysql_num_rows($t_info_sql)==0){
     echo "No rows found in teacher_basic_info";
         exit;
     }
    
    while($row = mysql_fetch_assoc($t_info_sql)){
       $teacher_name=$row['t_name'];
       $teacher_mobileno=$row['t_mobile_no'];
       $teacher_email=$row['t_email'];
       $teacher_address =$row['t_address'];
       $teacher_join_date=$row['join_date'];
       $teacher_subject=$row['subject'];
    }
    
   
       if(!isset($login_session)){
         mysql_close($connection); // Closing Connection
         header('Location: sign_in_index.php'); // Redirecting To Home Page
}

}

if($choice_check=="Parent")
{
    $p_sql=mysql_query("select * from parent_login_info where userName='$user_check'", $connection);
     
    if(!$p_sql){
         echo "could not successfully run query from db".mysql_error();
          exit;
      }
     
    if(mysql_num_rows($p_sql)==0){
     echo "No rows found";
         exit;
     }
    
    while($row = mysql_fetch_assoc($p_sql)){
       $parent_id=$row['p_id'];
        $_SESSION['id']=$parent_id;        
       $parent_userName=$row['userName'];
       $parent_password=$row['password'];
       $login_session =$row['userName'];
    }
    
    $p_info_sql=mysql_query("select * from parents_basic_info where p_id='$parent_id'", $connection);
     
    if(!$p_info_sql){
         echo "could not successfully run query from db".mysql_error();
          exit;
      }
     
    if(mysql_num_rows($p_info_sql)==0){
     echo "No rows found";
         exit;
     }
    
    while($row = mysql_fetch_assoc($p_info_sql)){
       $parent_name=$row['p_name'];
       $parent_mobile_no=$row['p_mobile_no'];
       $parent_email=$row['p_email_address'];
       $parent_address =$row['P_address'];
    }
    
    //
    $child_id_sql=mysql_query("select * from parent_student_linkup where p_id='$parent_id'", $connection);
     
    if(!$child_id_sql){
         echo "could not successfully run query from db".mysql_error();
          exit;
      }
    $r_count=mysql_num_rows($child_id_sql);
    
     
    if($r_count==0){
     echo "No rows found";
         exit;
     }
    
    while($child_row = mysql_fetch_assoc($child_id_sql)){
       $student_id=$child_row['s_id'];
    }
    
    //getting child info
    
    $child_info_sql=mysql_query("select * from student_basic_info where s_id='$student_id'", $connection);
     
    if(!$child_info_sql){
         echo "could not successfully run query from db".mysql_error();
          exit;
      }
     
    if(mysql_num_rows($child_info_sql)==0){
     echo "No rows found";
         exit;
     }
    
    while($child_info_row = mysql_fetch_assoc($child_info_sql)){
        $student_roll_no=$child_info_row['roll_no'];
        $student_name=$child_info_row['s_name'];
       $student_mobile_no=$child_info_row['s_mobile_no'];
       $student_email=$child_info_row['s_email'];
       $student_address =$child_info_row['s_address'];
    }
    
    
    //
   
       if(!isset($login_session)){
         mysql_close($connection); // Closing Connection
         header('Location: sign_in_index.php'); // Redirecting To Home Page
}

}

if($choice_check=="Student")
{
    $s_sql=mysql_query("select * from student_login_info where userName='$user_check'", $connection);
     
    if(!$s_sql){
         echo "could not successfully run query from db".mysql_error();
          exit;
      }
     
    if(mysql_num_rows($s_sql)==0){
     echo "No rows found";
         exit;
     }
    
    while($row = mysql_fetch_assoc($s_sql)){
       $student_id=$row['s_id'];
        $_SESSION['id']=$student_id;        
       $student_userName=$row['userName'];
       $student_password=$row['password'];
       $login_session =$row['userName'];
    }
    
    $s_info_sql=mysql_query("select * from student_basic_info where s_id='$student_id'", $connection);
     
    if(!$s_info_sql){
         echo "could not successfully run query from db".mysql_error();
          exit;
      }
     
    if(mysql_num_rows($s_info_sql)==0){
     echo "No rows found";
         exit;
     }
    
    while($row = mysql_fetch_assoc($s_info_sql)){
       $student_roll_no=$row['roll_no'];
        $student_name=$row['s_name'];
       $student_mobile_no=$row['s_mobile_no'];
       $student_email=$row['s_email'];
       $student_address =$row['s_address'];
    }
    
    $class_info_sql=mysql_query("select * from student_class_info where s_id='$student_id'", $connection);
     
    if(!$class_info_sql){
         echo "could not successfully run query from db".mysql_error();
          exit;
      }
     
    if(mysql_num_rows($class_info_sql)==0){
     echo "No rows found";
         exit;
     }
    
    while($row = mysql_fetch_assoc($class_info_sql)){
       $student_class_no=$row['class_no'];
    }
    
   
       if(!isset($login_session)){
         mysql_close($connection); // Closing Connection
          header('Location: sign_in_index.php'); // Redirecting To Home Page

}
}

?>