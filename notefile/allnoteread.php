<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>노트 보기</title>
</head>
<link rel="stylesheet" href="css/noteread.css">
<body>
    <?php
        include "db_init.php";
        include "header.php";

        $member_id = $_SESSION['member_id'];
        if($member_id == null){
        echo "<script>
            alert('로그인 후 이용해주세요.');
            history.back(-1);
        </script>";
        }
        $noteid = $_GET['id'];

        $dsn = connect();

        $note_select = "SELECT noteid, member_id, title, description, goodnote FROM note WHERE noteid = '$noteid'";
        $note_select_stt = $dsn->prepare($note_select);
        $note_select_stt->execute();
    ?>
    <table border="1" class="table" align="center">
            <tr>
                <th class="th">노트번호</th>
                <th class="th">작성자</th>
                <th class="th">노트제목</th>
                <th class="th">내용</th>
                <th class="th">좋아요</th>
                <th></th>
            </tr>
    <?php
            while($record = $note_select_stt->fetch(PDO::FETCH_ASSOC)){
    ?> 
            <tr>
                <td> <?php echo $record['noteid']; ?> </td>
                <td> <?php echo $record['member_id']; ?> </td>
                <td> <?php echo $record['title']; ?> </td>
                <td> <textarea readonly><?php echo $record['description']; ?></textarea> </td>
                <td> <?php echo $record['goodnote']; ?> </td>
                <td> <input type="button" onclick="goodnote()" class="goodnote" value="좋아요"/> </td>
            </tr> 

            <script>
                function goodnote(){
                    if(confirm("좋아요를 누르시겠습니까?"))
                    {
                        location.href='goodnote.php?id=<?php echo $record['noteid'] ?>&member_id=<?php echo $record['member_id'] ?>';
                    } else {
                        location.href='allnote.php';
                    }
                }
            </script>
    <?php
        }
    ?>
        </table>
    
</body>
</html>