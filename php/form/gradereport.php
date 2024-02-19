<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
    <link rel="stylesheet" href="gstyle.css">
</head>
<body>
    <table>
        <tr>
            <td align="center">Student No.</td>
            <td align="center">Score</td>
            <td align="center">Grade</td>
        </tr>
    <?php
        $MaxStudent = 10;
        for($n = 0 ; $n < $MaxStudent; $n++) 
            $score[$n] = rand(50, 100);
        
        $average = 0;
        for($n = 0 ; $n < $MaxStudent; $n++) {
            $average += $score[$n];
            echo '<tr><td align="center" width="90">' . ($n +1 ) . '</td>';
            echo '<td align="center" width="90">' . $score[$n] . '</td>';
            echo '<td align="center" width="90">' . checkGrade($score[$n]) . '</td></tr>';
            if($n == $MaxStudent-1){
                $average /= ($MaxStudent + 1);
                echo '<tr><td colspan = "3" align="center"> Average Score : '. number_format($average,1) .'</td></tr>';
            }
        }

        function checkGrade($s){
            if($s <= 100 && $s >= 80)return 'A';
            else if($s <= 79&& $s >= 70)return 'B';
            else if($s <= 69&& $s >= 60)return 'C';
            else if($s <= 59&& $s >= 50)return 'D';
            else if($s <= 49&& $s >= 0)return 'F';
            return 'Null';
        }
    ?>
    </table>
</body>
</html>