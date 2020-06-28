<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
     if (empty($_POST['username']) || empty($_POST['password'])) {
             $error = "Username or Password is invalid in first";
         }
     elseif( empty($_POST['choice'])){
              $error = "choice is invalid";
        }
     else
        {
         // Define $username and $password and choice
         $username=$_POST['username'];
         $password=$_POST['password'];
         $choice     =$_POST['choice'];         
         // Establishing Connection with Server by passing server_name, user_id and password as a parameter
         $connection = mysql_connect("localhost", "root", "");
         // To protect MySQL injection for Security purpose
         $username = stripslashes($username);
         $password = stripslashes($password);
         $username = mysql_real_escape_string($username);
         $password = mysql_real_escape_string($password);
         
         // Selecting Database
         $db = mysql_select_db("school_try_out_01", $connection);
         
         if($choice=="Teacher")
           {
              // SQL query to fetch information of registerd users and finds user match.
             $t_query = mysql_query("select * from teacher_login_info where password='$password' AND userName='$username'",$connection)or die(mysql_error());
         
             $rows = mysql_num_rows($t_query);
                   if ($rows == 1) {
                       $_SESSION['login_user']=$username; // Initializing Session
                       $_SESSION['choice']=$choice;
                     /*  $_SESSION['login_user_id']=*/
                       header("location: teacher_page.php"); // Redirecting To Other Page
                 } else {
                       $error = "Teacher's Username or Password is invalid";    }
          }
         
         elseif($choice=="Parent")
           {
              // SQL query to fetch information of registerd users and finds user match.
             $p_query = mysql_query("select * from parent_login_info where password='$password' AND userName='$username'",$connection)or die(mysql_error()); 
         
             $rows = mysql_num_rows($p_query);
                   if ($rows == 1) {
                       $_SESSION['login_user']=$username; // Initializing Session
                       $_SESSION['choice']=$choice;
                     /*  $_SESSION['login_user_id']=*/
                       header("location: parents_page.php"); // Redirecting To Other Page
                 } else {
                       $error = "Parent's Username or Password is invalid";    }
          }
         
         elseif($choice=="Student")
           {
              // SQL query to fetch information of registerd users and finds user match.
             $s_query = mysql_query("select * from student_login_info where password='$password' AND userName='$username'",$connection)or die(mysql_error());
         
             $rows = mysql_num_rows($s_query);
                   if ($rows == 1) {
                       $_SESSION['login_user']=$username; // Initializing Session
                       $_SESSION['choice']=$choice;
                     /*  $_SESSION['login_user_id']=*/
                       header("location: student_page.php"); // Redirecting To Other Page
                 } else {
                       $error = "Student's Username or Password is invalid in second";    }
          }
         
         mysql_close($connection); // Closing Connection
         }   
}
?>