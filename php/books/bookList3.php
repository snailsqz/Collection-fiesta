<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header{
            background-color: #f2f2f2;
            padding: 10px;
        }
        header a{
            text-decoration: none;
            color: black;
        }
        header a:hover{
            color: red;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        img {
            width: 120px;
            height: 120px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <header>
        <a href="bookList1.php">Home</a>
    </header>
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "books";

    $conn = mysqli_connect($hostname, $username, $password);
    if (!$conn) {
        die("Failed to connect to the database");
    }
    mysqli_select_db($conn, $dbName) or die("Can't choose database");

    $sql = "SELECT book.bookid, book.bookname, typebook.typename, statusbook.statusname, book.publish, book.unitprice, book.unitrent, book.dayamount, book.picture, book.bookdate FROM book 
    JOIN typebook ON book.typeid = typebook.typeid 
    JOIN statusbook ON book.statusid = statusbook.statusid 
    WHERE book.DayAmount > 5;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Book Details where dayamount > 5</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Book ID</th>";
        echo "<th>Book Name</th>";
        echo "<th>Type Name</th>";
        echo "<th>Status Name</th>";
        echo "<th>Publish</th>";
        echo "<th>Unit Price</th>";
        echo "<th>Unit Rent</th>";
        echo "<th>Day Amount</th>";
        echo "<th>Book Date</th>";
        echo "<th>Picture</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['bookid']}</td>";
            echo "<td>{$row['bookname']}</td>";
            echo "<td>{$row['typename']}</td>";
            echo "<td>{$row['statusname']}</td>";
            echo "<td>{$row['publish']}</td>";
            echo "<td>{$row['unitprice']}</td>";
            echo "<td>{$row['unitrent']}</td>";
            echo "<td>{$row['dayamount']}</td>";
            echo "<td>{$row['bookdate']}</td>";
            echo "<td>";
            if (!empty($row['picture'])) {
                echo "<img src='pictures/{$row['picture']}' alt='Book Picture'>";
            }
            else{
                echo "no image";
            }
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No books found.";
    }

    mysqli_close($conn);
    ?>    
</body>
</html>