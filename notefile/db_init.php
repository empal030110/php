<?php

function connect(){
    $dbServer = 'localhost'; 
    $dbUser = '';   
    $dbPass = ''; 
    $dbName = '';

    $dsn = "mysql:localhost={$dbServer};dbname={$dbName};charset=utf8";  
    try{
        $connect = new PDO("mysql:host=localhost;port=3306;dbname=$dbName;charset=utf8", $dbUser, $dbPass); 
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connect; 
    } catch(PDOException $ex){   
        echo "서버와의 연결 실패! : ".$ex->getMessage()."<br>";    
    }
}
?>