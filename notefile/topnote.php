<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>인기 노트</title>
</head>
<link rel="stylesheet" href="css/allnote.css">
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
    <h1>인기 노트</h1>
    </div>

    <?php
        $dsn = connect();

        $allnote_select = "SELECT noteid, member_id, title FROM note WHERE note_status = 1 AND goodnote >= 10";
        $allnote_select_stt = $dsn->prepare($allnote_select);
        $allnote_select_stt->execute();
    ?>

    <div class="table_position">
    <table align="center" class="table" border="1">
    <?php
        while($row = $allnote_select_stt->fetch(PDO::FETCH_ASSOC)){
            ?> 
            <tr rowspan="2">
                <th colspan="2" align="left" class="note" style="font-size: 30px; background-color: rgb(171, 128, 226);" onclick="location.href='allnoteread.php?id=<?=$row['noteid']?>'"> <?php echo $row['member_id'] ?> </th>
            </tr>
            <tr>
                <td colspan="2" class="note" style="font-size: 24px" onclick="location.href='allnoteread.php?id=<?=$row['noteid']?>'"> <?php echo $row['title'] ?> </td>
            </tr>
            <?php
        }
    ?>
    </table>
    </div>

</body>
</html>