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
        // session_destroy();

        if (!isset($_SESSION['secret_number'])) {
            $_SESSION['secret_number'] = rand(1, 10);
            $_SESSION['attempts'] = 3;
            $_SESSION['history'] = [];
        }

        // Обробка вибору користувача
        if (isset($_POST['guess'])) {
            $guess = intval($_POST['guess']);
            $_SESSION['history'][] = $guess;
            
            if ($guess == $_SESSION['secret_number']) {
                echo "<div class='message success'>Вітаємо! Ви вгадали число " . $_SESSION['secret_number'] . "!</div>";
                session_destroy();
            } else if ($guess != $_SESSION['secret_number']) {
                $_SESSION['attempts']--;
                if ($_SESSION['attempts'] > 0) {
                    echo "<div class='message error'>Неправильно! У вас залишилось " . $_SESSION['attempts'] . " спроб</div>";
                } else {
                    echo "<div class='message error'>Ви програли! Загадане число було " . $_SESSION['secret_number'] . "</div>";
                    session_destroy();
                }
            }
        }
        // var_dump($_SESSION['secret_number']);
        // var_dump($_SESSION['attempts']);
        // var_dump($_SESSION['history']);
    ?>

    <h1>Гра "Екстрасенс"</h1>
    
    <?php if (isset($_SESSION['attempts']) && $_SESSION['attempts'] > 0): ?>
        <form method="post">
            <label for="guess">Ваш варіант:</label>
            <select name="guess" id="guess">
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <option value="<?= $i ?>" <?= in_array($i, $_SESSION['history']) ? 'disabled' : '' ?>><?= $i ?></option>
                <?php endfor; ?>
            </select>
            <button type="submit">Спробувати</button>
        </form>
    <?php else: ?>
        <form method="post">
            <button type="submit">Почати заново</button>
        </form>
    <?php endif; ?>
</body>
</html>