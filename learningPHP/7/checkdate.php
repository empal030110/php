<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>다양한 날짜/시간 문자열</title>
</head>
<body>
    <?php
        if(checkdate(3, 35, 2016)){
            print "2016년 3월 35일은 올바른 날짜입니다";
        }
        if(checkdate(2, 29, 2016)){
            print "2016년 2월 29일은 올바른 날짜입니다";
        }
        if(checkdate(2, 29 ,2017)){
            print "2017년 2월 29일은 올바른 날짜입니다";
        }
    ?>
</body>
</html>