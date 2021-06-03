<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>로그인</title>
<link rel="stylesheet" href="css/login.css">
</head>
<body>
  <form action="login_action.php" method="post">
    <div class="wrap">
        <div class="login">
            <h2>LOGIN</h2>
            
            <div class="login_id">
                <h4>ID</h4>
                <input type="text" name="member_id" class="input" placeholder="id"/>
            </div>
            <div class="login_pw">
                <h4>Password</h4>
                <input type="password" name="member_password" class="input" placeholder="Password"/>
            </div>
            <div class="login_etc">
                <a href="signup.php">회원가입하러가기</a> 
                <a href="index.php">홈으로</a> 
            </div>
                <br>
            <div class="button">
                <input type="submit" class="submit" value="로그인">
            </div>
        </div>
    </div>
    </form>
</body>
</html>