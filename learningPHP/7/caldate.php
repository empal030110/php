<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>날짜 계산</title>
</head>
<body>
    <?php
        $now = new DateTime();
        $birthdate = new DateTime('2003-01-10');
        $diff = $birthdate->diff($now);

        if(($diff->y > 13) && ($diff->invert == 0)){
            print "13세 이상입니다";
        } else{
            print "제한 연령입니다";
        }
    ?>
</body>
</html>