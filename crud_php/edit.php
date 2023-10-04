<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
<?php
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"internship");
    $ID=$_GET['value'];
    $sql="select * from student where id='$ID'";
    $res=mysqli_query($connection,$sql);
    if(isset($res)){
        foreach($res as $i){
            $id=$i['id'];
    ?>
    <div class="container">
        <form action="update.php" method="post">
                <div>
                    <input type="hidden" name="id" value="<?=$id?>">
                </div>
                <div>
                    <label for="">Name</label>
                    <input type="text" name="name" value=<?=$i['name']?> required>
                </div>
                <div>
                    <label for="">Register NO</label>
                    <input type="tel" inputmode="Numeric" name="regno" value=<?=$i['regno']?> required>
                </div>
                <div>
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
                <div>
                    <label for="year">Year</label>
                    <select name="year" id="year" required>
                        <option value="" selected="true" disabled="disabled">Select</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                    </select>
                </div>
                <div class="button">
                    <button type="submit">UPDATE</button>
                </div>
            </form>
        </div>
    <?php
    }
    }
    else{
    ?>
    <h3>Error while fetching data</h3>
    <?php
    }
    ?>
</body>
</html>