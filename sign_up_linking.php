<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {

     if( !empty($_POST['choice'])){
         $choice=$_POST['choice'];
         $_SESSION['choice']=$choice;
         
         if($choice=="Teacher")
         {
             header("location:sign_up_form_teacher.php"); // Redirecting To Other Page  
         }
         elseif($choice=="Parent")
         {
             header("location:sign_up_form_parent.php"); // Redirecting To Other Page  
         }
         elseif($choice=="Student")
         {
             header("location:sign_up_form_student.php"); // Redirecting To Other Page  
         }     
          
      }
    else
       {
          $error = "  Please choose an entity ";
       }
    
}
    ?>