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
        $a = 8;
        $b = 16;

        if($a<10 && $b>10){
            $format = '$a(%s)는 10보다 작고, 동시에 $b(%s)는 10보다 크다.<br>';
            echo sprintf($format, $a, $b);
        }
        if($a<10 && $b<10){
            $format = '$a(%s)는 10보다 작고, 동시에 $b(%s)는 10보다 작다.<br>';
            echo sprintf($format, $a, $b);
        }

        if($a>10 || $b>10){
            $format = '$a(%s)는 10보다 크고 또는 $b(%s)는 10보다 크다.<br>';
            echo sprintf($format, $a, $b);
        }
        if($a>10 || $b<10){
            $format = '$a(%s)는 10보다 크고 또는 $b(%s)는 10보다 작다.<br>';
            echo sprintf($format, $a, $b);
        }
        if(! ($a>10)){
            $format = '$a(%s)는 10보다 크지 않다.<br>';
            echo sprintf($format, $a);
        }
        if(! ($a<10)){
            $format = '$a(%s)는 10보다 작지 않다.<br>';
            echo sprintf($formatm, $a);
        }
    ?>
</body>
</html>