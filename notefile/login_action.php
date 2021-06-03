  
<?php
  include "db_init.php";
  include "index.php"; 

  $dsn = connect();
  $member_id = $_POST['member_id'];
  $member_password = hash('sha512',$_POST['member_password']);

  $login_sql = "SELECT * FROM member WHERE member_id = '$member_id' AND member_password = '$member_password'";

  $login_stt=$dsn->prepare($login_sql);
  $login_stt->execute();
  $login_row = $login_stt->fetch(PDO::FETCH_ASSOC);

  if($member_id == null){
    echo
    "<script>
      alert('아이디를 입력하세요.');
      history.back(-1);
    </script>";
  }
  elseif($member_password == null){
    echo
    "<script>
      alert('비밀번호를 입력하세요.');
      history.back(-1);
    </script>";
  } 
  elseif(!$login_row){
    echo
    "<script>
        alert('아이디 또는 비밀번호가 일치하지 않습니다.');
        history.back(-1);
    </script>";
  } else{
        $_SESSION['member_id']=$member_id;
        $_SESSION['member_password']=$member_password;
  
        echo
          "<script>
              alert('로그인 성공');
              location.href='index.php';            
          </script>";
      }
?>