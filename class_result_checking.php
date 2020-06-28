<?php

if(isset($_POST['cls_submit'])){
    $error='';
   if(empty($_POST['exam_id_choice']) || empty($_POST['class_choice'])){
                 $error="have to choose both";     }
   else{
        $_SESSION['exam_id_choice']=$_POST['exam_id_choice'];
        $_SESSION['class_choice']=$_POST['class_choice'];
       
       header('Location: class_result_page.php');    }
}

?>