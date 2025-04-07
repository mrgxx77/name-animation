<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if($_POST) {
        $trafic_light = $_POST["trafic-light"];
        if($trafic_light == "red"){
            echo "стій";
        } elseif($trafic_light == "yellow"){
            echo "приготуйся їхати";
        } elseif($trafic_light == "green"){
            echo "йди/їдь";
        }
    }
?>
</body>
</html>