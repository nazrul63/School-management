<?php
$error=''; // Variable To Store Error Message
include('session.php');
if (isset($_POST['submit'])) {
    
     $connection = mysql_connect("localhost", "root", "");
     $db = mysql_select_db("school_try_out_01", $connection);
     $teacher_id=$_SESSION['id'];
    
     $admin_query = mysql_query("select * from admin where admin_id='$teacher_id'",$connection)or die(mysql_error());
    
//     $admin_query = mysql_query("select * from admin where admin_id='$teacher_id' AND password='$password' AND userName='$username'",$connection)or die(mysql_error());
         
     $rows = mysql_num_rows($admin_query);
    
    if ($rows == 1) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
             $error = "Username or Password is invalid in first";
         }
        else
        {
         // Define $username and $password and choice
         $username=$_POST['username'];
         $password=$_POST['password'];       
        
         // To protect MySQL injection for Security purpose
         $username = stripslashes($username);
         $password = stripslashes($password);
         $username = mysql_real_escape_string($username);
         $password = mysql_real_escape_string($password);
            
         $info_query = mysql_query("select * from admin where admin_id='$teacher_id' AND password='$password' AND userName='$username'",$connection)or die(mysql_error());
            
        $info_rows = mysql_num_rows($info_query);    
        if ($rows == 1){
            header("location: admin_page.php"); // Redirecting To Other Page
        }
            
     }
//        $_SESSION['login_user']=$username; // Initializing Session
//        $_SESSION['choice']=$choice;
//                     /*  $_SESSION['login_user_id']=*/
//                       header("location: teacher_page.php"); // Redirecting To Other Page
     }
    else {
           $error = "Sorry you aare not an admin!! ";    
    }
    

}

?>