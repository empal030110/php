
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $c = curl_init('http://api.example.com');
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($c);
    $info = curl_getinfo($c);

    if($result == false){
        print "오류 #" .curl_errno($c). "<br>";
        print "cURL 오류입니다: " .curl_error($c) ."<br>";
    } elseif($info['http_code'] >= 400){
        print "서버가 HTTP 오류를 반환했습니다 {$info['http_code']}.<br>";
    } else{
        print "점속에 성공했습니다!<br>";
    }

    print "접속에 소요된 시간은 {$info['total_time']} 초 입니다.";
?>    
</body>
</html>