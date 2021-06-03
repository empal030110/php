<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>배열 크기</title>
</head>
<body>
    <?php
        $computers = array('닌텐도',
        '아타리',
        '세가');

        $count = count($computers);

        print "배열의 총 개수: $count";
    ?>
</body>
</html>



<?php
    /*
        count를 이용해 배열의 크기를 알 수 있음
    */
?>