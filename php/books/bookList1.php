<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            padding: 10px;
            color: #fff;
        }
        header a {
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
        }
        h3 {
            margin-top: 20px;
        }
        table {
            width: 500px;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #333;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        a {
            color: #333;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <a href="bookList2.php">BookList2</a>
        <a href="bookList3.php">BookList3</a>
    </header>
    <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbName = "books";
        $conn = mysqli_connect($hostname, $username, $password);
        if(!$conn)
            die("Fail to connect");
        mysqli_select_db($conn, $dbName) or die("Can't Choose db");
        mysqli_query($conn,"set character_set_connection=utf8mb4");
        mysqli_query($conn,"set character_set_client=utf8mb4");
        mysqli_query($conn,"set character_set_results=utf8mb4");
        $sql = "select * from book order by bookId";
        $result = mysqli_query ($conn, $sql);
        echo'<center>';
        echo'<br><h3>รายชื่อหนังสือ</h3>';
        echo '<table>';
        echo '<tr><td><a href="bookInsert1.php">เพิ่มรายการหนังสือ</a></td><tr>';
        echo '</table>';
        echo '<br><table>';
        echo '<th>ลำดับ</th>';
        echo '<th>รหัสหนังสือ</th>';
        echo '<th>ชื่อหนังสือ</th>';
        echo '<th>แก้ไข</th>';
        echo '<th>ลบ</th></tr>';
        $row=1;
        while ($rs = mysqli_fetch_array($result))
        {
            echo '<tr>';
            echo '<td>'.$row.'</td>';
            echo '<td><a href="bookDetail1.php?bookId='.$rs[0].'">'.$rs[0].'</a></td>';
            echo '<td align="left">'.$rs[1].'</td>';
            echo '<td><a href="bookUpdate1.php?bookId='.$rs[0].'">[แก้ไข]</a></td>';
            echo '<td><a href="bookDelete1.php?bookId='.$rs[0].'"onclick="return confirm(\' ยืนยันการลบข้อมูลหนังสือ '.$rs[1].'\')">[ลบ]</a></td>';
            echo '</tr>';
            $row++;
        }
        echo '</table>';
        mysqli_close ( $conn );
        echo '<br><br><a href="menu1.php">Back to menu</a>';
        echo '</center>';
    ?>    
</body>
</html>