<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>날짜 출력</title>
</head>
<body>
    <?php
        $d = new DateTime();
        print '현재 시각: ';
        print $d->format('r');
        print "<br>\n";
    ?>
</body>
</html>