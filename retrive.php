<?php

require_once('db.php');
$query = "select * from student";
$result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reterive</title>
</head>
<body>
    <h1 style="text-align: center; background-color: navy;">Students Registered for Zamboree</h1>

    <table style="border: 2px solid;text-align: center;margin-left: 30%; ">
        <tr style=>
            <th>Name</th>
            <th>Reg.no</th>
            <th>DOB</th>
            <th>Email</th>
            <th>Mobile.no</th>
            <th>Gender</th>
            <th>Year</th>
            <th>Course</th>
        </tr>
        <br>
        <tr>
           
            <?php
                while($row = mysqli_fetch_assoc($result))
                {
            ?>
            <td><?php echo $row['name'] ?> </td>
            <td><?php echo $row['regno'] ?> </td>
            <td><?php echo $row['dob'] ?> </td>
            <td><?php echo $row['email'] ?> </td>
            <td><?php echo $row['mobile'] ?> </td>
            <td><?php echo $row['gender'] ?> </td>
            <td><?php echo $row['year'] ?> </td>
            <td><?php echo $row['course'] ?> </td>
        </tr>
        <?php
                }
                ?>
    </table>
</div>
</body>
</html>