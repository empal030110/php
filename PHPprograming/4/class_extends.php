<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>클래스 상속</title>
</head>
<body>
    <?php
        //부모 클래스
        class SuperClass{
            public function getSuperData(){
                return '부모 클래스';
            }
        }

        //자식 클래스
        class SubClass extends SuperClass{
            public function getSubData(){
                return '자식 클래스';
            }
        }

        function h($string){    //HTML에서 이스케이프 처리를 하는 함수
            return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
        }
        
        //SubClass 클래스의 객체 작성
        $obj = new SubClass();

        //SubClass의 getSuperData() 메소드를 실행하고 값을 echo문에서 표시
        echo h($obj->getSuperData()) . '<br>';

        //SubClass의 getSubData() 메소드를 실행하고 값을 echo문에서 표시
        echo h($obj->getSubData()) . '<br>';
    ?>
</body>
</html>