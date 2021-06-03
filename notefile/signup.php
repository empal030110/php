<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>회원가입</title>
<link rel="stylesheet" href="css/signup.css">
</head>
<body>
  <form action="signup_action.php" method="post">
    <div class="wrap">
        <div class="join">
            <h2>signUp</h2>
            
            <div class="join_id">
                <h4>ID</h4>
                <input type="text" name="member_id" placeholder="id"/>
            </div>

            <div class="join_pw">
                <h4>Password</h4>
                <input type="password" name="member_password" id="" placeholder="Password">
            </div>

                <br>
            <a href="login.php">로그인</a>
            <a href="index.php">홈으로</a>
            <div class="button">
                <input type="submit" class="submit" value="회원가입">
            </div>
           
        </div>
    </div>
    </form>
</body>
</html>