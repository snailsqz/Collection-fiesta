<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php
    $id = $_GET['customerid'];
    $fname = $_GET['fname'];
    $lname =$_GET['lname'];
    $email = $_GET['email'];
    $tel = $_GET['tel'];
    $age = $_GET['age'];
    $address = $_GET['address'];
    $gender = $_GET['gender'];
    $age = date_diff(date_create($age), date_create('today'))->y;
    $major = $_GET['major'];


    if (empty($_GET["major"])) {
        echo "<script>alert('Please put your major');history.back()</script>";
        exit();
    } else {
        $major = $_GET['major'];
        if (empty(trim($fname)) || empty(trim($lname)) || empty(trim($email)) || empty(trim($age)) || empty(trim($address))
         || empty(trim($gender)) || empty(trim($major))) {
            echo "<script>alert('Please put your information');history.back()</script>";
            exit();
        }
        else if(!preg_match("/^[ก-ฯะ-์a-zA-Z]+$/", $fname) || !preg_match("/^[ก-ฯะ-์a-zA-Z]+$/", $lname)) {
            echo "<script>alert('Please put only letters');history.back()</script>";
            exit();
        } 
        else if(!filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('$email is not valid email address');history.back()</script>";
            exit();
        } 
        else if(!ctype_digit(trim($tel))) {
            echo "<script>alert('$tel is not valid telephone number');history.back()</script>";
            exit();
        } 
        else {
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $dbName = "customertest";
            $conn = mysqli_connect($hostname, $username, $password);
            echo '<center>';
            if (!$conn)
                die("ไม่สามารถติดต่อกับ mySQL ได้");
            mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล customertest ได้");
            mysqli_query($conn,"set character_set_connection=utf8mb4");
            mysqli_query($conn,"set character_set_client=utf8mb4");
            mysqli_query($conn,"set character_set_results=utf8mb4");

            $sql = "insert into customer(customerID,firstname, lastname, email, telephone, age, address, gender,
            major) values ('$id','$fname', '$lname', '$email', '$tel', '$age','$address', '$gender', '$major')";
            mysqli_query($conn, $sql) or die("insert ลงตาราง book มีข้อผิดพลาดเกิดขึ้น" .mysqli_error());
            echo '<h2>บันทึกข้อมูลหนังสือรหัส '.$id.' เรียบร้อย</h2>';
            mysqli_close($conn);
            echo "<table>";
            echo "<tr><td><p>ID</p></td><td><p>⠀$id</p></td></tr>";
            echo "<tr><td><p>First Name</p></td><td><p>⠀$fname</p></td></tr>";
            echo "<tr><td><p>Last Name</p></td><td><p>⠀$lname</p></td></tr>";
            echo "<tr><td><p>Email</p></td><td><p>⠀$email</p></td></tr>";
            echo "<tr><td><p>Tel.</p></td><td><p>⠀$tel</p></td></tr>";
            echo "<tr><td><p>Age</p></td><td><p>⠀$age</p></td></tr>";
            echo "<tr><td><p>Address</p></td><td><p>⠀$address</p></td></tr>";
            echo "<tr><td><p>Gender</p></td><td><p>⠀$gender</p></td></tr>";
            echo "<tr><td><p>Major</p></td><td><p>⠀$major</p></td></tr>";
            echo "</table>";
        }
    }
    ?>
    <br>
    <br>
    <a href="index.php" class="button">Home</a>
</body>
</html>
