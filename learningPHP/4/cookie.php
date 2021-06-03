<?php
    setcookie('userid', 'dotetimer');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쿠키 설정, 쿠키 출력</title>
</head>
<body>
    <?php
        print 'Hello, ' .$_COOKIE['userid'];
    ?>
</body>
</html>







<?php
    /*
        쿠키를 설정하기 위해 setcookie() 함수를 사용
        쿠키는 문자열이나 숫자를 저장 할 수 있다
        배열 또는 복잡한 데이터 구조는 저장 할 수 없다
    */
?>