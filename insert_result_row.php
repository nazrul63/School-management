<?php
session_start();
//   echo "mara kha ";
if(isset($_POST['insert_submit'])){

//    echo "mara kha part 2";
    $exam_id=$_SESSION['exam_id_choice'];

    $result=$_POST['result'];
    $comments=$_POST['comments'];
    
    echo count($_SESSION['student_id']) or die();
    
    $connection = mysql_connect("localhost", "root", "");        
    $db = mysql_select_db("school_try_out_01", $connection);

    foreach($_SESSION['student_id'] as $item){
    
    $insert_sql=mysql_query( "INSERT INTO `school_try_out_01`.`exam_student` (`exam_id`, `s_id`, `result`, `comments`) VALUES ('$exam_id', '$item', '$result', '$comments ');",$connection);

   if(!$insert_sql)
   {
         echo "could not successfully run query from db".mysql_error();
          exit;
  }
//    else
//    {
//        $delete_login_sql=mysql_query("DELETE FROM `school_try_out_01`.`teacher_login_info` WHERE `teacher_login_info`.`t_id` = '$delete_id';",$connection);
//        
//           if(!$delete_login_sql)
//           {
//               echo "could not successfully run query from db".mysql_error();
//               exit;
//           }
//         else
//         {
//             header('Location: admin_page.php');     
//         }
//    }
    }
}
?>