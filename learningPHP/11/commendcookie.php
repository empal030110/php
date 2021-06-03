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
        $value = $_COOKIE['c']??0;
        $value++;
        setcookie('c', $value);
        print "쿠키 개수: " .count($_COOKIE). "\n";
        foreach($_COOKIE as $k => $v){
            print "$k: $v";
        }
    ?>
</body>
</html>