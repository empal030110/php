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
        $password = 'dotetimer';
        $encrypted_password = password_hash( 'dotetimer', PASSWORD_DEFAULT );

        echo '패스워드: ' .$password .'<br/>';
        echo '암호화 패스워드: ' . $encrypted_password;
        
        if (password_verify($password, $encrypted_password)){
            echo "<h1> 일치 </h1>";
        } else{
            echo "<h1> 불일치 </h1>";
        }
    ?>
</body>
</html>