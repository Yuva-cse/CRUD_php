<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action</title>
    <link rel="stylesheet" href="read.css">
</head>
<body>
    <?php
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"internship");
    $sql="select * from student";
    $res=mysqli_query($connection,$sql);
    ?>
    <div class="container">
    <table cellspacing="20">
        
                <tr>
                    <thead>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Reg_NO</th>
                        <th>Dept</th>
                        <th>Year</th>
                        <th>Action</th>
                    </thead>
                </tr>
    <?php
    $j=1;
    foreach($res as $i){
        $id=$i['id'];
        ?>
            <tbody>
                <tr>
                    <td><?=$j++?></td>
                    <td><?=$i['name']?></td>
                    <td><?=$i['regno']?></td>
                    <td><?=$i['dept']?></td>
                    <td><?=$i['year']?></td>
                    <td><div>
                        <a href="edit.php?value=<?=$id?>">Edit</a>
                    </div>
                    <div><a href="delete.php?value=<?=$id?>">Delete</a></div>
                    </td>
                </tr>
            </tbody>
        <?php
    }
    ?>
    </table>
    </div>
    <div class="nav">
    <a href="http://localhost/crud_php/">Go Back</a>
    </div>
</body>
</html>