<html>
        <head>
        <title>onlyPage</title>
        </head>
        <body>
        <?php
        if(isset($_GET['btnSubmit']))
        {
        $fName = $_GET['fName'];
        $lName = $_GET['lName'];
        $address = $_GET['address'];
        $nickname = $_GET['nickname'];
        $gender = $_GET['gender'];
        $grade = $_GET['grade'];

        echo "<table align='center' width='30%' border='1'>";
echo "<tr><td colspan='2' align='center'><b>Result</b></td></tr>";
echo "<tr><td>First Name :</td><td align='center'> <i> $fName </i>

</td></tr>";

echo "<tr><td>Last Name :</td><td align='center'> <i> $lName </i>

</td></tr>";

echo "<tr><td>Nickname :</td><td align='center'> <i> $nickname </i>

</td></tr>";

echo "<tr><td>gender :</td><td align='center'> <i> $gender </i>

</td></tr>";

echo "<tr><td>Address :</td><td align='center'> <i> $address </i>

</td></tr>";

echo "<tr><td>lastest grade :</td><td align='center'> <i> $grade </i>

</td></tr>";


echo "</table>";}
        else
        {
        ?>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"

        method="get">

        <!-- <form action="#" method="get"> -->
        <!-- <form action="onlyPage.php" method="get"> -->
        First Name :
        <input type="text" name="fName">
        <br><br>
        Last Name :
        <input type="text" name="lName">
        <br><br>
        Nickname :
        <input type="text" name="nickname">
        <br><br>
        <p>
        Gender <td>
        <select name="gender">
        <option value="">Select...</option>
        <option value="M">Male</option>
        <option value="F">Female</option>
        </select>
        </p>
        <br><br>
        Address:
        <textarea name="address" cols="50" rows="5"></textarea>
        <br><br>

        <tr>
        <td>Lastest Grade : </td>
        <td><input type="number" name="grade" max="4" min="0" step="0.1" value=""></td>
        <br><br>

        <input name="btnSubmit" type="submit" value="OK">
        <input name="btnReset" type="reset" value="Clear">
        </form>
        <?php
        }
        ?>
        </body>
        </html>
