<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메일 주소 형식 확인</title>
</head>
<body>
    <?php
        $email = $_POST['email'];

        if(isset($email)){
            $pattern = "/\A([a-z0-9_\-\+\/\?]+)(.[a-z0-9_\-\+\/\?]+)*" ."@([a-z0-9\-]+\.)+[a-z]{2,6}\z/i";

            if(preg_match($pattern, $email)){
                echo $email .'은 메일 주소로서 올바른 형식입니다.';
            } else{
                echo $email .'은 메일 주소로서 올바른 형식이 아닙니다';
            }
        }
    ?>

    <form action="email_check.php" method="post">
       <p>메일 주소를 입력해 주세요</p>
        <input type="email" name="email" />
        <input type="submit"/>
    </form>
</body>
</html>