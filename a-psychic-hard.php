<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/four.css">
</head>
<body>
    <form method="post" action="hard-two.php">
    <?php
        session_start();
        // session_destroy();

        echo '<h1>Гра "Складний екстрасенс"</h1>';
            
        // if (!isset($_SESSION['secret_number'])) {
            //     $_SESSION['history'] = [];
            // }
            $_SESSION['secret_number'] = 10;
        var_dump($_SESSION['secret_number']);

        echo '<select name="guess_two" id="guess">';
        for($i = 1; $i <= 100; $i+=10){
            echo "<option value=" .$i . ">" . $i ." - " . $i+9 . "</option>";
        }
        echo '</select>';
        echo '<button type="submit">Спробувати</button>';
    ?>      
    <input type="hidden" name="guess" value="<?= $guess_two ?>">
    </form>
</body>
</html>