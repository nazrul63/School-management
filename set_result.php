<?php
include('session.php');
?>
   <html>
    <head>
       <title> Set Exam </title>
               <meta charset="utf-8" />
               <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
               <meta name="viewport" content="width=device-width, initial-scale=1" />
               <link rel="stylesheet" type="text/css" href="teacher_page_stylesheet_02.css">        
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
                       

                           <?php                  
                                     $_SESSION['s_both']='';
                           ?>
                           
                       
        </div>
        </div>
        
    </body>
</html>