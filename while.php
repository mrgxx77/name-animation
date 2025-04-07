<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $number = 1;
    while ($number <= 20){
        $gg = $number % 2;
        if($gg == 1){
            echo $number . "<br>";
        }
        $number++;
    }
    ?>
</body>
</html>