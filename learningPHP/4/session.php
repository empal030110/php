<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>세션 정보저장, 확인</title>
</head>
<body>
    <?php
        if(isset($_SESSION['count'])){
            $_SESSION['count'] = $_SESSION['count'] + 1;
        } else{
            $_SESSION['count'] = 1;
        }
        print "당신은 이 페이지를 " .$_SESSION['count'] ."번 보셨습니다";
    ?>
</body>
</html>








<?php
    /*
        세션도 값을 저장할 때 사용한다
        세션은 배열로 저장이 된다
        세션을 사용하기위해선 
        session_start()를 써야 한다
    */
?>