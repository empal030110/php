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
        $c = curl_init('http://localhost/learning/1cookieset.php/cookie-server.php');
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);

        $res = curl_exec($c);
        print $res;

        $res = curl_exec($c);
        print $res;
    ?>
</body>
</html>