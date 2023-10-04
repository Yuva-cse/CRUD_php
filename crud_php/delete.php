<?php
    extract($_POST);
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"internship");
    $ID=$_GET['value'];
    $sql="delete from student where id='$ID'";
    $res=mysqli_query($connection,$sql);
    if(isset($res)){
        ?>
        <h3>Deleted successfully</h3>
        <p><a href="http://localhost/crud_php/">click hear</a> to Home page</p>
        <?php
    }
?>