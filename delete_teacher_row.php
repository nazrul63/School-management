<?php
    $connection = mysql_connect("localhost", "root", "");        
    $db = mysql_select_db("school_try_out_01", $connection);
   
    $delete_id=$_POST['id'];

    $delete_sql=mysql_query( "DELETE FROM `school_try_out_01`.`teacher_basic_info` WHERE `teacher_basic_info`.`t_id` = '$delete_id';",$connection);

   if(!$delete_sql)
   {
         echo "could not successfully run query from db".mysql_error();
          exit;
  }
    else
    {
        $delete_login_sql=mysql_query("DELETE FROM `school_try_out_01`.`teacher_login_info` WHERE `teacher_login_info`.`t_id` = '$delete_id';",$connection);
        
           if(!$delete_login_sql)
           {
               echo "could not successfully run query from db".mysql_error();
               exit;
           }
         else
         {
             header('Location: admin_page.php');     
         }
    }

?>