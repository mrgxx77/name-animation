<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>екстасенс</title>
    <link rel="stylesheet" href="css/four.css">
</head>
<body>
    <form action="a-psychic.php" method="post">
        <div class="wrapper">

            <?php
                session_start();
                // session_destroy();

                // $secret_number = rand(1, 10);
                // $_SESSION['secret_number'] = $secret_number;
                if(isset($_SESSION['secret_number'])){
                    $number = $_SESSION['secret_number'] = $secret_number;
                } else{
                    $secret_number = $_SESSION['secret_number'] = rand(1, 10);
                }
                var_dump($_SESSION['secret_number']);
            ?>

            <select name="numeric">
                <?php 
                    for($i = 1; $i <= 10; $i++){
                        echo '<option value="' . $i . '">' . $i . '</option>';
                    }
                ?>
            </select>

            <?php
                // $attempts = 0;
                $answers = [];
                for($i = 0; $i < count($answers); $i++){
                    $answers[$i];
                }
                //count — Підраховує кількість елементів масиву або об’єкту Countable
                
                if(isset($_SESSION['numbers'])){
                    $students = $_SESSION['numbers'];
                } else{
                    $students = $_SESSION['numbers'] = [];
                }

                if  (isset($_POST['next']) && $answers != $number){
                    $_SESSION['numbers'] = $answers;
                }
                var_dump($_SESSION['numbers']);

                if(isset($_POST['next'])){
                    if ($answers == $number){
                        echo 'ви пройшли гру!!';
                        echo '<button type="submit" name="next">нова гра</button>';
                        // session_destroy();
                    } else if($answers != $number){
                        echo 'ви не вгадали';
                        // echo 'у вас залишилося' . 3-$attempts . 'спроб';
                    }
                }
            ?>

            <button type="submit" name="next">=></button>
        </div>
    </form>
</body>
</html>