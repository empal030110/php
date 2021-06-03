<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php
include "db_init.php";

$member_id = $_POST['member_id'];
$member_password = $_POST['member_password'];

$dsn = connect();

$stmt_id = $dsn->prepare('SELECT * from member where member_id=:member_id');
$stmt_id->bindParam(':member_id', $member_id);
$stmt_id->execute();
$row_id = $stmt_id->fetch(PDO::FETCH_ASSOC);

if ($member_id == null){
    echo "<script>
          alert('아이디를 입력해 주십시오.');
          history.back(-1);
          </script>";
    exit();
} elseif(!preg_match("/^[a-z]/i", $member_id)){
    echo "<script>
          alert('아이디의 첫글자는 영문이어야 합니다.');
          history.back(-1);
          </script>";
    exit();
} elseif(preg_match("/[^a-z0-9-_]/i", $member_id)) {
    echo "<script>
            alert('아이디는 영문, 숫자, -, _ 만 사용할 수 있습니다.');
            history.back(-1);
          </script>";
    exit();
} elseif(preg_match("/admin/i", $member_id)) {
    echo "<script>
            alert('아이디에 admin을 사용할 수 없습니다.');
            history.back(-1);
          </script>";
    exit();
} elseif ($row_id>0){
    echo "<script>
          alert('중복된 아이디입니다. 다른 아이디를 사용해 주십시오.');
          history.back(-1);
          </script>";
    exit();
} 
if ($member_password == null){
    echo "<script>
          alert('비밀번호를 입력해 주십시오.');
          history.back(-1);
          </script>";
    exit();
} elseif(preg_match("/[^a-z0-9~!@]/i", $member_password)) {
    echo "<script>
            alert('비밀번호는 영문, 숫자, ~, !, @ 만 사용할 수 있습니다.');
            history.back(-1);
          </script>";
    exit;
} 

$hash = hash('sha512', $member_password);
$member_id = $_POST['member_id'];

$stmt = $dsn->prepare("INSERT into member(member_id, member_password) values (?, ?)");
$stmt->execute(array($member_id, $hash));

echo "<script>
        alert('회원가입이 완료되었습니다.');
        location.href='index.php';
        </script>";

?>



</body>
</html>