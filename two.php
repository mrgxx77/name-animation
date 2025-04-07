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
            $game = $_POST['game'];
        }
        if($game == "people") {
            echo "круто, дивися на світлофори та за машинами!";
            echo '
                <form action="three.php" method="post">
                    <h1>ти йдеш по дорозі, що ти бачиш?</h1>
                    <select name="see" id="d">
                        <option value="car">машину</option>
                        <option value="velo">велосипедиста</option>
                        <option value="light">світлофор</option>
                        <option value="shop">магазин</option>
                    </select>
                    <input type="submit">
                </form>
            ';
        } else if($game == "car") {
            echo "круто, дивися за пішоходами та на світлофор!";
            echo '
                <form action="four.php" method="post">
                <h1>ти їдеш по дорозі, що ти бачиш?</h1>
                    <select name="see" id="d">
                        <option value="car">машину</option>
                        <option value="velo">велосипедиста</option>
                        <option value="light">світлофор</option>
                        <option value="human">людину на пешоході</option>
                        <option value="gas-station">заправкy</option>
                    </select>
                    <input type="submit">
                </form>
            ';
        } else {
            // echo "вибери за кого ти будеш грати";
        }
        
    ?>
</body>
</html>