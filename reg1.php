<?php
    if(isset($_POST["submit"])){

       $namet = $_POST['namet'];
       $namec = $_POST['namec'];
       $emailc = $_POST['emailc'];
       $mobilec = $_POST['mobilec'];

       $name1 = $_POST['name1'];
       $year1 = $_POST['year1'];
       $age1 = $_POST['age1'];
      

       $name2 = $_POST['name2'];
       $year2 = $_POST['year2'];
       $age2 = $_POST['age2'];
      

       $name3 = $_POST['name3'];
       $year3 = $_POST['year3'];
       $age3 = $_POST['age3'];
       

       $name4 = $_POST['name4'];
       $year4 = $_POST['year4'];
       $age4 = $_POST['age4'];
      

       $name5 = $_POST['name5'];
       $year5 = $_POST['year5'];
       $age5 = $_POST['age5'];
      

       $name6 = $_POST['name6'];
       $year6 = $_POST['year6'];
       $age6 = $_POST['age6'];
      

       $name7 = $_POST['name7'];
       $year7 = $_POST['year7'];
       $age7 = $_POST['age7'];
      

       $name8 = $_POST['name8'];
       $year8 = $_POST['year8'];
       $age8 = $_POST['age8'];
       

       $name9 = $_POST['name9'];
       $year9 = $_POST['year9'];
       $age9 = $_POST['age9'];
      

       $name10 = $_POST['name10'];
       $year10 = $_POST['year10'];
       $age10 = $_POST['age10'];
       

       $name11 = $_POST['name11'];
       $year11 = $_POST['year11'];
       $age11 = $_POST['age11'];
       

       $name12 = $_POST['name12'];
       $year12 = $_POST['year12'];
       $age12 = $_POST['age12'];
      

       $name13 = $_POST['name13'];
       $year13 = $_POST['year13'];
       $age13 = $_POST['age13'];
     
       $name14 = $_POST['name14'];
       $year14 = $_POST['year14'];
       $age14 = $_POST['age14'];
      

       $name15 = $_POST['name15'];
       $year15 = $_POST['year15'];
       $age15 = $_POST['age15'];
      
      
      
      

   
   $con = mysqli_connect("localhost:3306", "root", "", "mini");

$sql = "INSERT INTO reg1 (namet, namec, emailc, mobilec, name1, year1, age1, name2, year2, age2, name3, year3, age3, name4, year4, age4, name5, year5, age5, name6, year6, age6, name7, year7, age7, name8, year8, age8, name9, year9, age9, name10, year10, age10, name11, year11, age11, name12, year12, age12, name13, year13, age13, name14, year14, age14, name15, year15, age15 ,image1)
VALUES ('$namet', '$namec', '$emailc', '$mobilec', '$name1', '$year1', '$age1', '$name2', '$year2', '$age2', '$name3', '$year3', '$age3',' $name4', '$year4',' $age4',' $name5', '$year5', '$age5', '$name6', '$year6', '$age6', '$name7',' $year7', '$age7', '$name8',' $year8', '$age8', '$name9', '$year9', '$age9', '$name10', '$year10', '$age10', '$name11', '$year11',' $age11', '$name12',' $year12',' $age12', '$name13', '$year13', '$age13',' $name14', '$year14',' $age14',' $name15', '$year15',' $age15')";
$r = mysqli_query($con,$sql);

if ($r) {
echo '<script type="text/javascript">';
echo 'alert("Registration successful")';
echo '</script>';
} else {
echo '<script type="text/javascript">';
echo 'alert("Something went wrong")';
echo '</script>';
}
    }
   ?>