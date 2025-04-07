<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <form action="four.php" method="post">
                <h1>ти їдеш по дорозі, що ти бачиш?</h1>
                    <select name="see" id="d">
                        <option value="car">машину</option>
                        <option value="velo">велосипедиста</option>
                        <option value="light">світлофор</option>
                        <option value="human">людину на пешоході</option>
                    </select>
                    <input type="submit">
                </form> -->

<?php
if($_POST) {
    $see = $_POST['see'];
    if($see == "car"){
        echo "пропусти машину та їдь";
    } elseif($see == "velo"){
        echo "пропусти велосипедиста";
    } elseif($see == "light"){
        echo '
            <form action="five.php" method="post">
                <h1>якого кольору світлофор?</h1>
                <select name="trafic-light" id="c">
                    <option value="red">червоний</option>
                    <option value="yellow">жовтий</option>
                <option value="green">зелений</option>
                </select>
                <input type="submit">
            </form>
        ';
    } else if($see == "human"){
        echo "пропусти людину";
    } else if($see == "gas-station"){
        if(isset($_POST['procent'])) {
            $procent = $_POST['procent'];
            if($procent < 40){
                echo "заїдь на заправку";
            } elseif($procent >= 40){
                echo '
                    <h1>поки що на заправку не потрібно</h1>
                ';
            }
        }
        echo '
            <form action="four.php" method="post">
                <h2>ти бачиш заправку, скільки топлива у тебе є?</h2>
                <input type="number" maxlenght="100" name="procent">
                <input type="hidden" name="see" value="' . $see . '">
                <input type="submit">
            </form>
        ';
    }
}
?>
</body>
</html>