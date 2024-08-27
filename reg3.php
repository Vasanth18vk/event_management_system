<?php
 if(isset($_POST["add"])){
	$course = $_POST['course'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$mobile = $_POST['mobile'];
	$name = $_POST['name'];
	$regno = $_POST['regno'];
	$year = $_POST['year'];

$con = mysqli_connect("localhost:3306", "root", "", "mini");
$sql ="INSERT INTO student (course,dob,email,gender,mobile,name,regno,year) VALUES ('$course','$dob', '$email', '$gender','$mobile', '$name', '$regno','$year')";

$r=mysqli_query($con,$sql );
if($r){
	echo '<script type ="text/JavaScript">';  
	echo 'alert("Registration success full")';  
	echo '</script>';  
}
else{
	echo '<script type ="text/JavaScript">';  
	echo 'alert("Something went wrong")';  
	echo '</script>'; 
}
}
?>