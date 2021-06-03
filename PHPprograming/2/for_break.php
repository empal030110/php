<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>반복문 벗어나기(for)</title>
</head>
<body>
    <?php
        for($value=0; $value <=5; $value++){
            print $value?> <br>
            <?php
            if($value == 3){
                break;
            }
        }
    ?>
</body>
</html>





<?php
    /*
        반복문을 사용하다보면 중간에 반복문을 멈춰야 할 때가 있음
        그때 쓰는게 break문
        보통 조건식와 함께 사용함
    */
?>