<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $bookId = $_REQUEST['bookId'];
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "books";
    $conn = mysqli_connect($hostname, $username, $password);
    if (!$conn)
        die("ไม่สามารถติดต่อกับ mySQL ได้");
    mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");
    $sql = "delete from book where bookId='$bookId'";
    mysqli_query($conn, $sql) or die ("delete จากตาราง book มีข้อผิดพลาดเกิดขึ้น".mysqli_error());
    mysqli_close($conn);
    header("location:bookList1.php");
?>
</body>
</html>