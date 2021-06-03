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
        $noteid = $_GET['id'];

        $dsn = connect();

        $note_select = "SELECT * FROM note WHERE noteid = '$noteid'";
        $note_select_stt = $dsn->prepare($note_select);
        $note_select_stt->execute();
    ?>
    <table border="1" class="table" align="center">
            <tr>
                <th>노트번호</th>
                <th>작성자</th>
                <th>노트제목</th>
                <th>내용</th>
                <th>공유상태</th>
                <th>좋아요</th>
            </tr>
    <?php
            while($record = $note_select_stt->fetch(PDO::FETCH_ASSOC)){
    ?> 
        <form action="note_update.php" method="POST">
            <tr>
                <td><input type="text" class="input_text" name="noteid" value=<?php echo $record['noteid']; ?>  readonly/></td>
                <td><?php echo $record['member_id']; ?></td>
                <td><input type="text" name="title" value=<?php echo $record['title']; ?> /></td>
                <td> <textarea name="description"><?php echo $record['description']; ?></textarea> </td>
                <td> <?php
                        if($record['note_status']==1){
                            echo "공유중"; 
                        } else{
                        echo "공유안함";
                        }
                    ?>  </td>
                <td><?php echo $record['goodnote']; ?></td>
                <td><input type="submit" value="변경" class="submit" width="5vh"/></td>
            </tr> 
            <tr>
            
            </tr>
        </form>
    <?php
        }
    ?>
        </table>
    
</body>
</html>