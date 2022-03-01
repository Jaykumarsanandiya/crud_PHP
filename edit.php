<?php include 'header.php';?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php

$conn = mysqli_connect('localhost', 'root', 'root', 'crud_html') or die("connection failes");

if (isset($_GET['id'])) {
    $sid = $_GET['id'];

}
$query = "SELECT * FROM `student` WHERE `sid` = {$sid}";

$result = mysqli_query($conn, $query) or die("query unsuccessful");


if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);

    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?=$row['sid']?>"/>
          <input type="text" name="sname" value="<?=$row['sname']?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?=$row['saddress']?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <select name="sclass">
              <option value="" selected disabled>Select Class</option>
             <?php

             $classquery = "Select * from  studentclass";
             echo $classquery ;
             $classResult = mysqli_query($conn, $classquery);
             while ($classRow = mysqli_fetch_assoc($classResult)) {
            if($classRow['cid'] == $row['sclass']){
                echo "<option value='{$classRow['cid']}' selected>{$classRow['cname']}</option>";
            }else{
                echo "<option value='{$classRow['cid']}'>{$classRow['cname']}</option>";
            }
           

         } ?>
          </select>
      </div>

         <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?=$row['sphone']?>" />
        </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php }?>
</div>
</div>
</body>
</html>
