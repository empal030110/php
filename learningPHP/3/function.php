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

        function plus($num1, $num2){
            echo $num1+$num2;
        }

        plus(80, 50); 
    ?> 

</body>
</html>








<?php
    /*
        함수의 기본 형식은 이럼

        function 함수명(인수){
            처리 스크립트
        }

        위의 예제는 두수의 덧셈을 하는 함수
        함수로 값을 전달할때는 함수명(전달할 값) 이렇게 전달
        순서대로 값이 전달됨 80은 $num1로 전달된고 50은 $num2로 전달됨

    */
?>