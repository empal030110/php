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

        function macrobiotic_dinner(){
            $dinner = "모둠 채소";
            print "저녁 메뉴는 $dinner 입니다<br>\n";

            print "하지만 저는 ";
            print $GLOBALS['dinner'];
            print "를 먹겠어요<br>\n";
        }

        macrobiotic_dinner();
        print "일반 저녁 메뉴: $dinner";

    ?>
</body>
</html>








<?php
    /*
        변수에는 지역변수와 전역변수가 있음
        함수 안에서 변수를 선언한다면 그 변수는 지역변수임
        위의 예제에서 보면 맨 위에 $dinner가 선언됨
        그리고 macrobiotic_dinner함수에서도 $dinner가 선언됨 하지만 이둘은 다른 변수임
        지역변수는 그 지역내에서 즉 함수내에서만 유효하지만 전역변수는 모든 곳에 유효하다

        함수 내에서 전역변수와 지역변수의 이름이 같을 때 전역변수를 사용하고 싶다면 GLOBALS함수를 사용하면 된다
        $GLOBALS['전역변수 이름'] 이렇게 사용하면 한 영역 내에서 이름이 같은 지역변수와 전역변수를 사용할 수 있다 
    */
?>