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
    $light = $_POST['light'];
    $road = $_POST['road'];
    $pedestrian = $_POST['pedestrian'];
    $car = $_POST['car'];
}
if($light == "green" && $road == "yes" && $pedestrian == "no" && $car == "no"){
    echo "можеш їхати!";
} else if($light == "red"){
    echo "зачекай поки світло стане зеленим";
} else if($road == "no"){
    echo "подивися чи немає машин на головній дорозі";
} else if($pedestrian == "yes"){
    echo "зачекай поки пішоходи пройдуть";
} else if($car == "yes"){
    echo "зачекай поки машини проїдуть";
} else{
    echo "введи всі дані"; 
}
?>

<form action="#" method="post">
        <p> який колір світлофора?
            <label>
                <p>зелений <input type="radio" name="light" value="green"></p>
                <p>червоний <input type="radio" name="light" value="red"></p>
            </label>
        </p>
        <p> чи ти їдеш по головній дорозі?
            <label>
                <p>так<input type="radio" name="road" value="yes"></p>
                <p>ні<input type="radio" name="road" value="no"></p>
            </label>
        </p>
        <p> чи немає пішоходів?
            <label>
                <p>є<input type="radio" name="pedestrian" value="yes"></p>
                <p>немає<input type="radio" name="pedestrian" value="no"></p>
            </label>
        </p>
        <p> чи немає машин
            <label>
                <p>є<input type="radio" name="car" value="yes"></p>
                <p>немає<input type="radio" name="car" value="no"></p>
            </label>
        </p>
        <p>
            <label>
                <input type="submit">
            </label>
        </p>
    </form>

</body>
</html>