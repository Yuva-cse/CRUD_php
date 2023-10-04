<?php
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"internship");
    extract($_POST);
    $sql="update student set name='$name',regno='$regno',dept='$dept',year='$year' where id='$id'";
    $res=mysqli_query($connection,$sql);
    if(isset($res)){
        ?>
             <h3>Updated successfully</h3>
        <p><a href="http://localhost/crud_php/">click hear</a> to Home page</p>
        <?php
    }
    else{
        ?>
        <h3>Error while update data</h3>
        <?php
    }
?>