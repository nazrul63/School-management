<?php
/*session_start(); // Starting Session*/
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
     if (empty($_POST['exam_id']) || empty($_POST['subject'])) {
             $error = "Exam_id or Subject is invalid ";
         }
    else{
            // Define $exam_id and $subject
         $exam_id=$_POST['exam_id'];
         $subject=$_POST['subject'];     
         // Establishing Connection with Server by passing server_name, exam_id and subject as a parameter
         $connection = mysql_connect("localhost", "root", "");        
         // Selecting Database
         $db = mysql_select_db("school_try_out_01", $connection);
        
        $search_sql=mysql_query("select * from exam_student where exam_id='$exam_id' and s_id='$student_id'", $connection);
     
    if(!$search_sql){
         echo "could not successfully run query from db".mysql_error();
          exit;
      }
     
    if(mysql_num_rows($search_sql)==0){
     echo "     No rows found in exam_student";
         exit;
     }
    
    while($row = mysql_fetch_assoc($search_sql)){
        $result=$row['result'];
    }
        
        $e_search_sql=mysql_query("select * from exam where exam_id='$exam_id'", $connection);
        
         if(!$e_search_sql){
         echo "could not successfully run query from db".mysql_error();
          exit;
      }
     $count=mysql_num_rows($e_search_sql);
        
    if($count==0){
     echo "      No rows found in exam";
         exit;
     }
        
        if($count>0)
{
    echo "<table>
                       <tr>
                             <th> Exam_id </th>
                             <th> Examiner </th>
                             <th> Type </th>
                             <th> Subject </th>
                             <th> Date_of_exam </th>
                             <th> Result </th>
                             
                       </tr>";
    //outputting data of each row
    while($e_row=mysql_fetch_assoc($e_search_sql))
    {
        $exam_id=$e_row['exam_id'];
       $examinar_id=$e_row['teacher_id'];
       $exam_type=$e_row['exam_type'];
       $date_of_exam =$e_row['exam_date'];
       $class_room_no =$e_row['class_room_no'];
        
        $teacher_search_sql=mysql_query("select * from teacher_basic_info where t_id='$examinar_id'", $connection);
        
         if(!$teacher_search_sql){
         echo "could not successfully run query from db".mysql_error();
          exit;
      }
     $t_count=mysql_num_rows($teacher_search_sql);
        
    if($t_count==0){
     echo "      No rows found in teacher_basic_info";
         exit;
     }
        if($t_count==1)
        {
            $t_row=mysql_fetch_assoc($teacher_search_sql);
            $teacher_name=$t_row['t_name'];
            $teacher_subject=$t_row['subject'];
        }
        
        echo "<tr> 
                    <td>".$e_row['exam_id']."</td>
                    <td>".$t_row["t_name"]."</td>
                    <td>".$e_row['exam_type']."</td>
                    <td>".$t_row['subject']."</td>
                    <td>".$e_row['exam_date']."</td>
                    <td>".$result."</td>
                    
                 </tr>";
    }
    echo "</table>";
            
}
else
{
    echo "0 results";
}

    
    }
}
    
    ?>