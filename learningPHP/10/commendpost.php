<?php
    $data = array(
        'test' => 'test'
    );
     
    $url = "https://www.daum.net";
     
    $c = curl_init($url);                                 //curl 초기화
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);    //요청 결과를 문자열로 반환 
    curl_setopt($c, CURLOPT_POSTFIELDS, $data);       //POST data
    curl_setopt($c, CURLOPT_POST, true);              //true시 post 전송 
     
    var_dump(curl_exec($c));
?>