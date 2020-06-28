<?php
    $connection = mysql_connect("localhost", "root", "");        
    $db = mysql_select_db("school_try_out_01", $connection);
   
    $delete_id=$_POST['id'];
    $child_id=$_POST['child_id'];

    $delete_sql=mysql_query( "DELETE FROM `school_try_out_01`.`parents_basic_info` WHERE `parents_basic_info`.`p_id` = '$delete_id';",$connection);

   if(!$delete_sql)
   {
         echo "could not successfully run query from db".mysql_error();
          exit;
  }
    else
    {
        $delete_login_sql=mysql_query("DELETE FROM `school_try_out_01`.`parent_login_info` WHERE `parent_login_info`.`p_id` = '$delete_id';",$connection);
        
           if(!$delete_login_sql)
           {
               echo "could not successfully run query from db".mysql_error();
               exit;
           }
         else
         {
             $student_link_up_sql=mysql_query("DELETE FROM `school_try_out_01`.`parent_student_linkup` WHERE `parent_student_linkup`.`p_id` = '$delete_id' AND `parent_student_linkup`.`s_id` = '$child_id';",$connection);
             
              if(!$student_link_up_sql)
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