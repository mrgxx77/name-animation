<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
    if(isset($_POST['victory'])){
        $victory = $_POST['victory'];
    } else {
        $victory = 0;
    }

?>

    <form action="game.php" method="post">
        <div class="wrapper">
            <h1>ЯКИЙ РІВЕНЬ СКЛАДНОСТІ ТИ ХОЧЕШ?</h1>
                <input type="hidden" name="victory" value="<?= $victory ?>">
                <div class="inputiki">
                    <label>
                       <p><button type="submit" name="level" value="easy"> легкий</p>
                    </label>
                    <label>
                        <p>
                            <button type="submit" name="level" value="normal"
                            <?php
                            if($victory == 0){
                                echo 'disabled';
                            }
                            ?>
                            >середній
                        </p>
                    </label>
                    <label>
                        <p>
                            <button type="submit" name="level" value="hard"
                            <?php
                            if($victory != 2){
                                echo "disabled";
                            }
                            ?>
                            >складний<button>
                        </p>
                    </label>
                </div>
        </div>
    </form>
</body>
</html>