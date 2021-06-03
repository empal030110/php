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
        $string1 = "<p> PHP\n공부\n재미있어요 </p>";
        $string2 = nl2br("PHP\n공부\n재미있어요");
        echo $string1;
        echo $string2;
    ?> 
</body>
</html>