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
    include "db_init.php";

    $dsn = connect();
    
    $nowpassword = hash('sha512', $_POST['nowpassword']);
    $chpassword = hash('sha512', $_POST['chpassword']);
    $chpasswordcheck = hash('sha512', $_POST['chpasswordcheck']);
    $member_password = $_SESSION['member_password'];

    if($member_password != $nowpassword){
        echo "<script>
            alert('현재 패스워드를 확인해 주십시오.');
            history.back(-1);
        </script>";
    }
    elseif($chpassword != $chpasswordcheck){
        echo "<script>
            alert('변경할 패스워드와 패스워드확인이 다릅니다');
            history.back(-1);
        </script>";
    } else{
        $member_id = $_SESSION['member_id'];
        $chpassword_sql = "UPDATE member SET member_password = '$chpassword' WHERE member_id = '$member_id'";

        $chpassword_stt = $dsn->prepare($chpassword_sql);
        $chpassword_stt->execute();

        $_SESSION['member_password']=$chpassword;

        echo "<script>
            alert('변경이 완료되었습니다.');
            location.href='index.php';
            </script>";
    }
?>
</body>
</html>