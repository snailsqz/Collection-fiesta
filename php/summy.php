<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $email = $_GET['email'];
    $age = $_GET['age'];
    $address = $_GET['address'];
    $gender = $_GET['gender'];
    $age = date_diff(date_create($age), date_create('today'))->y;

    if (empty($_GET["major"])) {
        echo "Please put your information";
    } else {
        $major = $_GET['major'];
        if (empty($fname) || empty($lname) || empty($email) || empty($age) || empty($address) || empty($gender) || empty($major)) {
            echo "Please put your information";
        } else {
            echo "<table>";
            echo "<tr><td><p>First Name</p></td><td><p>⠀$fname</p></td></tr>";
            echo "<tr><td><p>Last Name</p></td><td><p>⠀$lname</p></td></tr>";
            echo "<tr><td><p>Email</p></td><td><p>⠀$email</p></td></tr>";
            echo "<tr><td><p>Age</p></td><td><p>⠀$age</p></td></tr>";
            echo "<tr><td><p>Address</p></td><td><p>⠀$address</p></td></tr>";
            echo "<tr><td><p>Gender</p></td><td><p>⠀$gender</p></td></tr>";
            echo "<tr><td><p>Major</p></td><td><p>⠀$major</p></td></tr>";
            echo "</table>";
        }
    }
    ?>
    <a href="index.php" class="button">Home</a>
</body>
</html>
