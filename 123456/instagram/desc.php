<?php
echo __LINE__.": 테이블 구조를 확인합니다.<br>";

include "theme.conf.php";
include "../dbinfo.php"; // DB접속 정보

//# DB접속
$db0 = new mysqli(
    $dbinfo['master']['dbhost'],
    $dbinfo['master']['dbuser'],
    $dbinfo['master']['dbpass'],
    $dbinfo['master']['dbschema'],
    $dbinfo['master']['dbport']
);

if ($db0) {
    echo __LINE__.": DB 접속 성공. 명령 실행 준비 단계.<br>";
    
    $tablename = "instagram";
    $query = "DESC phpdaemin5." . $tablename . ";";
    echo __LINE__.$query."<br>";
    $result = mysqli_query($db0, $query);
    if ($result) {
        echo __LINE__.": SQL 명령 실행 성공, 결과값이 있어요.<br>";
        while($row = mysqli_fetch_object($result)) {
            // print_r($row);
            echo "필드명:".$row->Field."<br>";
        }

    } else {
        echo __LINE__.": SQL 실행 오류<br>";

    }

} else {
    echo __LINE__.": 접속 실패<br>";
}