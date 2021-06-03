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
        $string = "<cite> 'PHP' 프로그래밍</cite>";
        echo "그대로 표시: $string <br>\n";
        echo 'htmlspecialchars() 함수로 표시: '.htmlspecialchars($string);
    ?>
</body>
</html>