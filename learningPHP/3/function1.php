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
        function countdown($top){
            while($top>0){
                print "$top...";
                $top--;
            }
            print "펑!";?> <br> <?php
        }
        
        $counter = 5;
        countdown($counter);
        print "counter의 값: $counter";
    ?>
</body>
</html>








<?php
    /*
        인수의 값을 변환하면서 사용가능함
        countdown이라는 함수에 $counter 변수를 전달함 전달 값은 5
        반복문을 통해 $top이 0보다 작을 때 까지 반복함
        실행을 시켜보면 1까지 나오고 펑!까지 출력됨
        $counter는 값을 전달만 해서 $counter의 값은 변하지 않기 때문에 처음 선언했던 그대로 5가 저장되어있음
    */
?>