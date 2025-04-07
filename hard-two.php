<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/four.css">
</head>
<body>
    <form action="hard-three.php" method="post">
    <?php
    session_start();
    
    $number = $_SESSION['secret_number'];

    $numbers = $number%10;
    if ($numbers >= 1){
        $numbers = floor($number / 10) * 10 + 1;
    } else{
        $numbers = floor($number / 10) *10 - 9;
    }
    $lastNumbers = $numbers + 9; 
    
    if(isset($_POST['guess'])){
        $guess = intval($_POST['guess']);
        if ($guess >= $numbers && $guess <= $lastNumbers) {
            echo "<div class='message success'>Молодець! Ти вгадав діапазон" . $numbers . " - " . $numbers + 9 . "!</div>";
        } else {
            echo "<div class='message error'>Hеправильно. Правильний діапазон: " . $numbers . " - " . $numbers + 9 . "</div>";
        }
    }
    
    echo '<h1>Гра "Складний екстрасенс"</h1>';
    echo "<select name='guess'>";
    for($i = $numbers; $i <= $lastNumbers; $i++){
        echo "<option value=" . $i . ">" . $i . "</option>";
    }
    echo "</select>";
    echo "<button type='submit'>=></button>";
    ?>
    </form>
</body>
</html>