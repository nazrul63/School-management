   <?php
include('session.php');

?>
   <html>
    <head>
       <title> Set Exam </title>
               <meta charset="utf-8" />
               <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
               <meta name="viewport" content="width=device-width, initial-scale=1" />
               <link rel="stylesheet" type="text/css" href="class_result_page_stylesheet.css">        
    </head>
    
    <body>
        <div id="div1">
               <div class="background-01">
                      <div class="naming">
                              <p>Cuet School and College </p>
                              <input id="first_input" type="text" placeholder="Search..." />
                              <b id="logout"><a href="logout.php">Log Out</a></b>
                      </div>
               </div>
        </div>
        
        <div id="div2">
            <div class="result_contents">
                       <div class="result_image_content">
                               <img src="image_folder/teacher.jpg" alt="student" />
                       </div>
                       <div class="result_header_name">
                              <h1 class="result_name"><?php echo $teacher_name?></h1>
                       </div>

                       <div id="search_opt">
                           <form action="set_result_processing.php" method="post">

                              <input name="s_individual" type="submit" value=" Individual result ">
                              <input name="s_class" type="submit" value=" Class result ">                            

                         </form>
                       </div>
                       
                       <div id="result_show">
                       <?php
//                           if(isset($_POST['s_class'])){
                               $exam_id_choice=$_SESSION['exam_id_choice'];
                               $class_choice=$_SESSION['class_choice'];
                      echo'
                            <div id="exam02_setting" >
                            <form action="class_result_page" method="post">
                                <select id="exam_id_choice" name="exam_id_choice">                      
                                   <option value="0">Select an Exam id</option>
                                   <option value="11" '; if($exam_id_choice=="11") echo 'selected="selected"'; echo '>CT</option>
                                   <option value="22" '; if($exam_id_choice=="22") echo 'selected="selected"'; echo ' >Fortnightly</option>
                                   <option value="31" '; if($exam_id_choice=="31") echo 'selected="selected"'; echo ' >First term end</option>
                                   <option value="32" '; if($exam_id_choice=="32") echo 'selected="selected"'; echo ' >Second term end</option>
                                   <option value="33" '; if($exam_id_choice=="33") echo 'selected="selected"'; echo ' >Final term exam</option>
                                </select>
        
                                <select id="class_choice" name="class_choice">                      
                                   <option value="0">Select a class</option>
                                   <option value="1" '; if($class_choice=="1") echo 'selected="selected"'; echo ' >1</option>
                                   <option value="2" '; if($class_choice=="2") echo 'selected="selected"'; echo ' >2</option>
                                   <option value="3" '; if($class_choice=="3") echo 'selected="selected"'; echo ' >3</option>
                                   <option value="4" '; if($class_choice=="4") echo 'selected="selected"'; echo ' >4</option>
                                   <option value="5" '; if($class_choice=="5") echo 'selected="selected"'; echo ' >5</option>
                                </select>    
                                
                                <input name="submit" type="submit" value=" set ">
                                <span><?php echo $error; ?></span>
                            </form>
                            </div>';
//                   }
            
                  include('class_result_table_show.php');
                    ?>   
                      
                       </div>
              </div>
        </div>
    </body>
</html>       
      