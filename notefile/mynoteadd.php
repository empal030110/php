<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>노트 추가하기</title>
</head>
<link rel="stylesheet" href="css/mynoteadd.css">
<body>
    <?php
        include "header.php";
    ?>
    <div class="addnote">
    <form action="mynoteadd_action.php" method="post">
        <table class="table" align="center">
            <tr>
                <th>작성자</th>
                <td><input type="text" class="input" name="notewrite" value="<?= $_SESSION['member_id'] ?>" readonly/></td>
            </tr>
            <tr>
                <th>제목</th>
                <td><input type="text" class="input" name="notetitle"/></td>
            </tr>
            <tr>
                <th>내용</th>
                <td><textarea name="notedescription" class="textarea" placeholder="저장할 내용을 적어주세요"></textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" class="btn" value="등록"/>
                    <input type="button" class="btn" onclick="history.back()" value="뒤로가기"/>
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>