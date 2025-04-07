<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>таблиця</title>
    <link rel="stylesheet" href="css/three-style.css">
</head>
    <body>
        <form action="massive-table.php" method="post">
            <?php
                session_start();
                // session_destroy();
            ?>


            <table>
                <tr>
                    <th rowspan="2">Ім'я</th>
                    <th rowspan="2">Група</th>
                    <th colspan="5">Графік</th>
                </tr>
                <tr>
                    <th>Понеділок</th>
                    <th>Вівторок</th>
                    <th>Середа</th>
                    <th>Четвер</th>
                    <th>П’ятниця</th>
                </tr>
                
                <?php
                    
                    $_SESSION['group'] = [
                        "11-ЕУ" => ["09:00", "10:00", "11:00", "12:00", "13:00"],
                        "ПЦБ-11-07" => ["18:00", "17:00", "16:00", "15:00", "14:00"],
                        "БО-11" => ["12:00", "11:00", "13:00", "15:00", "08:00"]
                    ];
                    
                    $days = ["Понеділок", "Вівторок", "Середа", "Четвер", "П’ятниця"];

                    if(isset($_SESSION['students'])){
                        $students = $_SESSION['students'];
                    } else{
                        $students = $_SESSION['students'] = [
                            ['name' => 'Петро', 'group' => '11-ЕУ'],
                            ['name' => 'Даніл', 'group' => 'ПЦБ-11-07'],
                            ['name' => 'Назар', 'group' => 'БО-11'],
                            ['name' => 'Оксана', 'group' => 'ПЦБ-11-07'],
                            ['name' => 'Андрій', 'group' => 'БО-11'], 
                            ['name' => 'Діана', 'group' => '11-ЕУ'], 
                            ['name' => 'Олексій', 'group' => 'БО-11'],
                            ['name' => 'Жанна', 'group' => 'ПЦБ-11-07'],
                            ['name' => 'Людмила', 'group' => 'БО-11'],
                            ['name' => 'Валентина', 'group' => '11-ЕУ']
                        ];
                    }
                    
                    if  (isset($_POST['add'])) {
                        $students[] = ['name' => $_POST['name'], 'group' => $_POST['group']];
                        $_SESSION['students'] = $students;
                    }
                    // echo "<pre>";
                    foreach ($students as $key => $student){
                        // var_dump($key);
                        $group = $student['group'];
                        echo "<tr>";
                        echo "<td>" . $student['name'] . "</td>";
                        echo "<td>$group</td>";
                        foreach ($_SESSION['group'] as $student_group => $time){
                            if($student_group == $student['group']){
                                foreach($time as $t){
                                    echo "<td>$t</td>";
                                }
                            }
                        }
                        echo "<td><form action='massive-table.php' method='post'><button name='delete' value='" . $key . "'>-</button><form></td>";
                        echo "</tr>";
                    }
                    
                    if(isset($_POST['delete'])){
                        array_splice($_SESSION['students'], $key, 1);
                    }
                ?>
            </table>
            <h2>Додати учня</h2>
            <input type="text" name="name" placeholder="ім'я">
            <select name="group">Група
                <option value="11-ЕУ">11-ЕУ</option>
                <option value="ПЦБ-11-07">ПЦБ-11-07</option>
                <option value="БО-11">БО-11</option>
            </select>
            <input type='submit' name='add' value='додати'>

        </form>
    </body>
</html>