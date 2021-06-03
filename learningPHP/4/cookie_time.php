<?php
    setcookie('userid', 'dotetimer', time()+60*60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쿠키 시간 설정</title>
</head>
<body>
    <?php
        print 'Hello, '.$_COOKIE['userid'];
    ?>
</body>
</html>







<?php
    /*
        쿠키의 저장시간을 설정할 수 있다
        이렇게 사용하는데 기본적인 시간 단위가 초이기 때문에 60초를 기준으로 많이 사용한다
        예를 들어 쿠키 저장 시간을 1분으로 설정을 하고 1분뒤에 페이지를 새로고침을 하면 
        쿠키가 사라져서 출력이 안된다
    */
?>