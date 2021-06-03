<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>반복문 건너뛰기</title>
</head>
<body>
    <?php
        for($value=1; $value <=10; $value++){
            if($value % 2 == 1){
                continue;
            }
            print $value;
            ?> <br>
            <?php
        }
    ?>
</body>
</html>






<?php
    /*
        또 한번씩 넘어가야할때도 있음
        그때 쓰는게 continue 
        간단한 예시가 1~10까지 짝수 구하기

        continue는 밑으로 가는 것이 아닌 위로가는 것
        그렇기 때문에 예제와 같이 사용하면 print로 가는것이 아니라
        위의 for문으로 가짐
    */
?>