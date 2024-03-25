<?php
session_start();
$conn = MySQLi_Connect("localhost","root","","db_new_project_1") or die("not connected");

$Login_Name = $_POST['Lname'];
$Login_Pass = $_POST['Lpass'];

if(!$Login_Name) die ("name fillde"."<br>");
if(!$Login_Pass) die ("password fillde"."<br>");
$q = "SELECT * FROM pusers WHERE name='$Login_Name' && password='$Login_Pass' ";

$Result = MySQLi_Query($conn, $q) or die("Error");
$row = MySQLI_fetch_assoc($Result);
$N = MySQLi_num_rows($Result);
if($N == 0) die("this user not found");
$_SESSION['name'] = $row['name'];
$_SESSION['email'] = $row['email'];

if($Result) {
   // echo "Hi";
   // echo "Welcome ".$_SESSION['name'];
   header("location:contact.php");
}

?>