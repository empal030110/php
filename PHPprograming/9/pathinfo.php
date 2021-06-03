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
        $_FILES['example']['name'] = $_POST['example'];

        if(isset($_FILES['example']['name']) && $_FILES['example']['name'] != ''){

            $localFilename = basename($_FILES['example']['name']);
            $pathinfo = pathinfo($localFilename);

            if(isset($pathinfo['extension'])){
                echo $localFilename .'의 확장자: ';
                echo $pathinfo['extension'];
            } else{
                echo $localFilename .'의 확장자는 없습니다';
            }
        }
    ?>

    <p>파일을 지정해 주세요</p>
    <form action="pathinfo.php" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
        <input type="file" name="example"/>
        <input type="submit"/>
    </form>
</body>
</html>