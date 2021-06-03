<?php
    include "header.php";
    $member_id = $_SESSION['member_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>내정보</title>
</head>
<link href="css/myinfo.css" rel="stylesheet" type="text/css" />
<body>
    <div class="myinfo">
        <h1><?=$member_id?>님의 정보</h1>
        <div class="myinfoid">
            <h3>아이디: <?=$member_id?></h3>
        </div>
        <div>
            <input type="button" onclick="location.href='passwordch.php'"  class="updatebtn" value="패스워드 변경">
        </div>
        <div class="deletebtn">
            <input type="button" onclick="memberdel()" class="delbtn" value="회원삭제">
        </div>
    </div>

    <script>
        function memberdel(){
            if(confirm("정말 삭제하시겠습니까?"))
            {
                location.href="member_delete.php";
            } else {
                location.href="myinfo.php";
            }
        }
    </script>

</body>
</html>