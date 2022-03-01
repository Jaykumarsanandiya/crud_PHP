<?php
 $conn = mysqli_connect('localhost' , 'root' ,'root' ,'crud_html') or die("connection failes");

 if(isset($_GET['id'])){
     $sid = $_GET['id'] ;
 }
 $query =  "DELETE FROM `student` WHERE `student`.`sid` = $sid;" ;
 $result = mysqli_query($conn,$query) or die("delete  unsuccessful");
 header("Location: /php/crud_html/index.php");
  exit();