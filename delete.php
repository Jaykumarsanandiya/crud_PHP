<?php include 'header.php'; ?>

<?php
//  echo $_POST['deletebtn'] ;
$conn = mysqli_connect('localhost', 'root', 'root', 'crud_html') or die("connection failes");
  if(isset($_POST['deletebtn'])){
      $sid = $_POST['sid'] ;
      $query =  "DELETE FROM `student` WHERE `student`.`sid` = $sid;" ;
      echo $query ;
  
 $result = mysqli_query($conn,$query) or die("delete  unsuccessful");

 header("Location: /php/crud_html/index.php");
 exit();
  }
?>
<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="delete.php" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
