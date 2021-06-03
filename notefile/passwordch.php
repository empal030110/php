<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="css/passwordch.css" rel="stylesheet" type="text/css" />
<body>
    <?php
        session_start();
        include "header.php";
    ?>
    <form action="passwordch_action.php" method="POST">
    <div class="passwordch">
        <table>
            <h2>패스워드 변경</h2>
            <tr>
                <td><input type="password" name="nowpassword" class="password" placeholder="현재 패스워드를 적어주세요."/></td>
            </tr>
            <tr>
                <td><input type="password" name="chpassword" class="password" placeholder="변경할 패스워드를 적어주세요."/></td>
            </tr>
            <tr>
                <td><input type="password" name="chpasswordcheck" class="password" placeholder="변경할 패스워드를 한번 더 적어주세요."/></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" class="passwordchbtn" value="변경"/>
                    <input type="button" onclick="location.href='myinfo.php'" class="passwordchbtn" value="뒤로가기"/>
                </td>
            </tr>
        </table> 
    </div>
    </form>
</body>
</html>