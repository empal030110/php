<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>형식 문자열 출략</title>
</head>
<body>
    <?php
        $d = new DateTime();
        print $d->format('y/m/d');
    ?>
</body>
</html>