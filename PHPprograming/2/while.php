<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>반복문(while)</title>
</head>
<body>
    <?php
        $value = 0;
        while($value <= 5){
            print $value;
            $value++;
            ?> <br>
            <?php
        }
    ?>
</body>
</html>





<?php
    /*
        while은 for문과 다르게 처리스크립트 부문에서 증감식을 사용함
        while문의 기본 구조는 
        while(조건식){
                처리 스크립트
            }
    */
?>