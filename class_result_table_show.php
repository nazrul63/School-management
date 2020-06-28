<?php
         
if (!empty($_SESSION['exam_id_choice']) && !empty($_SESSION['class_choice'])) {

    $exam_id_choice=$_SESSION['exam_id_choice'];
    $class_choice=$_SESSION['class_choice'];
    
         $connection = mysql_connect("localhost", "root", "");        
         $db = mysql_select_db("school_try_out_01", $connection);
        
        $search_sql=mysql_query("SELECT * FROM `student_basic_info` NATURAL JOIN `student_class_info` WHERE class_no='$class_choice' ", $connection);
     
    if(!$search_sql){
         echo "could not successfully run query from db".mysql_error();
          exit;
      }
     $count=mysql_num_rows($search_sql); 
    
    if($count==0){
     echo "     No rows found in exam_student";
         exit;
     }
     
        if($count>0)
{
    echo '<table id="class_table" >
                       <tr>
                             <th> Roll no </th>
                             <th> Name </th>
                             <th>  Result </th>
                             <th> Comment </th>
                             <th></th>
                    </tr>';
               echo '<form action="insert_result_row.php" method="post">';
               $_SESSION['student_id']=array();
               $_SESSION['result']=array();
               $_SESSION['comments']=array();
    //outputting data of each row
    while($t_row=mysql_fetch_assoc($search_sql))
         {
             $_SESSION['student_id'][]=$t_row['s_id'];
             $roll_no=$t_row['roll_no'];
             $student_name=$t_row['s_name'];
               
        echo '<tr> 
                    <td>'.$roll_no.'</td>
                    <td>'.$student_name.'</td>
                    <td>

                               <input id="result" name="result" placeholder="result" type="text" >
                    </td>
                    
                    <td>
                                  <input id="comments" name="comments" placeholder="comments" type="text">
                           
                    </td>
                  <td> </td>
                </tr>' ;
    }
            

    echo "</table>";
                                  //<input type="hidden" value="'.$t_row['s_id'].'" name="id">
                                   echo  '<input type="submit" value="set" name="insert_submit" id="set_submit">
                            </form>';
            
}
else
{
    echo "0 results";
}
    
}
?>