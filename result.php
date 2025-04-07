<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Результати</h1>

    <?php
        if(isset($_POST['victory'])){
            $victory = $_POST['victory'];
        } else {
            $victory = 0;
        }
        if($_POST){
            $attents = $_POST["attents"];
            $won = $_POST["won"];
            $level = $_POST["level"];
            echo "<p>з $attents разів</p>";
            echo "<p>ти вийграв $won разів</p>";
            echo "<p>ти програв " . 10 - $won . " разів</p>";
            
            if($won >= 6){
                if($level == "easy" && $victory == 0 || $level == "normal" && $victory == 1){
                    ++$victory;
                }
                echo "<p class='echo'>      ти виграв цей рівень!<p>";
            } else{
                echo "<p class='echo'> ти не пройшов цей рівень, починай заново!!<p>";
            }
        }
        ?>
        <form action="start.php" method="post">
            <div class="wrapper">
                <input type="hidden" name="victory" value="<?= $victory ?>">
                
                    <label>
                        <p><button type="submit" class="aaa">перейти на наступний рівень</p>
                    </label>
            </div>
        </form> 

</body>
</html>