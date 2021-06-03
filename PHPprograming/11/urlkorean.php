<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="urlkorean.php" method="get">
        <input type="text" name="data"/>
        <input type="submit" value="전송"/>
    </form>

    <?php
        if(isset($_GET['data'])){
            $string = $_GET['data'];

            $urlencode = rawurlencode($_GET['data']);
            $url = $_SERVER['SCRIPT_NAME'] . '?data2=' .$urlencode;
            echo '처리 전 문자열: ' .$string . '<br>';
            echo '인코딩 처리 후: ' .$urlencode . '<br>';
            echo '<a href="' .$url .'">링크</a>';
        }

        if(isset($_GET['data2'])){
            $string = $_GET['data2'];
            echo '디코딩 처리 후: ' .$string;
        }
    ?>
</body>
</html>