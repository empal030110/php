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
    
    $noteid = $_POST['noteid'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    $note_update_sql = "UPDATE note SET title = '$title', description = '$description' WHERE noteid = '$noteid'";

    $note_update_stt = $dsn->prepare($note_update_sql);
    $note_update_stt->execute();

    echo "<script>
        alert('변경이 완료되었습니다.');
        location.href='mynote.php';
        </script>";
?>
</body>
</html>