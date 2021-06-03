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
    include "db_init.php";

    $dsn = connect();
    
    $noteid = $_GET['id'];
    
    $note_share_sql = "UPDATE note SET note_status=1 WHERE noteid = '$noteid'";

    $note_share_stt = $dsn->prepare($note_share_sql);
    $note_share_stt->execute();

    echo "<script>
        alert('공유가 완료되었습니다.');
        history.back(-1);
        </script>";
?>
</body>
</html>