<?php include 'header.php'; ?>
<div id="main-content">
    <?php 
    $conn = mysqli_connect('localhost', 'root', 'root', 'crud_html') or die("connection failes");
if(isset($_POST['sid'])){
   $sid = $_POST['sid'] ; 
  $query  =  "SELECT * FROM `student` WHERE `sid` = {$sid}";
  $result =   mysqli_query($conn , $query)or die("select query  unsuccessful");
     
}


?>
    <h2>Edit Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
<?php   if(mysqli_num_rows($result)>0){
    
    $row = mysqli_fetch_assoc($result);

    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?=  $row['sid']  ?>" />
            <input type="text" name="sname" value="<?=  $row['sname']  ?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?=$row['saddress']?>" />
        </div>
        <div class="form-group">
        <label>Class</label>
        <select name="sclass">
            <option value="" selected disabled>Select Class</option>
            <?php

            $classquery = "Select * from  studentclass";
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
    <input class="submit" type="submit" value="Update"  />
    </form>

    <?php }?>
</div>
</div>
</body>
</html>
