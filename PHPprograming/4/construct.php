<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>생성자</title>
</head>
<body>
    <?php
        class MyClass{
            public function __construct($arg){
                echo '생성자: ' .h($arg);
            }
        }

        function h($string){ //HTML에서 이스케이프 처리를 하는 함수
            return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
        }

        $obj = new MyClass('테스트');
    ?>
</body>
</html>












<?php
    /*
        class 클래스명
        {
            public function __construct(인수){
                처리 스크립트
            }
        }
    */
?>