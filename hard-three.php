<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/four.css">
</head>
<body>
    <?php
    
    session_start();
    $numbers = $_SESSION['secret_number'];
    if (isset($_SESSION['attempts'])) {
        $attempts = $_SESSION['attempts'];
    } else{
        $attempts = $_SESSION['attempts'] = 3;
    }
    if (isset($_SESSION['history'])) {
        $history = $_SESSION['history'];
    } else{
        $history = $_SESSION['history'] = [];
    }

    $y = 0;
    if($y >= 6){
        $numbers+=6;
        $ln = $numbers-6;
        // ln = last number
    } else if($y <= 6 && $y >= 1){
        $numbers+=4;
        $ln = $numbers-4;
    } else if($y == 0){
        $numbers-=4;
        $ln = $numbers+4;
    }

    // var_dump($_SESSION['secret_number']);
    // echo " secret_number<br>";
    // var_dump($_SESSION['attempts']);
    // echo " attempts<br>";
    // var_dump($_SESSION['history']);
    // echo " history<br>";
    // echo $numbers . " radius<br>";
    // echo $ln . " last number";

    if (isset($_POST['guess'])) {
        $guess = intval($_POST['guess']);
        if (!isset($_SESSION['history']) || !is_array($_SESSION['history'])) {
            $_SESSION['history'] = []; 
        }
        array_push($_SESSION['history'], $guess);
        // array_push($_SESSION['history'], $guess);
        
        if ($guess == $_SESSION['secret_number']) {
            echo "<div class='message success'>Вітаємо! Ви вгадали число " . $_SESSION['secret_number'] . "!</div>";
            session_destroy();
            // echo '<form method="post" action="a-psychic-hard.php">';
            // echo '<button type="submit">Почати заново</button>';
            // echo '</form>';
        } else if ($guess != $_SESSION['secret_number']) {
            $attempts = $_SESSION['attempts'];
            $_SESSION['attempts']--;
            if ($attempts > 0) {
                echo "<div class='message error'>Неправильно! У вас залишилось " . $attempts . " спроб</div>";
            } else {
                echo "<div class='message error'>Ви програли! Загадане число було " . $_SESSION['secret_number'] . "</div>";
                session_destroy();
            }
        }
    }
    ?>

    <h1>Гра "Складний екстрасенс"</h1>


    <?php if (isset($attempts) && $attempts > 0): ?>
        <form method="post">
            <label for="guess">Ваш варіант:</label>
            <select name="guess" id="guess">
            <?php
            if($y >= 1){
                for ($i = $numbers; $i >= $ln; $i--){
                    echo "<option value='$i' " . (in_array($i, $_SESSION['history']) ? 'disabled' : '') . ">$i</option>";
                }
            } else {
                for ($i = $numbers; $i <= $ln; $i++){
                    echo "<option value='$i' " . (in_array($i, $_SESSION['history']) ? 'disabled' : '') . ">$i</option>";
                }
            }
            ?>
            </select>
            <button type="submit">Спробувати</button>
        </form>
    <?php else: ?>
        <form method="post" action="a-psychic-hard.php">
            <button type="submit">Почати заново</button>
        </form>
    <?php endif; ?> 

</body>
</html>