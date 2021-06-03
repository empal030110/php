<?php
    setcookie('username', 'dotetimer', 0, '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쿠키 경로 설정</title>
</head>
<body>
    <?php
        print 'go check cookie, ' .$_COOKIE['username'];
    ?>
    <a href="cookie_route_check.php">경로 설정 확인하기</a>
</body>
</html>







<?php
    /*
        쿠키를 저장 할 수 있는 경로도 설정할 수 있다
        모든 페이지에 저장을 하고 싶다면 '/' 이렇게 쓰면 모든 페이지에서 사용가능하고
        /dotetimer/이렇게 사용하면 dotetimer라는 디렉터리 안의 파일들만 사용가능하다
    */
?>