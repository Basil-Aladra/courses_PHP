<?php
$conn = MySQLi_Connect("localhost","root","","db_new_project_1") or die("not connected");

$Name = $_POST['name'];
$Email = $_POST['email'];
$PassWord = $_POST['password'];
if(!$Name) echo "name fillde"."<br>";
if(!$Email) echo "email fillde"."<br>";
if(!$PassWord) echo "password fillde"."<br>";
//if (!($Name) || !($Email) || !($PassWord)) 
  //  die("Name and Email and Password are required");

$q = "INSERT INTO pusers(name,email,password) VALUES('$Name','$Email','$PassWord');";
$Result = mysqli_query($conn, $q) or die("Error");
if($Result) {
    header("location:successPage.html");
   
} 
//echo "Inserted Successfully";
//header("location:create.html");
?>