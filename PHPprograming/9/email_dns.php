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
        $email = 'dotetimer@dotecom';
        $host = explode('@', $email);

        if(count($host) != 2){
            echo $email .'오류입니다 <br>';
        } elseif(! checkdnsrr($host[1], 'MX') && ! checkdnsrr($host[1], 'A')){
            echo $email .'오류입니다 <br>';
        } else{
            echo $email .'유효성을 확인했습니다 <br>';
        }


        $email1 = 'dotetimer@dote.com';
        $host1 = explode('@', $email1);

        if(count($host1) != 2){
            echo $email1 .'오류입니다';
        } elseif(! checkdnsrr($host1[1], 'MX') && ! checkdnsrr($host1[1], 'A')){
            echo $email1 .'오류입니다';
        } else{
            echo $email1 .'유효성을 확인했습니다';
        }
    ?>
</body>
</html>