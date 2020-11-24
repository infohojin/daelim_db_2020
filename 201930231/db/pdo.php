<?php

include "../dbinfo.php";

try {
    // 객체를 생성
    $db = new PDO (
        "mysql:host=".$dbinfo['master']['dbhost']
        .";dbname=".$dbinfo['master']['dbschema'].";",
        $dbinfo['master']['dbuser'],
        $dbinfo['master']['dbpass']
    );
    if($db) {
        echo "DB 접속 성공"."<br>";
    } else {
        echo "DB 접속 실패"."<br>";
    }
} catch(PDOException $e) {
    // 생성하다가 오류 발생
    echo $e->getMessage();
}