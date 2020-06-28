<?php
include('session.php');

?>
   <html>
    <head>
       <title> Student_Comment </title>
               <meta charset="utf-8" />
               <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
               <meta name="viewport" content="width=device-width, initial-scale=1" />
               <link rel="stylesheet" type="text/css" href="student_page_stylesheet.css">        
    </head>
    
    <body>
        <div id="div1">
               <div class="background-01">
                      <div class="naming">
                              <p>Cuet School and College </p>
                              <input type="text" placeholder="Search..." />
                              <b id="logout"><a href="logout.php">Log Out</a></b>
                      </div>
               </div>
        </div>
        
        <div id="div2">
               <div class="result_contents">
                  <div class="result_image_content">
                        <img src="image_folder/student.jpg" alt="student" />
                  </div>
                
                 <div class="result_header_name">
                        <h1 class="result_name"><?php echo $student_name?></h1>
                 </div>
   
                 <div id="comment_table">
                          
                        <?php
                               //comment grabing sql
                              $comment_search_sql=mysql_query("select * from exam_student where  s_id='$student_id'", $connection);
        
                             if(!$comment_search_sql){
                                  echo "could not successfully run query from db".mysql_error();
                                  exit;
                               }
                            $c_count=mysql_num_rows($comment_search_sql);
        
                            if($c_count>0)
                                  {
                                     echo "
                                      <table>
                                           <tr>
                                                <th> comment </th>
                                                <th> subject </th>
                                                <th> teacher </th>
                                          </tr>";
                                      //outputting data of each row
                                    
                                     while($c_row=mysql_fetch_assoc($comment_search_sql))   {
                                              $exam_id=$c_row['exam_id'];
                                         
                                              //if comment presents then teacher id finding
                                             $t_id_find_sql=mysql_query("select t_id from exam where exam_id='$exam_id'",$connection);
                                             if(!$t_id_find_sql){
                                                echo "could not successfully run query from db".mysql_error();
                                                exit;
                                               }
                                             while($t_id_row=mysql_fetch_assoc($t_id_find_sql))
                                                     {
                                                     $t_id=$t_id_row['t_id'];
                                                     }
                                              // subject and teacher name finding
                                              $sub_teacher_search_sql=mysql_query("select * from teacher_basic_info where t_id='$t_id'", $connection);
        
                                             if(! $sub_teacher_search_sql){
                                                echo "could not successfully run query from db".mysql_error();
                                                exit;
                                               }
            
                                              while($t_ninfo_row=mysql_fetch_assoc($sub_teacher_search_sql))  {
                                                   $t_name=$t_ninfo_row['t_name'];
                                                   $t_subject=$t_ninfo_row['subject'];
                                                  }
                                       echo "<tr> 
                                                     <td>".$c_row["comments"]."</td>
                                                     <td>". $t_subject."</td>
                                                     <td>". $t_name."</td>
                                                </tr>"; 
                                   }
                                     echo "</table>";
                                }
                            else  {
                                  echo "0 results";
                            }
                           
                        ?>
                           
                    </div>              
               </div>
        </div>
        
    </body>
</html>