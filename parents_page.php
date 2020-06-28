<?php
include('session.php');
?>
<!doctype html>
<html>

<head>
      <title> Parent page </title>	  
      <meta charset="utf-8" />	    
      <meta http-equiv="Content-type" content="text/html; charset=utf-8" />	    
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" type="text/css" href="parents_page_stylesheet.css" >
 
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
     <div class="sidebar">
           <ul>
              <li><a href ="std_result_show.php">See Result</a></li>
              <li><a href ="">Attendance</a></li>
              <li><a href ="">Notices</a></li>
              <li class="ending-one"><a href ="comment.php">Comments</a></li>
          </ul>
     </div>
	 
	 <div class="contents">	 
        
	      <div class="image_content">
	           <img src="image_folder/parent.jpg" alt="parent" />
	      </div>
	          <!--<div class="break"></div>-->
	          
		  <div class="header_name">
    		 <h1 class="name"><?php echo $parent_name ?></h1>	
          </div>			 
			 <div class="about">
		              <ul>
		                   <li><strong>Child name:</strong>
			                   <ol>
							   <li><a href="student_page.php"><?php echo $student_name ?></a></li>
							   </ol>
						   </li>
                           <li><strong>Adress:</strong><?php echo $parent_address ?></li>
			               <li><strong>Mobile no:</strong><?php echo $parent_mobile_no ?></li>
                           <li><strong>Email no:</strong><?php echo $parent_email ?></li>			 
		              </ul>
	         </div>
	         <FORM METHOD="LINK" ACTION="edit_parent_data.php">
              <INPUT TYPE="submit" VALUE="Edit">
        </FORM>
	 </div>
 </div>

  <!--<div id="div3">
       <footer>
          Copyright © tuttut.com
      </footer>
 </div>-->

</body>

</html>