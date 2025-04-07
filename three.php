<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <h1>ти йдеш по дорозі, що ти бачиш?</h1>
    <select name="see" id="d">
        <option value="car">машину</option>
        <option value="velo">велосипедиста</option>
        <option value="light">світлофор</option>
        <option value="shop">магазин</option>
    </select>
    <input type="submit"> -->

    <?php
    if($_POST) {
        $see = $_POST['see'];
        if($see == "car"){
            echo "пропусти машину та їдь";
        } elseif($see == "velo"){
            echo "пропусти або зачекай поки вони пропустить тебе";
        } elseif($see == "light"){
            echo '
            
            <form action="five.php" method="post">
                <h1>якого кольору світлофор?</h1>
                <select name="trafic-light" id="c">
                <option value="red">червоний</option>
                <option value="green">зелений</option>
                </select>
                <input type="submit">
            </form>
            ';
        }
    }
    ?>
</body>
</html>