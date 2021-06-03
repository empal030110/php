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
        $dinner = '갑오징어 카레';

        function dinner(){
            $GLOBALS['dinner'] = '볶음밥';
            
        }

        print "일반 저녁 메뉴는 $dinner 입니다<br>\n";
        dinner();
        print "저녁 특선 메뉴는 $dinner 입니다";
    ?>
</body>
</html>








<?php
    /*
        함수 내부에서 전역변수의 값을 변경 할 수 있다
        $GLOBALS함수를 사용하면 가능한데 사용방법은 일반 변수처럼 사용하면 된다
        위의 예제를 실행시켜보면 

        처음 출력되는 값은 갑오징어 카레이다 그리고 함수를 실행시켜서 다시 출력을 해보면
        볶음밥으로 값이 바뀌어있다
    */
?>