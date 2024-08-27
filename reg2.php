<?php
if (isset($_POST["sub"])) {
    // Retrieve form data for Member 1
    $name1 = $_POST['name1'];
    $year1 = $_POST['year1'];
    $regno1 = $_POST['regno1'];
    $course1 = $_POST['course1'];
    $email1 = $_POST['email1'];
    $gender1 = $_POST['gender1'];
    $mobile1 = $_POST['mobile1'];
    $clgname1 = $_POST['clgname1'];

    // Retrieve form data for Member 2
    $name2 = $_POST['name2'];
    $year2 = $_POST['year2'];
    $regno2 = $_POST['regno2'];
    $course2 = $_POST['course2'];
    $email2 = $_POST['email2'];
    $gender2 = $_POST['gender2'];
    $mobile2 = $_POST['mobile2'];
    $clgname2 = $_POST['clgname2'];

    // Retrieve form data for Member 3
    $name3 = $_POST['name3'];
    $year3 = $_POST['year3'];
    $regno3 = $_POST['regno3'];
    $course3 = $_POST['course3'];
    $email3 = $_POST['email3'];
    $gender3 = $_POST['gender3'];
    $mobile3 = $_POST['mobile3'];
    $clgname3 = $_POST['clgname3'];

    // Retrieve form data for Member 4
    $name4 = $_POST['name4'];
    $year4 = $_POST['year4'];
    $regno4 = $_POST['regno4'];
    $course4 = $_POST['course4'];
    $email4 = $_POST['email4'];
    $gender4 = $_POST['gender4'];
    $mobile4 = $_POST['mobile4'];
    $clgname4 = $_POST['clgname4'];

    // Retrieve image data
    $image1 = $_FILES['image1']['image1'];
    
    // Connect to the database (you should update the database credentials)
    $con = mysqli_connect("localhost:3306", "root", "", "mini");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query to insert data into the database
    $sql = "INSERT INTO reg3 (name1, year1, regno1, course1, email1, gender1, mobile1, clgname1,
                               name2, year2, regno2, course2, email2, gender2, mobile2, clgname2,
                               name3, year3, regno3, course3, email3, gender3, mobile3, clgname3,
                               name4, year4, regno4, course4, email4, gender4, mobile4, clgname4, image1)
            VALUES ('$name1','$year1','$regno1','$course1','$email1','$gender1','$mobile1','$clgname1',
                    '$name2','$year2','$regno2','$course2','$email2','$gender2','$mobile2','$clgname2',
                    '$name3','$year3','$regno3','$course3','$email3','$gender3','$mobile3','$clgname3',
                    '$name4','$year4','$regno4','$course4','$email4','$gender4','$mobile4','$clgname4', $image)";

    if (mysqli_query($con, $sql)) {
        echo '<script type="text/javascript">';
        echo 'alert("Registration successful")';
        echo '</script>';
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Something went wrong: ' . mysqli_error($con) . '")';
        echo '</script>';
    }

    // Close the database connection
    mysqli_close($con);
}
?>