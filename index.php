<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    

    <?php 
        // $світло = 10;
        // $необхіднеОсвітлення = 7
        // if ($світло < $необхіднеОсвітлення && $світло > 0){
        //     echo ("робимо домашку");
        // } else {
        //     echo ("дзвонимо в аварійну службу Обленерго");
        // }
    ?>



    <form action="two.php" method="post">
        <p> за кого ти будеш грати?</p>
        <label>за людину<input type="radio" name="game" value="people"></label>
        <label>за машину<input type="radio" name="game" value="car"></label>
        <label><input type="submit"></label>
    </form>

</body>
</html>