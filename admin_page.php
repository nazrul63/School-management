<?php
include('session.php');

?>
   <html>
    <head>
       <title> Admin page </title>
               <meta charset="utf-8" />
               <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
               <meta name="viewport" content="width=device-width, initial-scale=1" />
               <link rel="stylesheet" type="text/css" href="admin_teacher_stylesheet.css">        
    </head>
    
    <body >
        <div id="div1">
               <div class="background-01">
                      <div class="admin_naming">
                              <p>Cuet School and College </p>
                              <input type="text" placeholder="Search..." />
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
                           <form action="" method="post">

                              <input name="submit_t" type="submit" value=" Teacher ">
                              <input name="submit_p" type="submit" value=" Parent ">
                              <input name="submit_s" type="submit" value=" Student ">                             

                         </form>
                       </div>

                       
                       <div id="result_table">
                           <?php                        
                                     include('admin_search_result.php');  
                           ?>
                           
                       </div>
              
               </div>
        </div>
        
    </body>
</html>