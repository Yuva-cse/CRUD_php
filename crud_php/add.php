<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"internship");
if($_POST){
    extract($_POST);
    $sql="insert into student(name,regno,dept,year)values('$name','$regno','$dept','$year')";
    $res=mysqli_query($connection,$sql);
    if(isset($res)){
        ?>
        <h3>Added successfully</h3>
        <p><a href="http://localhost/crud_php/">click hear</a> to Home page</p>
        <?php
    }
}
else{
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD_reg</title>
</head>
<body>
    <div class="box">
        <form action="add.php" method="post">
            <div class="input">
                <label for="">Name</label>
                <input type="text" name="name" required>
            </div>
            <div class="input">
                <label for="">Register NO</label>
                <input type="tel" inputmode="Numeric" name="regno" required>
            </div>
            <div class="input">
                <label for="dept">Dept</label>
                <select name="dept" id="dept" required>
                    <option value="" selected="true" disabled="disabled">Select</option>
                    <option value="CSE">CSE</option>
                    <option value="IT">IT</option>
                    <option value="BIO">BIO-MEDICAL</BIO-MEDICAL></option>
                    <option value="ECE">ECE</option>
                    <option value="EEE">EEE</option>
                    <option value="MECH">MECH</option>
                </select>
            </div>
            <div class="input">
                <label for="year">Year</label>
                <select name="year" id="year" required>
                <option value="" selected="true" disabled="disabled">Select</option>
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                    <option value="IV">IV</option>
                </select>
            </div>
            <div class="input button">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
    <?php
}
?>