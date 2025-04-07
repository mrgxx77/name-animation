<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
    if(isset($_POST["attents"])){
        $attents = $_POST["attents"];
    } else {
        $attents = 0;
    }
    if($_POST){
        $game = $_POST["game"];
        $minimum = rand(0, 1);
        $attents++;
        if ($game == $minimum){
            echo 'ти вийграв';
            
        } else{
            echo 'ти програв';
        }
    }
    echo "   " . $attents;   
?>


    <form action="
        <?php 
        if($attents < 9){
            echo 'orel-reshka.php';
        } else{
            echo 'result.php';
        }
        ?>
    " method="post">
        <h2>вибери орла і решку</h2>
        <label>
            <p><input type="checkbox" name="game" value="1">орел</p>
        </label>
        <label>
            <input type="hidden" name="attents" value="<?= $attents ?>">
        </label>
        <label>
            <p><input type="checkbox" name="game" value="0">решка</p>
        </label>
        <label>
            <p><input type="submit"></p>
        </label>
    </form>
</body>
</html>