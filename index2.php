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
    
    if(isset($_GET['btnSubmit']))
    {
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        $email = $_GET['email'];
        $age = $_GET['age'];
        $age = date_diff(date_create($age), date_create('today'))->y;
        $address = $_GET['address'];
        $gender = $_GET['gender'];
        if (empty($_GET["major"])) {
            echo "Please put your information";
            echo ' <a href="index2.php" class="button">Home</a>';   
        } else{
            $major = $_GET['major'];
            if (empty($fname) || empty($lname) || empty($email) || empty($age) || empty($address) || empty($gender) || empty($major)) 
            echo "Please put your information";
            else {
            echo "<table>";
            echo "<tr><td><p>First Name</p></td><td><p>⠀$fname</p></td></tr>";
            echo "<tr><td><p>Last Name</p></td><td><p>⠀$lname</p></td></tr>";
            echo "<tr><td><p>Email</p></td><td><p>⠀$email</p></td></tr>";
            echo "<tr><td><p>Age</p></td><td><p>⠀$age</p></td></tr>";
            echo "<tr><td><p>Address</p></td><td><p>⠀$address</p></td></tr>";
            echo "<tr><td><p>Gender</p></td><td><p>⠀$gender</p></td></tr>";
            echo "<tr><td><p>Major</p></td><td><p>⠀$major</p></td></tr>";
            echo "</table>";
            echo ' <a href="index2.php" class="button">Home</a>';
            }
        }
    }
    else{
        echo '<form action="#" method="get">';
        echo '<div class="mainbox">';
        echo '    <h1>Student Form</h1>';
        echo '    <p>First Name :';
        echo '        <input type="text" name="fname" value="">';
        echo '    </p>';
        echo '    <p>Last Name :';
        echo '        <input type="text" name="lname" value="">';
        echo '    </p>';
        echo '    <p>Email :';
        echo '        <input type="text" name="email" value="">';
        echo '    </p>';
        echo '    <p>Date of Birth :';
        echo '        <input type="date" name="age" id="">';
        echo '    </p>';
        echo '    <p>Address :';
        echo '        <textarea name="address" cols="20"></textarea>';
        echo '    </p>';
        echo '    <p>Select Gender : ';
        echo '        <select name="gender">';
        echo '            <option value="">Select</option>';
        echo '            <option value="Male"' . ($gender == 'Male' ? ' selected' : '') . '>Male</option>';
        echo '            <option value="Female"' . ($gender == 'Female' ? ' selected' : '') . '>Female</option>';
        echo '            <option value="Other"' . ($gender == 'Other' ? ' selected' : '') . '>Other</option>';
        echo '        </select>';
        echo '    </p>';
        echo '    <p>Select Major : </p>';
        echo '    <div class="box2">';
        echo '        <p><input type="radio" name="major" value="IT"> IT</p>';
        echo '        <p><input type="radio" name="major" value="CA"> CA</p>';
        echo '        <p><input type="radio" name="major" value="ITI"> ITI</p>';
        echo '        <p><input type="radio" name="major" value="INE"> INE</p>';
        echo '        <p><input type="radio" name="major" value="INET"> INET</p>';
        echo '    </div>';
        echo '    <div class="box1">';
        echo '        <input name="btnSubmit" type="submit" value="Submit">';
        echo '        <input name="btnReset" type="reset" value="Clear">';
        echo '    </div>';
        echo '    </div>';
    }
    ?>


    <style>
        textarea {
          resize: none;
          vertical-align: middle;
        }
        input[type='radio']{
            width: 20px;
            height: 20px;
        }
    </style>
</body>
</html>