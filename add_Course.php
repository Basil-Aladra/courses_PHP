<?php
session_start();
$conn = MySQLi_Connect("localhost","root","","db_new_project_1") or die("not connected");

$Name = $_SESSION['name'];
$Course_name = $_POST['course_name'];
$Price = $_POST['price'];
$D_of_reg = $_POST['d_of_reg'];

$q = "INSERT INTO courses_reg(name,course_name,price,d_of_reg) VALUES('$Name','$Course_name','$Price','$D_of_reg');";
$Result = mysqli_query($conn, $q) or die("Error");
if($Result) {
    echo "<h2>Payment has been completed &#129297;</h2>";
} 


?>