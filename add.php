<?php include 'header.php';?>
<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'crud_html') or die("connection failes");
$query = "Select * from  studentclass";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>


                <select name="class">
                <option value="" selected disabled>Select Class</option>
                <?php while ($row = mysqli_fetch_assoc($result)) {

                ?>
                <option value="<?=$row['cid']?>"><?=$row['cname']?></option>

         <?php }?>

            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
<?php } else {
    echo "No Degree Selected";
}?>
</div>
</body>
</html>
