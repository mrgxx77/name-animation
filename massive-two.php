<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/two-style.css">
</head>
<body>
    <?php
        $oneArrey = [
            "name" => 'Margarita',
            "surname" => 'Abramova',
            "phone number" => '+380960566436', 
            "age" => '12',
            "birthday" => '26th March',
        ]
    ?>

    <table>
        <tbody>
            <tr>
                <?php
                    foreach($oneArrey as $key => $value) {
                        echo '<td>' . $key . '</td>';
                    }
                ?>
            </tr>
            <tr>    
                <?php
                foreach($oneArrey as $key => $value) {
                    echo '<td>' . $value . '</td>';
                }
                ?>
            </tr>
        </tbody>
    </table>

</body>
</html>