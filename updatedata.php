<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'crud_html') or die("connection failes");
$sid  = $_POST['sid'];
$sname  = $_POST['sname'];
$saddress = $_POST['saddress'];
$sclass = $_POST['sclass'];
$sphone = $_POST['sphone'];
$query = "UPDATE `student` SET `sname` = '$sname', `saddress` = '$saddress', `sclass` = '$sclass', `sphone` = '$sphone' WHERE `student`.`sid` = $sid;";



 mysqli_query($conn, $query) or die("update query fails");

  header("Location: /php/crud_html/index.php");
  exit();