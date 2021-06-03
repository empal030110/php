<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>나의 노트</title>
</head>
<link rel="stylesheet" href="css/mynote.css">
<body>
    <?php
        include "db_init.php";
        include "header.php";

        $member_id = $_SESSION['member_id'];
        if($member_id == null){
        echo "<script>
            alert('로그인 후 이용해주세요.');
            location.href='login.php';
        </script>";
    }
    ?>
    <div class="top">  
    <h1>나의 노트</h1>
    
    <div>
    <a href="mynoteadd.php">노트 추가하기</a>
    </div>
    </div>

    <?php
        $dsn = connect();

        $mynote_select = "SELECT noteid, member_id, title, note_status FROM note WHERE member_id = '$member_id'";
        $mynote_select_stt = $dsn->prepare($mynote_select);
        $mynote_select_stt->execute();
    ?>

    <div class="table_position">
    <table align="center" class="table" border="1">
    <?php
        while($row = $mynote_select_stt->fetch(PDO::FETCH_ASSOC)){
    ?>
            <tr rowspan="2">
                <th colspan="2" align="left" class="note" style="font-size: 30px; background-color: rgb(171, 128, 226);" onclick="location.href='noteread.php?id=<?=$row['noteid']?>'"> <?php echo $row['member_id'] ?> </th>
            </tr>
            <tr>
                <td colspan="2" class="note" style="font-size: 24px" onclick="location.href='noteread.php?id=<?=$row['noteid']?>'"> <?php echo $row['title'] ?> </td>
            </tr>
            <tr>
                <td class="note"> <input type="button" onclick="notedel()" class="stopbtn" value="삭제"/> </td>
            <?php 
                if($row['note_status'] == 0){
            ?>
                <td class="note"> <input type="button" onclick="noteshare()" class="stopbtn" value="공유"/> </td>
            <?php
                } else{
            ?>
                <td class="note"> <input type="button" onclick="notesharestop()" class="stopbtn" value="공유취소"/> </td>
            <?php
                }
            ?>
            </tr> 

            <script>    
                function notedel(){
                    if(confirm("정말 삭제하시겠습니까?"))
                    {
                        location.href='mynotedel.php?id=<?php echo $row['noteid'] ?>';
                    } else {
                        location.href='mynote.php';
                    }
                }

                function noteshare(){
                    if(confirm("정말 공유하시겠습니까?"))
                    {
                        location.href='mynoteshare.php?id=<?php echo $row['noteid'] ?>';
                    } else {
                        location.href='mynote.php';
                    }
                }

                function notesharestop(){
                    if(confirm("정말 공유취소하시겠습니까?"))
                    {
                        location.href='mynotesharestop.php?id=<?php echo $row['noteid'] ?>';
                    } else {
                        location.href='mynote.php';
                    }
                }
            </script>
    <?php
        }
    ?>
    </table>
    </div>

            
</body>
</html>