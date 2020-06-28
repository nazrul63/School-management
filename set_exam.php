<?php
include('session.php');
include('setting_exam.php');
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
                       <div id="info_space">
                             
                              <table id="infos">
                                      <tr>
                                          <th>Exam Type</th>
                                          <th>Exam Code</th>
                                      </tr>
                                  
                                  <tr>
                                      <td>Class Test</td><td>11</td>
                                  </tr>
                                  <tr>
                                      <td>Fortnighty</td><td>22</td>
                                  </tr>
                                  <tr>
                                      <td>First Term End</td><td>31</td>
                                  </tr>
                                  <tr>
                                      <td>Second Term End</td><td>32</td>
                                  </tr>
                                  <tr>
                                      <td>Final</td><td>33</td>
                                  </tr>                                                                    
                              </table>

                       </div>
                       
                       <div id="exam_setting">
                            <form action="" method="post">
              <div class="name">
                 <label> Exam id&nbsp;&nbsp;:</label>
                 <input id="exam_id" name="exam_id" placeholder="exam id" type="number" ></div>
              <div class="name">
                 <label> Exam Type&nbsp;&nbsp;&nbsp;:</label>
                 <input id="exam_type" name="exam_type" placeholder="type" type="text"></div>
             <div class="name">
                 <label>Teacher id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                 <input id="teacher_id" name="teacher_id" value="<?php echo $teacher_id?>" type="number"></div>
            <div class="name">
                 <label>Class Room no :</label>
                 <input id="c_r_no" name="c_r_no" placeholder="class room no" type="number"></div>

            <div class="name">
                 <label>Date of Exam :</label>
                 <input id="exam_date" name="exam_date" placeholder="Date of exam" type="date"></div>
              
              <input name="submit" type="submit" value=" Set Exam ">
              <span><?php echo $error; ?></span>
         </form>
                           
                       </div>
              
               </div>
        </div>
        
    </body>
</html>