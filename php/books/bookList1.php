<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbName = "bookStore";
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
        echo '<table width="500" border="0">';
        echo '<tr><td align="left"><a href="bookInsert1.php">เพิ่มรายการหนังสือ</a></td><tr>';
        echo '</table>';
        echo '<br><table width="500" border="1">';
        echo '<th width ="50" >ลำดับ</th>';
        echo '<th width ="100">รหัสหนังสือ</th>';
        echo '<th width ="200">ชื่อหนังสือ</th>';
        echo '<th width ="80">แก้ไข</th>';
        echo '<th width ="80">ลบ</th></tr>';
        $row=1;
        while ($rs = mysqli_fetch_array($result))
        {
            echo '<tr align="center" bgcolor="">';
            echo '<td>'.$row.'</td>';
            echo '<td><a

            href="bookDetail1_edit.php?bookId='.$rs[0].'">'.$rs[0].'</a></td>';
            echo '<td align="left">'.$rs[1].'</td>';
            echo '<td><a href="bookUpdate1.php?bookId='.$rs[0].'">[แก้ไข]

            </a></td>';

            echo '<td><a href="bookDelete1.php?bookId='.$rs[0].'"
            onclick="return confirm(\' ยืนยันการลบข้อมูลหนังสือ '.$rs[1].'\')">[ลบ]</a></td>';
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