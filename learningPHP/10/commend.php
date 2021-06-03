<?php
    $c = curl_init('http://numbersapi.com/09/07');

    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);

    $fact = curl_exec($c);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    이 사건을 아세요?? <?= $fact ?>
</body>
</html>