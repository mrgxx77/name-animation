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
    if(isset($_POST["attents"])){
        $attents = $_POST["attents"];
    } else{
        $attents = 0;
    }
    if(isset($_POST["won"])){
        $won = $_POST["won"];
    } else {
        $won = 0;
    }
    if(isset($_POST['victory'])){
        $victory = $_POST['victory'];
    } else {
        echo $victory;
    }

    $level = $_POST['level'];
    if(isset($_POST["game"])) {
        $minimum = rand(0, 1);
        $attents++;
        $game = $_POST['game'];
        if($level == "easy"){
            if($game == $minimum){
                echo "<p class='echo'>ти вийграв   <p>";
                $won++;
            } else{
                $minimum = rand(0, 1);
                if($game == $minimum){
                    echo "<p class='echo'>ти вийграв   <p>";
                    $won++;
                } else{
                    echo "<p class='echo'>ти програв   <p>";
                }
            }
        } else if ($level == "normal"){
            if ($game == $minimum){
                echo '<p class="echo">ти вийграв   <p>';
                $won++;
            } else{
                echo '<p class="echo">ти програв   <p>';
            }
        
        } else if($level == "hard"){
            if($game == $minimum){
                $minimum = rand(0, 1);
                if($game == $minimum){
                    echo "<p class='echo'>ти виграв   <p>";
                    $won++;
                } else {
                    echo "<p class='echo'>ти програв   <p>";
                }
            } else{
                echo "<p class='echo'>ти програв   <p>";
            }
        }

        echo $won;
    }
        
            ?>
            <form action="
                    <?php 
                    if($attents < 10){
                        echo "game.php";
                        } else{
                            echo "result.php";
                        }
                    ?>
                " method="post">
                <div class="wrapper">
                    <h1>вибери орла і решку</h1>
                    <div class="flex-between">
                        <input type="hidden" name="attents" value="<?= $attents ?>">
                        <input type="hidden" name="won" value="<?= $won ?>">
                        <input type="hidden" name="level" value="<?= $level ?>">
                        <input type="hidden" name="victory" value="<?= $victory ?>">

                        <p class="photo">
                            <button type="submit" name="game" value="1"></button>
                    </p>
                        <p class="photo-two">
                            <button type="submit" name="game" value="0"></button>
                    </p>
                    </div>
                </div>
            </form>

</body>
</html>