<?php
session_start(); // تأكد من استخدام هذا في بداية كل ملف يحتوي على PHP

$conn = mysqli_connect("localhost", "root", "", "db_new_project_1") or die("not connected");

// تحديد معرف المستخدم من الجلسة
$username = $_SESSION['name'];

$q = "SELECT * FROM courses_reg WHERE name = '$username'";
$result = mysqli_query($conn, $q) or die("No Record Found");

// عرض النتائج
while ($row = mysqli_fetch_assoc($result)) {
    // اعرض البيانات كما تريد
    echo "Course Name: " . $row['course_name'] . "<br>";
    echo "Price: " . $row['price'] . "<br>";
    echo "Date of Registration: " . $row['d_of_reg'] . "<br>";
    echo "<hr>";
}

// إغلاق اتصال قاعدة البيانات
mysqli_close($conn);
?>