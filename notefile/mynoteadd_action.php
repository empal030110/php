<?php
    session_start();
    include "db_init.php";
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
        $member_id = $_POST['notewrite'];
        $title = $_POST['notetitle'];
        $description = $_POST['notedescription'];

        $dsn = connect();

        $stmt = $dsn->prepare("INSERT INTO note(member_id, title, description, note_status, goodnote) values (?, ?, ?, ?, ?)");
        $stmt->execute(array($member_id, $title, $description, 0, 0));

        echo "<script>
        alert('등록이 완료외었습니다.');
        location.href='mynote.php';
        </script>";

    ?>
</body>
</html>