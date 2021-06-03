<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>반복문 벗어나기(while)</title>
</head>
<body>
    <?php
        $value = 1;
        while($value <= 10){
            
            if($value % 2 == 1){
                $value++;
                continue;
            }
            
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
        while문에서도 for문과 다를 것 없이 사용하지만
        while에서는 처리스크립트에서 증감식을 사용하기 때문에
        continue하기 전에 증감식을 넣어줘야함

        그렇지 않으면 변수value의 숫자가 증가하지 않아 무한반복 됨
    */
?>