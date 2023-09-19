<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <?php
        $student = ["firstname" => "Andrieu", "lastname" => "QUENTIN", "average" => 10];

        print_r($student["lastname"] . ' ' . $student["firstname"] . ' a une moyenne de ' . $student["average"]);

        ?>
    </body>

</html>