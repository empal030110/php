<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Test 클래스 정의
        class Test{

        //프로퍼티 초기화
            public $var1 = 1;
            public $var2 = 2;

            function show(){
                //show() 메소드의 지역변수
                $var1 = 'var2';

                echo '$this-&gt;var1: ' . h($this->var1) . '<br>';
                echo '$var1: ' . h($var1) . '<br>';
                echo '$this-&gt: ' . h($this->$var1) . ' <br>';
            }
        }

        //HTML에서 이스케이프 처리를 하는 함수
        function h($string){
            return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
        }

        //Test 클래스를 인스턴스화
        $obj = new Test();

        //Test 객체의 show() 메소드를 호출
        $obj->show();

        //Test 객체의 프로퍼티 var1을 외부에서 변경
        $obj->var1 = 99;

        //Test 객체의 프로퍼티 var1을 외부에서 취득
        echo h($obj->var1) . '<br>';

        //Test 객체의 show() 메소드를 호출
        $obj->show();
    ?>
</body>
</html>






<?php
    /*
    class 클래스명
    {
        //프로퍼티
        private $프로퍼티명

        //메소드
        public function 메소드명
        {
            처리스크립트
        }
    }
     */

?>