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
    
    $session_member_id = $_SESSION['member_id'];
    $noteid = $_GET['id'];
    $member_id = $_GET['member_id'];

    $stmt_id = "SELECT * from goodnote where noteid = '$noteid' AND member_id='$session_member_id'";
    $stmt_id_stt = $dsn->prepare($stmt_id);
    $stmt_id_stt->execute();
    $row_id = $stmt_id_stt->fetch(PDO::FETCH_ASSOC);
    
    if($session_member_id == $member_id){
        echo
            "<script>
            alert('자신의 노트에는 할 수 없습니다');
            history.back(-1);
            </script>";
    } elseif ($row_id>0){
        echo "<script>
              alert('이미 눌렀습니다');
              history.back(-1);
              </script>";
        exit();
    } else{
        
        $stmt = $dsn->prepare("INSERT into goodnote(noteid, member_id) values (?, ?)");
        $stmt->execute(array($noteid, $session_member_id));
        
        $goodnote_update_sql = "UPDATE note SET goodnote = goodnote + 1 WHERE noteid = '$noteid'";
        $goodnote_update_stt = $dsn->prepare($goodnote_update_sql);
        $goodnote_update_stt->execute();
        echo
            "<script>
            alert('좋아요를 눌렀습니다');
            history.back(-1);
            </script>";
    }
    ?>
</body>
</html>