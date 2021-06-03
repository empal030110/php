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
        $example1 = 100.123;
        $example2 = "100";
        $example3 = "문자";

        if(is_numeric($example1)){
            print "숫자입니다 <br>";
        } else{
            print "숫자가 아닙니다 <br>";
        }

        if(ctype_digit($example2)){
            print "숫자입니다 <br>";
        } else{
            print "숫자가 아닙니다 <br>";
        }

        if(ctype_digit($example3)){
            print "숫자 입니다";
        } else{
            print "숫자가 아닙니다";
        }
    ?>
</body>
</html>