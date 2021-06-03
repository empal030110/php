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
        $value = 0;
        while($value <= 5){
            
            print $value;

            if($value == 3){
                break;
            }

            $value++;

            ?> <br>
            <?php
        }
    ?>
</body>
</html>








<?php
    /*
        while문에서의 break도 for문과 별반 다를게 없음
    */
?>