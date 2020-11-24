<?php

include "../dbinfo.php";

try{
    $db = new PDO(
        "mysql:host=".$dbinfo['master']['dbhost']
        .";dbname=".$dbinfo['master']['dbschema'].";", 
        $dbinfo['master']['dbuser'], 
        $dbinfo['master']['dbpass']
    );
    
    if($db){
        echo "DB접속 성공";
    } else{
        echo "DB접속 실패";
    }
} catch(PDOException $e){
    // 생성하다가 오류가 났어요
    echo $e->getMessage();
}