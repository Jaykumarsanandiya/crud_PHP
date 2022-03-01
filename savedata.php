<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'crud_html') or die("connection failes");

$sname  = $_POST['sname'];
$saddress = $_POST['saddress'];
$sclass = $_POST['class'];
$sphone = $_POST['sphone'];
$query = "INSERT INTO `student` (`sid`, `sname`, `saddress`, `sclass`, `sphone`) VALUES (NULL, '{$sname} ', '{$saddress}',
 '{$sclass} ', '{$sphone} ');";



 mysqli_query($conn, $query) or die("add query fails");

  header("Location: /php/crud_html/index.php");
  exit();