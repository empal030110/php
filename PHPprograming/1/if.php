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
        $point = 30;
        $line = 80;
        $underline = 40;

        if($point >= $line){
            echo '합격 라인';
        } elseif($point >= $underline){
            echo '추가 시험 라인';
        } else{
            echo '낙제 라인';
        }
    ?>
</body>
</html>