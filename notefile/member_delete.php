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
    session_start();
    include 'db_init.php';

    $dsn = connect();

    $member_id = $_SESSION['member_id']; //현재 로그인되어있는 아이디
    $memberdel_sql = "DELETE FROM member WHERE member_id = '$member_id'";

    $memberdel_stt = $dsn->prepare($memberdel_sql);
    $memberdel_stt->execute();

    echo "<script>location.href='logout.php';</script>";
?>
</body>
</html>