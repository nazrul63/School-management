<?php
    $connection = mysql_connect("localhost", "root", "");        
    $db = mysql_select_db("school_try_out_01", $connection);
   
    $delete_id=$_POST['id'];
    $class_id=$_POST['class_id'];

    $delete_sql=mysql_query( "DELETE FROM `school_try_out_01`.`student_basic_info` WHERE `student_basic_info`.`s_id` = '$delete_id';",$connection);

   if(!$delete_sql)
   {
         echo "could not successfully run query from db".mysql_error();
          exit;
  }
    else
    {
        $delete_login_sql=mysql_query("DELETE FROM `school_try_out_01`.`student_login_info` WHERE `student_login_info`.`s_id` = '$delete_id';",$connection);
        
           if(!$delete_login_sql)
           {
               echo "could not successfully run query from db".mysql_error();
               exit;
           }
         else
         {
             $student_class_sql=mysql_query("DELETE FROM `school_try_out_01`.`student_class_info` WHERE `student_class_info`.`s_id` = '$delete_id' AND `student_class_info`.`class_no` = '$class_id';",$connection);
             
              if(!$student_class_sql)
           {
               echo "could not successfully run query from db".mysql_error();
               exit;
           }
             else{
             header('Location: admin_page.php');  
             }
         }
    }

?>