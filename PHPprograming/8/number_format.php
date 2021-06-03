<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = 100000000;
        print number_format($num) ."<br>";

        $num1 = 1000.456;
        print number_format($num1, 1);
    ?>
</body>
</html>
