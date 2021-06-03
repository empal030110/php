<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>배열 반복(foreach)</title>
</head>
<body>
    <?php
         $vagetables = array('corn'=>'노랑',
                            'beet'=>'빨강',
                            'carrot'=>'주황');

        foreach($vagetables as $key => $value){
            print "$key $value";
            ?> <br> <?php
        }
    ?>
</body>
</html>



<?php
    /*
        배열을 모두 출력하고 싶거나 반목문을 사용할 때는 보통 foreach를 사용
        foreach의 기본 구조는 
        foreach(배열 as $key => $value){
            print "$key $value";
        }
    */
?>