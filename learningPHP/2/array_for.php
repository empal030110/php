<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>배열 반복(for)</title>
</head>
<body>
    <?php
        $computers = array('닌텐도',
                            '아타리',
                            '세가');
        
        $num = count($computers);
        for($i=0; $i<$num; $i++){
            print "번호: $i: $computers[$i]";
            ?> <br> <?php
        }
    ?>
</body>
</html>





<?php
    /*
        배열을 모두 출력하고 싶거나 반목문을 사용할 때는 보통 foreach를 사용 하지만 for도 많이 사용한다
        for의 기본 구조는 기존의 for문과 동일
        배열에 저장된 값들을 출력하고 싶을땐
        변수i를 통해 인덱스번호로 출력
    */
?>