<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Random</title>
    <link rel="stylesheet" href="gradecss.css">
</head>
<body>
    <?php
        $maxRow = 10;
        $maxCol = 4 ;
        for ( $r = 0; $r < $maxRow ; $r++ ) {
            for ( $c = 0; $c < $maxCol ; $c++ ) {
                if($c == 0)$score[ $r ][ $c ] = rand(0, 10); 
                if($c == 1)$score[ $r ][ $c ] = rand(0, 20); 
                if($c == 2)$score[ $r ][ $c ] = rand(0, 35); 
                if($c == 3)$score[ $r ][ $c ] = rand(0, 35); 
            }
        }
        echo "<h1 style='margin:0px 0px 20px 0px;'>Random Score</h1>";
        echo "<table align='center'>";
        echo "<tr><td width='50' align='center' class='bb'>No.</td>";
        echo "<td width='100' align='center' class='bb'>HW</td>";
        echo "<td width='100' align='center' class='bb'>Assign</td>";
        echo "<td width='100' align='center' class='bb'>Mid</td>";
        echo "<td width='100' align='center' class='bb'>Final</td>";
        echo "<td width='140' align='center' class='bb'>Total Score</td></tr>";
        for ( $r = 0; $r < $maxRow ; $r++ ) {
            $sum = 0;
            echo "<tr>";
            echo "<td align='center'>". $r+1 ."</td>";
            for ( $c = 0; $c < $maxCol ; $c++ ) {
                $sum += $score[$r][$c];
                echo "<td align='center'>" . $score[$r][$c] . "</td>";
            }
            if($sum >= 80){
                echo "<td align='center' style='color:#e24769;  font-weight: 800;'>". $sum ."</td>";
            }
            else if($sum >= 70){
                echo "<td align='center' style='color:#4785e2;  font-weight: 800;'>". $sum ."</td>";
            }
            else if($sum >= 60){
                echo "<td align='center' style='color:#781ae2;  font-weight: 400;'>". $sum ."</td>";
            }
            else
                echo "<td align='center' style='color:#9255d8;'>". $sum ."</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>