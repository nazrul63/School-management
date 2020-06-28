<?php
/*session_start(); // Starting Session*/
$error=''; // Variable To Store Error Message

if (isset($_POST['submit_t'])) {

         $connection = mysql_connect("localhost", "root", "");        
         $db = mysql_select_db("school_try_out_01", $connection);
        
        $teacher_sql=mysql_query("SELECT * FROM `teacher_basic_info`", $connection);
     
    if(!$teacher_sql){
         echo "could not successfully run query from db".mysql_error();
          exit;
      }
     $count=mysql_num_rows($teacher_sql); 
    
    if($count==0){
     echo "     No rows found in exam_student";
         exit;
     }
     
        if($count>0)
{
    echo "<table>
                       <tr>
                             <th> Teacher_id </th>
                             <th> Name </th>
                             <th> Mobile no </th>
                             <th> Email </th>
                             <th> Address </th>
                             <th> Join-date </th>
                             <th> Subject </th>
                             <th>  </th>
                             
                       </tr>";
    //outputting data of each row
    while($t_row=mysql_fetch_assoc($teacher_sql))
         {
             $teacher_id=$t_row['t_id'];
             $teacher_name=$t_row['t_name'];
             $teacher_mobileno=$t_row['t_mobile_no'];
             $teacher_email=$t_row['t_email'];
             $teacher_address =$t_row['t_address'];
             $teacher_join_date=$t_row['join_date'];
             $teacher_subject=$t_row['subject'];
               
        echo '<tr> 
                    <td>'.$teacher_id.'</td>
                    <td>'.$teacher_name.'</td>
                    <td>'.$teacher_mobileno.'</td>
                    <td>'.$teacher_email.'</td>
                    <td>'.$teacher_address.'</td>
                    <td>'.$teacher_join_date.'</td>
                    <td>'.$teacher_subject.'</td>
                    <td class="last_one">
                           <form action="delete_teacher_row.php" method="post">
                                   <input type="hidden" value="'.$t_row['t_id'].'" name="id">
                                  <input type="submit" value="Delete">
                            </form>
                    </td>
                </tr>' ;
    }
    echo "</table>";
            
}
else
{
    echo "0 results";
}

}

// parent info showing

elseif (isset($_POST['submit_p'])) {

         $connection = mysql_connect("localhost", "root", "");        
         $db = mysql_select_db("school_try_out_01", $connection);
        
        $parent_sql=mysql_query("SELECT * FROM `parents_basic_info`", $connection);
     
    if(!$parent_sql){
         echo "could not successfully run query from db".mysql_error();
          exit;
      }
     $count=mysql_num_rows($parent_sql); 
    
    if($count==0){
     echo "     No rows found in exam_student";
         exit;
     }
     
        if($count>0)
{
    echo "<table>
                       <tr>
                             <th> Parent_id </th>
                             <th> Name </th>
                             <th> Mobile no </th>
                             <th> Email </th>
                             <th> Address </th>
                             <th> Child Id </th>
                             <th>  </th>
                             
                       </tr>";
    //outputting data of each row
    while($p_row=mysql_fetch_assoc($parent_sql))
         {
             $parent_id=$p_row['p_id'];
             $parent_name=$p_row['p_name'];
             $parent_mobile_no=$p_row['p_mobile_no'];
             $parent_email=$p_row['p_email_address'];
             $parent_address =$p_row['P_address'];
//             $child_id=$p_row['join_date'];
        
          $child_id_sql=mysql_query("select * from parent_student_linkup where p_id='$parent_id'", $connection);
     
         if(!$child_id_sql){
             echo "could not successfully run query from db".mysql_error();
             exit;
           }
          $r_count=mysql_num_rows($child_id_sql);
    
          if($r_count==0){
               echo "No rows found in linkup table for parent id ".$parent_id;
              $child_number="no child";
               exit;
             }
    
          while($child_row = mysql_fetch_assoc($child_id_sql)){
                   $student_id=$child_row['s_id'];
                   
             }
        
        
               
        echo '<tr> 
                    <td>'.$parent_id.'</td>
                    <td>'.$parent_name.'</td>
                    <td>'.$parent_mobile_no.'</td>
                    <td>'.$parent_email.'</td>
                    <td>'.$parent_address.'</td>
                    <td>'.$student_id.'</td>
                    <td class="last_one">
                           <form action="delete_parent_row.php" method="post">
                                   <input type="hidden" value="'.$p_row['p_id'].'" name="id">
                                   <input type="hidden" value="'.$student_id.'" name="child_id">
                                  <input type="submit" value="Delete">
                            </form>
                    </td>
                </tr>' ;
    }
    echo "</table>";
            
}
else
{
    echo "0 results";
}

}

//student info

elseif (isset($_POST['submit_s'])) {

         $connection = mysql_connect("localhost", "root", "");        
         $db = mysql_select_db("school_try_out_01", $connection);
        
        $student_sql=mysql_query("SELECT * FROM `student_basic_info`", $connection);
     
    if(!$student_sql){
         echo "could not successfully run query from db".mysql_error();
          exit;
      }
     $count=mysql_num_rows($student_sql); 
    
    if($count==0){
     echo "     No rows found in exam_student";
         exit;
     }
     
        if($count>0)
{
    echo "<table>
                       <tr>
                             <th> Student_id </th>
                             <th> Name </th>
                             <th> Class </th>
                             <th> Mobile no </th>
                             <th> Email </th>
                             <th> Address </th>                             
                             <th>  </th>
                             
                       </tr>";
    //outputting data of each row
    while($s_row=mysql_fetch_assoc($student_sql))
         {
             $student_id=$s_row['s_id'];
             $student_name=$s_row['s_name'];
             $student_mobile_no=$s_row['s_mobile_no'];
             $student_email=$s_row['s_email'];
             $student_address =$s_row['s_address'];
//             $child_id=$p_row['join_date'];
        
          $class_sql=mysql_query("select * from student_class_info where s_id='$student_id'", $connection);
     
         if(!$class_sql){
             echo "could not successfully run query from db".mysql_error();
             exit;
           }
          $r_count=mysql_num_rows($class_sql);
    
          if($r_count==0){
               echo "No rows found in class table for student id ".$student_id;

               exit;
             }
    
          while($class_row = mysql_fetch_assoc($class_sql)){
                   $class_id=$class_row['class_no'];
                   
             }
        
        
               
        echo '<tr> 
                    <td>'.$student_id.'</td>
                    <td>'.$student_name.'</td>
                    <td>'.$class_id.'</td>
                    <td>'.$student_mobile_no.'</td>
                    <td>'.$student_email.'</td>
                    <td>'.$student_address.'</td>                    
                    <td class="last_one">
                           <form action="delete_student_row.php" method="post">
                                   <input type="hidden" value="'.$s_row['s_id'].'" name="id">
                                   <input type="hidden" value="'.$class_id.'" name="class_id">
                                  <input type="submit" value="Delete">
                            </form>
                    </td>
                </tr>' ;
    }
    echo "</table>";
            
}
else
{
    echo "0 results";
}

}
    
    ?>