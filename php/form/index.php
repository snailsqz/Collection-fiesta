<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <form action="summy.php" method="get">
</head>
<body>
    <div class="mainbox">
        <h1>Student Form</h1>
        <p>First Name :
            <input type="text" name="fname" id="" placeholder="First Name">
        </p>
        <p>Last Name :
            <input type="text" name="lname" id="" placeholder="Last Name">
        </p>
        <p>Email :
            <input type="text" name="email" id="" placeholder="E-mail">
        </p>
        <p>Telephone :
            <input type="text" name="tel" id="" placeholder="xxxxxxxxxx" minlength="9" maxlength="13">
        </p>
        <p>Date of Birth :
            <input type="date" name="age" id="">
        </p>
        <font color="red">*required field</font>
        <p>Address :
            <textarea name="address" cols="20" required></textarea>
        </p>
        <p>Select Gender : 
            <select name="gender" id="">
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </p>
        <p>Select Major : </p>
        <div class="box2">
            <p><input type="radio" name="major" value="IT">⠀IT</p>
            <p><input type="radio" name="major" value="CA">⠀CA</p>
            <p><input type="radio" name="major" value="ITI">⠀ITI</p>
            <p><input type="radio" name="major" value="INE">⠀INE</p>
            <p><input type="radio" name="major" value="INET">⠀INET</p>
        </div>
        
        <div class="box1">
            <input name="btnSubmit" type="submit" value="Submit">
            <input name="btnReset" type="reset" value="Clear">
        </div>
        
    </div>
    

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