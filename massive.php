<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/two-style.css">
</head>
<body>
    <?php

    $a = ['math', 'chemistry', 'IT', 'physics', 'biology'];
    $c = ['Monday', 'Tuesday', 'Wednesday', 'Thuersday', 'Friday'];
    
    ?>
    <table>
        <tbody>
            <tr>
                <?php
                    for($i = 0; $i < count($c); $i++){
                        echo '<td> ' . $c[$i] . '</td>';
                    }
                ?>
            </tr>
            <tr>
                <?php
                    for($s = 0; $s < count($a); $s++){
                        echo '<td> ' . $a[$s] . '</td> ';
                    }
                ?>
            </tr>
        </tbody>
    </table>
</body>
</html>