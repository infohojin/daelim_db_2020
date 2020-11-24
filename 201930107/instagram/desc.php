<?php
include "theme.conf.php";
include "../dbInfo.php"; // db 접속 정보

// echo __LINE__.": 테이블 구조 확인";
// echo "<br>";

// db 접속
// $db0 = new mysqli(
//     $dbInfo['master']['dbHost'], 
//     $dbInfo['master']['dbUser'], 
//     $dbInfo['master']['dbPass'], 
//     $dbInfo['master']['dbSchema'], 
//     $dbInfo['master']['dbPort']
// );

if($db0) {
    // echo __LINE__.": DB 접속 성공, 명령 실행 준비 단계";
    // echo "<br>";

    // echo "DB 접속 성공.<br>";
    // $tablename = "instagram";
    // $tableInfo = desc($db0, $tablename);

    // echo "<pre>";
    // print_r($tableInfo);
    // echo "</pre>";

    // foreach ($tableInfo as $fieldName) {
    //     echo "<label for='$fieldName'>$fieldName</label><br><input type='text' id='$fieldName' name='$fieldName'><br>";
    // }

} else {
    echo __LINE__.": 접속 실패";
    echo "<br>";
}

function desc($db, $tablename) {
    $query = "desc phpdaelim5.$tablename;"; // SQL 쿼리문
    
    // 쿼리 정보 전송,
    // 결과값
    $result = mysqli_query($db, $query); // DB서버로 전송

    
    if($result) {
        // echo __LINE__.": SQL 명령 실행 성공";
        // echo "<br>";

        $fields = [];
        
        while($row = mysqli_fetch_object($result)) {
            // echo "필드명 : ".$row->Field."<br>";
            $fields []= $row->Field;
        }
        
    } else {
        echo __LINE__.": 데이터 읽기 실패";
        echo "<br>";
    }

    return $fields;
}