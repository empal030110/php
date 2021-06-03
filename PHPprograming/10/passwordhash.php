<?php
    if(isset($_POST['submit'])){
        $password = $_POST['password'];

        $hash = password_hash($password, PASSWORD_DEFAULT);
    }
?>
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
        if(isset($hash)){
            echo '해시와 전 패스워드: ' .$password .'<br>';
            echo '해시화 후 패스워드: ' .$hash;
        }
    ?>
    <hr>
    <form action="passwordhash.php" method="post">
        <label for="password_hash.php">해시화하고 싶은 패스워드 문자열</label>
        <input type="text" name="password" id="password" value=""/>
        <input type="submit" name="submit" value="해시화"/>
    </form>
</body>
</html>