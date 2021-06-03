<?php
     session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css/header.css">
<body>
    <?php
        if(!isset($_SESSION['member_id'])){
    ?>
        <header>
        <a href="index.php">홈으로</a>
        <a href="mynote.php">나의 노트</a>
        <a href="allnote.php">전체 노트</a>
        <a href="topnote.php">인기 노트</a>
        <a href="login.php">로그인</a>
        <a href="signup.php">회원가입</a>
        </header>
        <div class="form">
        <form action="search.php" method="POST">
            <input type="text" name="search" class="search" placeholder="제목 기준으로 검색"/>
            <input type="submit" value="검색"/>
        </form>
        </div>
    <?php 
	} else{
    ?>
    <header>
        <a href="index.php">홈으로</a>
        <a href="mynote.php">나의 노트</a>
        <a href="allnote.php">전체 노트</a>
        <a href="topnote.php">인기 노트</a>
        <a><?= $_SESSION['member_id']; ?> </a>
        <a href="myinfo.php">내정보</a>
        <a href="logout.php">로그아웃</a>
    </header>

    <div class="form">
    <form action="search.php" method="POST">
            <input type="text" name="search" class="search" placeholder="제목 기준으로 검색"/>
            <input type="submit" value="검색"/>
    </form>
    </div>
    <?php
    }
    ?>
</body>
</html>