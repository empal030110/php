<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>배열</title>
</head>
<body>
    <?php
        //방법 1
        $vagetables = array('corn'=>'노랑',
                            'beet'=>'빨강',
                            'carrot'=>'주황');

        //방법 2
        $dinner = [0 => '스위트콘과 아스파라거스',
                    1 => '레몬 치킨',
                    2 => '삶은 망태버섯'];

        //방법 3
        $computers = array('컴퓨터',
                            '그래픽카드',
                            '램');
        
        print_r($vagetables);
        ?> <br>
        <?php
        print_r($dinner);
        ?> <br>
        <?php
        print_r($computers);
        ?> <br>
        <?php
        print "$computers[0]와 $computers[2]를 주세요.";
    ?>
</body>
</html>




<?php
    /*
        배열 만드는 방법 많음
        배열을 출력 할때는 print_r
        배열은 인덱스 번호로 0부터 시작
    */
?>