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
        print add();

        function add($num1=100, $num2=50){
            $result = $num1 + $num2;
            return $result;
            echo "return문에 의해 출력 실패.....";
        }
        
    ?>
</body>
</html>








<?php
    /*
        위의 함수처럼 값을 전달하지 않고도 값을 정해서 사용가능
        그리고 위의 함수에서는 return을 사용
        함수에서 return을 만나면 함수가 종료됨
    */
?>